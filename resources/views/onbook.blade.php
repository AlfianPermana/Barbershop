@extends('layouts.app')


@section('content')

<div class="container-fluid overflow-hidden position-relative">
    <div class="container-fluid position-relative" style="height: 100vh; width: 100vw;">
        <div class="d-flex justify-content-end align-items-end">
            <div class=" position-absolute"
                style="height: 45rem; width: 45rem; border-radius: 100%; right: -15rem; bottom: -17rem;border: 3rem solid #f4b324;z-index: -1">
            </div>
        </div>
        <div class="mt-5 container-fluid d-flex justify-content-center align-items-center text-white h-100 w-100"
            style="z-index: 1">
            <div class="row w-100" style=";margin-right: 1rem">
                <div class="col-6 d-flex flex-column justify-content-center align-items-start">
                    <div class="mb-2" style="font-size: 38px;font-weight: 700">Book Your Appointment Now</div>
                    <div class="mb-1">Looking to book a session? Fill out the form below to reserve your spot. Our team
                        will confirm
                        your booking and provide all the details for your upcoming visit.</div>
                    <div>For any inquiries regarding bookings, modifications, or cancellations, feel free to reach out
                        to us directly or contact us via whatsapp.</div>
                </div>
                <div class="col-6 bg-white rounded text-dark" style="box-shadow: 0 4px 10px rgba(169, 169, 169, 0.5);">
                    <form class="p-2" action="">
                        <div class="mb-4" style="font-size: 38px;font-weight: 700">Online Booking</div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                            <input type="type" class="form-control" name="fullname" id="exampleFormControlInput1"
                                placeholder="Input Your Name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="exampleFormControlInput1"
                                placeholder="Input Your Email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Address</label>
                            <input type="type" class="form-control" name="address" id="exampleFormControlInput1"
                                placeholder="Input Your Address">
                        </div>
                        <div class="mb-3">
                            <div class="container-fluid p-0">
                                <div class="row">
                                    <div class="col-6"><label for="exampleFormControlInput1" class="form-label">Phone
                                            Number</label>
                                        <input type="Number" class="form-control" name="phone"
                                            id="exampleFormControlInput1" placeholder="Input Your Phone">
                                    </div>
                                    <div class="col-6"><label for="exampleFormControlInput1" class="form-label">Choose
                                            Barber</label>
                                        <select name="barber" id="" class="form-select">
                                            <option selected>Barber</option>
                                            <option value="1">Suep Suprayitno</option>
                                            <option value="2">Arief Surrahman</option>
                                            <option value="3">Bodrek Batako</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="mb-5">
                            <div class="container-fluid p-0">
                                <div class="row">
                                    <div class="col-6"><label for="exampleFormControlInput1" class="form-label">Booking
                                            Date</label>
                                        <input type="date" class="form-control" name="tanggal"
                                            id="exampleFormControlInput1" placeholder="name@example.com">
                                    </div>
                                    <div class="col-6"><label for="exampleFormControlInput1" class="form-label">Booking
                                            Time</label>
                                        <input type="time" class="form-control" name="jam" id="exampleFormControlInput1"
                                            placeholder="name@example.com">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid d-flex justify-content-end align-items-end w-100 h-50">
                            <button class="p-2 bg-dark text-white"
                                style="border-radius:50px; border: 3px solid #f4b324;width: 35%">Book</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection