<!DOCTYPE html>
<html>

<head>
    <title>Appointment Confirmation</title>
</head>

<body>
    <h1>Appointment Confirmation</h1>
    <p>Dear {{ $appointment->fullname }},</p>
    <p>Thank you for booking an appointment. Here are your appointment details:</p>
    <ul>
        <li><strong>Full Name:</strong> {{ $appointment->fullname }}</li>
        <li><strong>Email:</strong> {{ $appointment->email }}</li>
        <li><strong>Phone:</strong> {{ $appointment->phone }}</li>
        <li><strong>Barber:</strong> {{ $appointment->barber }}</li>
        <li><strong>Date:</strong> {{ $appointment->tanggal }}</li>
        <li><strong>Time:</strong> {{ $appointment->jam }}</li>
        <li><strong>Address:</strong> {{ $appointment->address }}</li>
    </ul>
    <p>Looking forward to serving you!</p>
</body>

</html>