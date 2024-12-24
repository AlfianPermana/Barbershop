@extends('layouts.app')

<style>
    .paper-wrap {
        width: 100%;
        height: 200px;
        font-family: 'Times New Roman', serif;
        background-color: #f8f8f8;
        background-image: url("{{ asset('comp/alat.jpg') }}");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>


@section('content')
<div class="text-white" style="font-family: 'Merriweather', serif;padding-left: 4rem;padding-right: 4rem">
    <div class="paper-wrap">
        <div style="position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 200px;
    background-color: rgba(0, 0, 0, 0.3);
    z-index: 1;"></div>
    </div>

    <div class="text-center text-white my-5"
        style="font-family: 'Merriweather', serif;font-size: 64px;font-weight: 900;z-index: 10">
        About
        Us</div>
    <div class="container-fluid text-white">
        <div class="d-flex justify-content-center w-100 " style="margin-bottom: 3rem">
            <!-- Kolom Pertama: Grid 2x2 -->
            <div class="col-8 d-grid" style="grid-template-columns: 1fr 1fr; grid-template-rows: auto auto; gap: 1rem;">
                <!-- Elemen dengan tinggi kustom -->
                <div class="grid-item" style="grid-row: span 2; height: 34rem; overflow: hidden; position: relative;">
                    <img src="{{ asset('comp/fotbar.jpg') }}" alt="" class="img-fluid"
                        style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0;">
                </div>
                <div class="grid-item" style="overflow: hidden; position: relative;">
                    <img src="{{ asset('comp/ruangan.jpg') }}" alt="" class="img-fluid"
                        style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0;">
                </div>
                <div class="grid-item" style="overflow: hidden; position: relative;">
                    <img src="{{ asset('comp/hajar.jpg') }}" alt="" class="img-fluid"
                        style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0;">
                </div>
            </div>

            <!-- Kolom Kedua: Tetap -->
            <div class="col-4 d-flex flex-column justify-content-center align-items-center ms-4"
                style="font-size: 16px;font-family: 'Merriweather', serif">
                <div class="mb-1">Welcome to [Barbershop Name], where tradition meets modern style. We specialize in
                    providing top-quality grooming services in a comfortable and welcoming environment. Our expert
                    barbers
                    are passionate about delivering precise haircuts, clean shaves, and personalized treatments
                    tailored
                    to
                    each client's unique style. Whether you're here for a quick trim or a complete grooming
                    experience,
                    we’re dedicated to making sure you leave looking and feeling your best. At [Barbershop Name], we
                    believe
                    every man deserves a haircut that suits his personality, and we’re here to help you achieve just
                    that.
                </div>
            </div>
        </div>
    </div>

    <p class="text-center my-4" style="font-size: 48px;">Why You Should Choose <span style="color: #f4b324">Us</span>
    </p>

    <div class="conteiner">
        <div class="row">
            <div class="col">
                <div class="container my-4">
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <!-- Item 1 -->
                        <div class="col">
                            <div class="rounded"
                                style="height: 20rem;background-image: url({{ asset('comp/us1.jpg') }});background-size: cover;background-repeat: no-repeat;background-position: center">
                            </div>
                        </div>
                        <!-- Item 2 -->
                        <div class="col">
                            <div class="rounded"
                                style="height: 20rem;background-image: url({{ asset('comp/us2.jpg') }});background-size: cover;background-repeat: no-repeat;background-position: center">
                            </div>
                        </div>
                        <!-- Item 3 -->
                        <div class="col">
                            <div class="rounded"
                                style="height: 20rem;background-image: url({{ asset('comp/us3.jpg') }});background-size: cover;background-repeat: no-repeat;background-position: center">
                            </div>
                        </div>
                        <!-- Item 4 -->
                        <div class="col">
                            <div class="rounded bg-danger"
                                style="width: 100%;height: 20rem;background-image: url({{ asset('comp/us4.jpg') }});background-size: cover;background-repeat: no-repeat;background-position: center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col d-flex flex-column justify-content-between my-4" style="font-size: 20px">
                <div class="d-flex align-items-center">
                    <i class="bi bi-check-circle-fill me-3 mb-2" style="color: #f4b324; font-size: 60px;"></i>
                    <p class="mb-0" style="text-align: left;">
                        <span style="color: #f4b324;">Professional Stylists</span>, our team consists of experienced
                        barbers who are
                        passionate about delivering precise cuts and personalized styles.
                    </p>
                </div>
                <div class="d-flex align-items-center">
                    <i class="bi bi-check-circle-fill me-3 mb-2" style="color: #f4b324; font-size: 60px;"></i>
                    <p class="mb-0" style="text-align: left;">
                        <span style="color: #f4b324;">Easy Appointments</span>, Flexible scheduling options make it easy
                        to fit your grooming needs into your busy lifestyle.
                    </p>
                </div>
                <div class="d-flex align-items-center">
                    <i class="bi bi-check-circle-fill me-3 mb-2" style="color: #f4b324; font-size: 60px;"></i>
                    <p class="mb-0" style="text-align: left;">
                        <span style="color: #f4b324;">Attention to Detail</span>, We take pride in our craftsmanship,
                        focusing on the smallest details to achieve perfection
                    </p>
                </div>
                <div class="d-flex align-items-center">
                    <i class="bi bi-check-circle-fill me-3 mb-2" style="color: #f4b324; font-size: 60px;"></i>
                    <p class="mb-0" style="text-align: left;">
                        <span style="color: #f4b324;">Premium Products</span>, We use only high-quality grooming
                        products to ensure the best care for your hair and scalp.
                    </p>
                </div>
                <div class="d-flex align-items-center">
                    <i class="bi bi-check-circle-fill me-3 mb-2" style="color: #f4b324; font-size: 60px;"></i>
                    <p class="mb-0" style="text-align: left;">
                        <span style="color: #f4b324;">Affordable Luxury</span>, Get premium barber services at
                        affordable prices that fit your budget.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="Text-center" style="color: #f4b324;margin:3rem;font-size: 48px;font-weight: 900;">Our Gallery</div>

    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-3 gambar p-0 m-3" style="aspect-ratio: 1 / 1;">
                <img data-default-image="{{ asset('comp/side.png') }}" data-hover-image="{{ asset('comp/fotbar.jpg') }}"
                    src="{{ asset('comp/side.png') }}" alt="" class="m-0 gambar"
                    style="width: 100%; height: 85%; object-fit: cover;object-position: center;">
                <div class="text-center p-2" style="height: auto;font-size: 24px;font-weight: 700">Buzz Cut
                </div>
            </div>
            <div class="col-3 gambar p-0 m-3" style="aspect-ratio: 1 / 1;">
                <img data-default-image="{{ asset('comp/side.png') }}" data-hover-image="{{ asset('comp/fotbar.jpg') }}"
                    src="{{ asset('comp/side.png') }}" alt="" class="m-0 gambar"
                    style="width: 100%; height: 85%; object-fit: cover;object-position: center;">
                <div class="text-center p-2" style="height: auto;font-size: 24px;font-weight: 700">Buzz Cut
                </div>
            </div>
            <div class="col-3 gambar p-0 m-3" style="aspect-ratio: 1 / 1;">
                <img data-default-image="{{ asset('comp/side.png') }}" data-hover-image="{{ asset('comp/fotbar.jpg') }}"
                    src="{{ asset('comp/side.png') }}" alt="" class="m-0 gambar"
                    style="width: 100%; height: 85%; object-fit: cover;object-position: center;">
                <div class="text-center p-2" style="height: auto;font-size: 24px;font-weight: 700">Buzz Cut
                </div>
            </div>
            <div class="col-3 gambar p-0 m-3" style="aspect-ratio: 1 / 1;">
                <img data-default-image="{{ asset('comp/side.png') }}" data-hover-image="{{ asset('comp/fotbar.jpg') }}"
                    src="{{ asset('comp/side.png') }}" alt="" class="m-0 gambar"
                    style="width: 100%; height: 85%; object-fit: cover;object-position: center;">
                <div class="text-center p-2" style="height: auto;font-size: 24px;font-weight: 700">Buzz Cut
                </div>
            </div>
            <div class="col-3 gambar p-0 m-3" style="aspect-ratio: 1 / 1;">
                <img data-default-image="{{ asset('comp/side.png') }}" data-hover-image="{{ asset('comp/fotbar.jpg') }}"
                    src="{{ asset('comp/side.png') }}" alt="" class="m-0 gambar"
                    style="width: 100%; height: 85%; object-fit: cover;object-position: center;">
                <div class="text-center p-2" style="height: auto;font-size: 24px;font-weight: 700">Buzz Cut
                </div>
            </div>
            <div class="col-3 gambar p-0 m-3" style="aspect-ratio: 1 / 1;">
                <img data-default-image="{{ asset('comp/side.png') }}" data-hover-image="{{ asset('comp/fotbar.jpg') }}"
                    src="{{ asset('comp/side.png') }}" alt="" class="m-0 gambar"
                    style="width: 100%; height: 85%; object-fit: cover;object-position: center;">
                <div class="text-center p-2" style="height: auto;font-size: 24px;font-weight: 700">Buzz Cut
                </div>
            </div>

        </div>

    </div>

    <div class="container-fluid rounded px-4 position-relative"
        style="width: 80%;background-color: #f4b324; height: 25rem;margin-top: 5rem;margin-bottom: 3rem">
        <div class="row h-100">
            <div class="col-8 d-flex flex-column justify-content-center p-4 h-100 ">
                <div class="mb-3" style="font-size: 38px;font-weight: 700">Ingin tampil maksimal dengan gaya rambut
                    terbaik? Yuk, Booking
                    Sekarang!</div>
                <div class="mb-3" style="font-size: 14px;">Kami siap memberikan pengalaman grooming premium dengan
                    layanan
                    profesional di
                    barbershop kami.
                    Jangan tunggu lagi, jadwalkan janji temu Anda dan rasakan transformasi gaya Anda hari ini!</div>
                <a href="/31">
                    <button class="py-2 px-4 bg-dark text-white border-0"
                        style=";border-radius: 50px; width: fit-content; transition: 0.3s; font-weight: bold; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);">
                        Book Now
                    </button>
                </a>

            </div>
            <div class="col-4">
                <div class="position-absolute"
                    style="height: 120%;width: 100%;background-image: url('{{ asset('comp/iklan.png') }}'); background-size: contain; background-position: center; background-repeat: no-repeat;bottom: 0;right:-25rem">
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    document.querySelectorAll('.gambar img').forEach(function (imageElement) {
        const defaultImage = imageElement.getAttribute('data-default-image');
        const hoverImage = imageElement.getAttribute('data-hover-image');

        imageElement.addEventListener('mouseenter', function () {
            imageElement.src = hoverImage; // Ganti gambar dengan gambar hover
        });

        imageElement.addEventListener('mouseleave', function () {
            imageElement.src = defaultImage; // Kembali ke gambar default
        });
    });
</script>
@endsection