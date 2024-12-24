@extends('layouts.app')

@section('content')

<div class="container-fluid overflow-hidden position-relative" style="font-family:'Merriweather', serif">
    <div class="container-fluid position-relative" style="height: 100vh; width: 100vw;">
        <div class="d-flex justify-content-end align-items-end">
            <div class=" position-absolute"
                style="height: 45rem; width: 45rem; border-radius: 100%; right: -15rem; bottom: -17rem;border: 3rem solid #f4b324;z-index: -1">
            </div>
        </div>
        <div class="mt-5 container-fluid d-flex justify-content-center align-items-center text-white h-100 w-100"
            style="z-index: 1">
            <div class="row w-100" style="margin-right: 1rem">
                <div class="col-6 bg-white rounded text-dark" style="box-shadow: 0 4px 10px rgba(169, 169, 169, 0.5);">
                    <form class="p-2" action="{{ route('input.appointment') }}" method="POST">
                        @csrf
                        <div class="mb-4" style="font-size: 38px;font-weight: 700">Book Appointment</div>

                        <!-- Full Name -->
                        <div class="mb-3">
                            <label for="fullname" class="form-label">Full Name</label>
                            <input type="text" name="fullname" class="form-control" id="fullname"
                                placeholder="Input Your Name">
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="Input Your Email">
                        </div>

                        <!-- Address -->
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" id="address"
                                placeholder="Input Your Address">
                        </div>

                        <!-- Phone Number & Barber -->
                        <div class="mb-3">
                            <div class="container-fluid p-0">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input type="number" name="phone" class="form-control" id="phone"
                                            placeholder="Input Your Phone">
                                    </div>
                                    <div class="col-6">
                                        <label for="barber" class="form-label">Choose Barber</label>
                                        <select name="barber" id="barber" class="form-select">
                                            <option value="">Pilih Barber</option>
                                            <!-- Barber options will be updated dynamically -->
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Time and Date -->
                        <div class="mb-4">
                            <div class="container-fluid p-0">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="jam" class="form-label">Choose Time:</label>
                                        <select id="jam" class="form-select" name="jam" required
                                            onchange="updateBarbers()">
                                            <option value="">-- Pilih Jam --</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label for="tanggal" class="form-label">Choose Date:</label>
                                        <input type="date" name="tanggal" id="tanggal" class="form-control"
                                            onchange="updateBarbers()">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="container-fluid d-flex w-100 h-50">
                            <button class="p-2 bg-dark"
                                style="border-radius:50px; border: 3px solid #f4b324;width: 35%;color: #f4b324;">Book</button>
                        </div>
                    </form>
                </div>

                <!-- Info Section -->
                <div class="ps-4 col-6 d-flex flex-column justify-content-center align-items-start">
                    <div class="mb-2" style="font-size: 38px;font-weight: 700">Book Your Appointment Now</div>
                    <div class="mb-1">Looking to book a session? Fill out the form below to reserve your spot. Our team
                        will confirm your booking and provide all the details for your upcoming visit.</div>
                    <div>For any inquiries regarding bookings, modifications, or cancellations, feel free to reach out
                        to us directly or contact us via WhatsApp.</div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Function to generate time options dynamically
    function generateTimeOptions() {
        const dropdown = document.getElementById('jam');
        const startHour = 11;
        const endHour = 20;
        const interval = 1;

        for (let hour = startHour; hour <= endHour; hour++) {
            let start = hour;
            let end = hour + interval;
            let startFormatted = start < 10 ? '0' + start : start;
            let endFormatted = end < 10 ? '0' + end : end;
            let optionText = `${startFormatted}:00 - ${endFormatted}:00`;

            let option = document.createElement("option");
            option.value = `${startFormatted}:00-${endFormatted}:00`;
            option.textContent = optionText;
            dropdown.appendChild(option);
        }
    }

    generateTimeOptions();

    // Function to update available barbers based on selected time and date
    function updateBarbers() {
        const tanggal = document.getElementById('tanggal').value;
        const jam = document.getElementById('jam').value;
        const barberSelect = document.getElementById('barber');
        const selectedBarber = barberSelect.value;  // Menyimpan barber yang sudah terpilih

        // Ambil semua barber yang ada
        const allBarbers = @json($barberOptions);  // Daftar barber yang tersedia di frontend

        console.log("Selected Date:", tanggal);
        console.log("Selected Time:", jam);
        console.log("All Barbers:", allBarbers);

        if (tanggal && jam) {
            fetch('/appointments/get-available-barbers', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ tanggal: tanggal, jam: jam })
            })
                .then(response => response.json())
                .then(data => {
                    console.log("API Response:", data); // Debugging: memeriksa respons dari API

                    const takenBarbers = data.taken || [];
                    console.log("Taken Barbers:", takenBarbers);

                    const availableBarbers = allBarbers.filter(barber => !takenBarbers.includes(barber));
                    console.log("Available Barbers:", availableBarbers);

                    barberSelect.innerHTML = '<option value="">Pilih Barber</option>';

                    // Menampilkan hanya barber yang tersedia
                    availableBarbers.forEach(barber => {
                        const option = document.createElement('option');
                        option.value = barber;
                        option.textContent = barber;

                        // Menjaga pilihan barber yang sudah terpilih
                        if (barber === selectedBarber) {
                            option.selected = true;
                        }

                        barberSelect.appendChild(option);
                    });
                });
        } else {
            // Jika tanggal atau jam belum dipilih, tampilkan semua barber
            barberSelect.innerHTML = '<option value="">Pilih Barber</option>';

            allBarbers.forEach(barber => {
                const option = document.createElement('option');
                option.value = barber;
                option.textContent = barber;

                // Menjaga pilihan barber yang sudah terpilih
                if (barber === selectedBarber) {
                    option.selected = true;
                }

                barberSelect.appendChild(option);
            });
        }
    }

</script>

@endsection