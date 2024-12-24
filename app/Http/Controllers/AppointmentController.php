<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bookappo;
use Illuminate\Support\Facades\Validator;
use App\Mail\AppointmentConfirmation;
use Illuminate\Support\Facades\Mail;
use Telegram\Bot\Api;


class AppointmentController extends Controller
{
    public function create(Request $request)
    {
        $barberOptions = ["Barber 1", "Barber 2", "Barber 3"];

        // Kirim data ke view
        return view('bookappoint', compact('barberOptions'));
    }

    public function sendTelegramNotification($message)
    {
        $telegram = new Api(env('TELEGRAM_BOT_TOKEN'));
        $chatId = env('TELEGRAM_CHAT_ID');

        try {
            $response = $telegram->sendMessage([
                'chat_id' => $chatId,
                'text' => $message,
            ]);

            return $response;
        } catch (\Exception $e) {
            // Log error jika terjadi
            \Log::error('Telegram Notification Error: ' . $e->getMessage());
            return false;
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|numeric|digits_between:10,15',
            'barber' => 'required|string',
            'jam' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $appointment = new bookappo();
        $appointment->fullname = $request->input('fullname');
        $appointment->email = $request->input('email');
        $appointment->address = $request->input('address');
        $appointment->phone = $request->input('phone');
        $appointment->barber = $request->input('barber');
        $appointment->jam = $request->input('jam');
        $appointment->tanggal = $request->input('tanggal');
        $appointment->save();

        $message = "Order Baru Masuk! 🚀\n"
            . "Nama: {$appointment->fullname}\n"
            . "Email: {$appointment->email}\n"
            . "Telepon: {$appointment->phone}\n"
            . "Tanggal: {$appointment->tanggal}\n"
            . "Jam: {$appointment->jam}\n"
            . "Barber: {$appointment->barber}";

        // Kirim notifikasi ke Telegram
        $telegramResponse = $this->sendTelegramNotification($message);

        if (!$telegramResponse) {
            return redirect()->back()->with('error', 'Gagal mengirim notifikasi Telegram!');
        }

        // Kirim Email
        Mail::to($appointment->email)->send(new AppointmentConfirmation($appointment));

        return redirect()->back()->with('success', 'Appointment booked successfully!');
    }

    public function getAvailableBarbers(Request $request)
    {
        $tanggal = $request->tanggal;
        $jam = $request->jam;

        // Ambil janji yang ada berdasarkan jam dan tanggal
        $appointments = bookappo::where('tanggal', $tanggal)->where('jam', $jam)->get();

        // Ambil barber yang sudah dipilih pada jam dan tanggal yang dipilih
        $takenBarbers = $appointments->pluck('barber')->toArray();

        // Daftar semua barber
        $allBarbers = ["Barber 1", "Barber 2", "Barber 3"];

        // Ambil barber yang belum dipilih (yang tidak ada dalam daftar barber yang sudah dipilih)
        $availableBarbers = array_diff($allBarbers, $takenBarbers);

        // Kirim kedua daftar (yang sudah dan yang belum dipilih) ke frontend
        return response()->json([
            'taken' => $takenBarbers, // Barber yang sudah dipilih
            'available' => $availableBarbers // Barber yang belum dipilih
        ]);
    }




}
