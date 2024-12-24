@extends('layouts.app')

<style>
    .rating {
        direction: rtl;
        display: inline-flex;
        justify-content: center;
    }

    .rating input {
        display: none;
    }

    .rating label {
        font-size: 4rem;
        color: #ddd;
        cursor: pointer;
        transition: color 0.3s;
    }

    .rating label:hover,
    .rating label:hover~label {
        color: #f4b324;
    }

    .rating input:checked~label {
        color: #f4b324;
    }

    svg text {
        text-transform: uppercase;
        font-size: 10rem;
        animation: stroke 5s infinite alternate;
    }

    input::placeholder,
    textarea::placeholder {
        color: white !important;
        opacity: 0.8 !important;
    }

    @keyframes stroke {
        0% {
            stroke: white;
            stroke-width: 0;
            stroke-dashoffset: 25%;
            stroke-dasharray: 0 50%;
        }

        70% {
            stroke: white;
        }

        80% {
            stroke: white;
            stroke-width: 3;
        }

        100% {
            stroke: white;
            stroke-width: 0;
            stroke-dashoffset: -25%;
            stroke-dasharray: 50% 0;
        }
    }
</style>

@section('content')

<div class="container-fluid p-0 text-white" style="font-family: 'Merriweather', serif">
    <div class="cointainer-fluid" style="height: 100vh">
        <div
            style="height: 75%; background-image: url('{{ asset('comp/toko.webp') }}'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        </div>
        <div class="text-center d-flex justify-content-center align-items-center"
            style="height: 25%; font-family: 'Merriweather', serif; ">
            <svg class="w-100 h-100" viewBox="0 0 1320 300">
                <text fill="#f4b324" x="50%" y="50%" text-anchor="middle" alignment-baseline="middle">
                    Cakmo Barbershop
                </text>
            </svg>
        </div>
    </div>
    <div class="container-fluid py-4" style="background-color: #424B53">
        <div class="container-fluid d-flex" style="padding-left:4rem; padding-right: 4rem">
            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-4 d-flex justify-content-center flex-column">
                        <div style="font-size: 48px; font-weight: 700">
                            See You Here
                        </div>
                        <div>
                            Our skilled barbers are ready to provide a fresh style tailored just for you. Let’s create
                            your next look together!
                        </div>
                        <button class="mt-4 py-2 px-4 bg-dark text-white"
                            style="border: 2px solid #f4b324;border-radius: 50px; width: 12rem; transition: 0.3s; font-weight: bold; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);">
                            Book Now
                        </button>
                    </div>
                    <div class="col-4"><iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.2942814068942!2d113.21867937481807!3d-7.7585815922604775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7add46163f58f%3A0x1b854552fa8efac3!2sToko%20A2!5e0!3m2!1sid!2sid!4v1733892338099!5m2!1sid!2sid"
                            width="420" height="450" style="border:0;border-radius: 10px" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                    <div class="col-4 d-flex flex-column justify-content-center">
                        <div class="d-flex align-items-center" style="height:8rem; border-bottom: 2px solid #f4b324">
                            <div class="d-flex me-4 rounded align-items-center justify-content-center"
                                style="width: 5rem;height: 5rem; background-color: #f4b324"><i class="bi bi-telephone"
                                    style="font-size: 3rem"></i>
                            </div>
                            <div class="d-flex flex-column" style="font-size: 18px">
                                <div>+62 21 234 567 890</div>
                                <div>susislasin@gmail.com</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center" style="height:8rem; border-bottom: 2px solid #f4b324">
                            <div class="d-flex me-4 rounded align-items-center justify-content-center"
                                style="width: 5rem;height: 5rem; background-color: #f4b324"><i class="bi bi-geo-alt"
                                    style="font-size: 3rem"></i>
                            </div>
                            <div style="font-size: 18px">Jalan Panglima Sudirman, Jakarta, Indonesia</div>
                        </div>
                        <div class="d-flex align-items-center" style="height:8rem;">
                            <div class="d-flex me-4 rounded align-items-center justify-content-center"
                                style="width: 5rem;height: 5rem; background-color: #f4b324"><i class="bi bi-clock"
                                    style="font-size: 3rem"></i>
                            </div>
                            <div class="d-flex flex-column" style="font-size: 18px">
                                <div>Senin - Jumat : 08.00 - 17.00</div>
                                <div>Sabtu : 09.00 - 22.00</div>
                                <div>Minggu : Libur</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form action="{{ route('input.ulasan')}}" method="POST">
        @csrf
        <div class="container d-flex justify-content-center" style="margin-top: 3rem;margin-bottom: 3rem">
            <div class="container-fluid bg-dark p-4 rounded d-flex align-items-center flex-column"
                style="width: 75%;border: 3px solid #f4b324">
                <div style="font-size: 26px;font-weight: 800;margin-bottom: 2rem">Contact Us & Let’s Collaborate!</div>
                <input style="border-radius: 0;border:none;border-bottom: 2px solid #f4b324"
                    class="bg-dark form-control mb-3 text-white" name="nama" type="text" placeholder="Input your name"
                    aria-label="default input example">
                <input style="border-radius: 0;border:none;border-bottom: 2px solid #f4b324"
                    class="bg-dark form-control mb-3 text-white" type="text" name="heading"
                    placeholder="Input Ulasan Singkat" aria-label="default input example">
                <input style="border-radius: 0;border:none;border-bottom: 2px solid #f4b324"
                    class="bg-dark form-control mb-3 text-white" type="number" name="telepon"
                    placeholder="Input your phone number" aria-label="default input example">
                <textarea style="border-radius: 0;border:none;border-bottom: 2px solid #f4b324"
                    class="form-control bg-dark text-white mb-4" id="exampleFormControlTextarea1" name="ulasan" rows="6"
                    placeholder="Leave a comment here"></textarea>
                <div class="rating mb-3">
                    <input type="radio" id="star5" name="bintang" value="5">
                    <label for="star5" title="5 stars">★</label>
                    <input type="radio" id="star4" name="bintang" value="4">
                    <label for="star4" title="4 stars">★</label>
                    <input type="radio" id="star3" name="bintang" value="3">
                    <label for="star3" title="3 stars">★</label>
                    <input type="radio" id="star2" name="bintang" value="2">
                    <label for="star2" title="2 stars">★</label>
                    <input type="radio" id="star1" name="bintang" value="1">
                    <label for="star1" title="1 star">★</label>
                </div>
                <button class="btn btn-outline-warning mt-3" style="width: 50%">Submit</button>
            </div>
        </div>
    </form>

</div>

</div>

@include('partials.footer')
@endsection