@extends('layouts.app')

@section('title', 'Botakseng House')

<style>
    .btn-book:hover {
        background-color: #f4b324 !important;
        color: #333 !important;
    }

    .pagination {
        display: flex;
        justify-content: center;
        margin-top: 20px;
        list-style: none;
        padding-left: 0;
    }

    .pagination li {
        margin: 0 5px;
    }

    .pagination li a,
    .pagination li span {
        padding: 10px 15px;
        background-color: #f4b324;
        border-radius: 5px;
        color: white;
        text-decoration: none;
    }

    /* Styling untuk tombol panah kiri dan kanan */
    .pagination .page-link {
        color: white;
        /* Mengubah warna teks panah */
    }

    .pagination .page-item:first-child .page-link {
        background-color: #f4b324;
        /* Warna tombol 'Previous' */
        border-radius: 5px;
    }

    .pagination .page-item:last-child .page-link {
        background-color: #f4b324;
        /* Warna tombol 'Next' */
        border-radius: 5px;
    }

    .pagination .page-link:hover {
        background-color: #d28e0c;
        /* Warna hover pada tombol panah */
    }

    .pagination .active a {
        background-color: #d28e0c;
        color: #fff;
    }

    .pagination .disabled a {
        background-color: #ccc;
        cursor: not-allowed;
    }


    .pagination .page-item.active .page-link {
        background-color: #333;
        /* Warna latar belakang halaman aktif */
        border-color: #f4b324;
        /* Border halaman aktif */
        color: #fff;
        /* Warna teks halaman aktif */
    }


    .star {
        font-size: 2rem;
        color: #ccc;
        /* Warna bintang kosong */
    }


    /* Bintang terisi */
    .star.filled {
        color: #f4b324;
        /* Warna bintang terisi (emas) */
    }

    .custom-image {
        top: -3.5rem;
        left: 50%;
        /* Atur posisi berdasarkan lebar elemen */
        transform: translateX(-50%);
        /* Supaya tetap berada di tengah */
        width: 7rem;
        height: 5rem;
        background-image: url("{{ asset('comp/kumis2.png') }}");
        background-size: cover;
        background-position: center;
        z-index: 0;
    }

    .text-repo {
        font-size: 2rem;
        font-family: 'Merriweather', serif;
        color: #f4b324;
    }

    @media (max-width: 576px) {

        /* Sesuaikan ukuran pada layar kecil */
        .custom-image {
            top: -2.5rem;
            width: 5rem;
            height: 3.5rem;
        }

        .text-repo {
            font-size: 1rem;
        }
    }

    .carousel-indicators .active {
        background-color: #000 !important;
    }

    .carousel-indicators button {
        width: 12px !important;
        height: 12px !important;
        border-radius: 50% !important;
        margin: 0 5px !important;
    }
</style>

@section('content')
<div class="d-flex flex-column justify-content-center"
    style="padding-bottom: 5rem; height: 100vh; position: relative; background-image: url({{ asset('comp/atas.png') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="overlay"></div>
    <div class="container-fluid d-flex align-items-center px-5 " style="z-index: 2;">
        <div class="d-flex flex-column px-3 w-50" style="height: 19rem;">
            <h1 class="text-white text-start"
                style="font-size: 28px; margin-bottom: -8px; font-weight: 100; font-family: 'Protest Revolution', sans-serif;">
                It's Not Just a Haircut, It's Experience
            </h1>
            <h1 class="text-white text-start" style="font-size: 70px; font-family: 'Protest Revolution', sans-serif;">
                Being Barber is Taking Care Of People
            </h1>
            <div class="flex-wrap mt-2" style="width: 75%">
                <p class="text-white" style="font-size: 12px;">
                    Kami percaya bahwa setiap pria berhak mendapatkan potongan rambut yang tidak
                    hanya rapi, tetapi juga mencerminkan kepribadiannya. Dengan pengalaman bertahun-tahun dan gaya
                    potong rambut terkini, tim barber kami siap memberikan pelayanan terbaik untuk Anda. Dari potongan
                    klasik hingga gaya modern, kami punya keahlian untuk membuat Anda tampil maksimal.
                </p>
            </div>
            <div class="container-fluid mt-3 p-0 w-100">
                <div class="row" style="width: 85.5%">
                    <div class="col">
                        <a href="/appointment">
                            <button class="btn btn-dark w-100 p-2 text-dark" style="background-color: #f4b324;">
                                Book Appointment
                            </button>
                        </a>
                    </div>
                    <div class="col">
                        <a href="/onlinebook">
                            <button class="btn btn-dark w-100 p-2"
                                style="border-width: 2px; border-color: #f4b324; color: #f4b324;">
                                Book Appointment
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container-fluid mb-3">
                <div class="row">
                    @foreach (['Sen - Jum' => '10:00 - 20:00', 'Sabtu' => '09:00 - 22:00', 'Minggu' => '09:00 - 21:30'] as $day => $time)
                        <div class="col py-2 px-0">
                            <div class="font-weight-bold"
                                style="font-family: 'Playfair Display', serif; font-size: 30px; color: #f4b324;">
                                {{ $day }}
                            </div>
                            <div class="text-white"
                                style="font-family: 'Merriweather', serif; font-weight: 400; font-size: 15px;">
                                {{ $time }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid text-white" style="height: 100vh;">
    <div class="row h-100">
        <div class="col-5 d-flex justify-content-center align-items-center"
            style="background-image: url({{ asset('comp/side.png') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
        </div>
        <div class="col">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="container-fluid">
                    <div class="row align-items-center" style="height: 100vh;">
                        <!-- Kolom Kiri -->
                        <div class="col text-end d-flex justify-content-center align-items-center "
                            style="height: 13rem;font-size: 30px; border-right: 10px solid #f4b324;font-family: 'roboto' serif;font-weight: 900">
                            <p><span style="color: #f4b324">Passionate</span> About Crafting Exceptional Experiences</p>
                        </div>
                        <!-- Kolom Kanan -->
                        <div class="col text-start m-auto"
                            style="font-family: 'Roboto', serif; font-size: 13px; height: 13rem;">
                            <p><span style="color: #f4b324;">Botakseng Barbershop</span>, kami berkomitmen untuk
                                memberikan pengalaman potong rambut yang tak terlupakan dengan layanan profesional dan
                                suasana yang nyaman.</p>
                            <p>Dengan tim barber yang terampil dan ramah, kami tidak hanya menawarkan potongan rambut
                                yang trendi, tetapi juga layanan perawatan diri yang memanjakan.</p>
                            <p>Kami percaya setiap klien pantas merasa percaya diri dan tampil terbaik, dan itulah yang
                                kami wujudkan setiap kali Anda mengunjungi kami.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid p-0 text-white" style="height: 100vh;">
    <div class="d-flex flex-column justify-content-center align-items-center "
        style="position: absolute; height: 100vh; width: 100%;;">
        <div class="mb-4 text-center"
            style="width: 35%; font-family: 'Merriweather', serif;font-weight: 900;font-size: 3rem;height: 8.7rem;">
            <p>What
                We Provide to <span class="text-dark">Our Customers</span></p>
        </div>
        <div class="container">
            <div class="row" id="kategori-content">
                @foreach ($kategori as $value)
                    <div class="col-md-3 mb-4">
                        <div class="card bg-dark text-white"
                            style="height: 20rem; border: 3px solid #f4b324; box-shadow: 0 4px 8px rgba(255, 255, 255, 0.6), 0 1px 3px rgba(255, 255, 255, 0.4);">
                            <div class="card-body text-center d-flex flex-column align-items-center p-3">
                                <div class="mb-3"
                                    style="width: 8rem; height: 8rem; background-image: url( {{ asset('gambarbarang/' . $value->image) }}); background-size: contain; background-repeat: no-repeat; background-position: center;">
                                </div>
                                <h5 class="card-title"
                                    style="color: #f4b324; font-family: 'Merriweather', serif; font-weight: 800; font-size: 28px;">
                                    {{ $value->nama_kategori }}
                                </h5>
                                <p class="card-text" style="font-family: 'Merriweather', serif; font-size: 14px;">
                                    {{ $value->deskripsi }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Pagination -->
            <div id="pagination-links">
                {{ $kategori->links() }}
            </div>


        </div>
    </div>
    <div class="d-flex justify-content-start align-items-start w-100 h-100">
        <div class="position-relative" style="background-color: #f4b324;width: 100%; height:50%;z-index: -1;">
            <div class="position-absolute w-100"
                style="height:100%; background-image: url({{ asset('comp/kumis.png') }});opacity: 0.1;background-size: contain;">
            </div>
        </div>
    </div>
</div>

<div class="bg-light container-fluid text-white" style="height: 100vh;">
    <div class="d-flex justify-content-center align-items-center w-100 h-100">
        <div class="container w-75 p-5 position-relative">
            <div class="d-flex position-absolute"
                style="opacity: 75%;height: 10rem; width: 8rem;top: -3rem; left: 1.5rem;background-image: url({{ asset('comp/star.png') }});background-size: contain;background-repeat: no-repeat;background-position: center">
            </div>
            <p class="text-center text-dark"
                style="font-family: 'Merriweather', serif;font-size: 64px;font-weight: 900;">Where Style Meets <span
                    class="font-italic" style="color: #f4b324;font-weight: 900;">Precision</span></p>
            <p class="text-center text-dark flex-wrap" style="font-family: 'Merriweather', serif;font-size: 22px;">
                Discover our <span style="color: #f4b324">unique</span> digital experience, where convenience meets
                <span style="color: #f4b324">personalization</span>. We offer a seamless and
                innovative approach to grooming that sets us apart from the rest.
            </p>

        </div>
    </div>
</div>

<div class="container-fluid text-white pt-3"
    style="background-image: url({{ asset('comp/bg.png') }});background-size: cover;height: 240vh;padding-left: 5rem;padding-right: 5rem">
    <div class="d-flex justify-content-start align-items-start w-100 flex-column" style="height: 40vh">
        <p class="" style="font-family: 'Merriweather', serif;font-size: 72px;font-weight: 900;">Bringing <span
                style="color: #f4b324">Our
                Services</span>
            Directly to You</p>
        <div class="container-fluid p-0" style="margin-top: -1.5rem">
            <div class="d-flex align-items-center">
                <div class="me-2" style="font-family: 'Merriweather', serif;font-size: 72px;font-weight: 900;">Anytime,
                    Anywhere
                </div>
                <div class="flex-grow-1" style="border-top: 5px solid #f4b324;"></div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="height: 200vh">
        <div class="container-fluid text-dark p-0" style="height: 100vh; padding: 2rem;">
            <div class="container" style="height: 100%;">
                <div class="row h-100 p-0">
                    <!-- Kolom Hijau -->
                    <div class="col-md-6 p-0 d-flex align-items-center justify-content-start">
                        <div class="container p-0 ps-2" style="padding: 1rem;">
                            <div class="d-flex flex-column align-items-center justify-content-start"
                                style="width: 75%;">
                                <div
                                    style="color: #f4b324;font-family: 'Merriweather', serif; font-size: 24px;font-weight: 800">
                                    Book Appointment</div>
                                <div class="mb-3"
                                    style="color: #f4b324;font-family: 'Merriweather', serif; font-size: 16px;font-weight: 600; margin-top: -5px">
                                    Schedule Your Time, Fast and Easy
                                </div>
                                <div class="text-center text-white mb-2"
                                    style="font-family: 'Merriweather', serif; font-size: 16px">
                                    With the <span style="color: #f4b324">Book
                                        Appointment</span> feature, you can easily choose a convenient time for the
                                    service you
                                    need. No more waiting on the phone or in long queues—just select your time and we’ll
                                    be ready to assist you. Flexible scheduling ensures a more comfortable and efficient
                                    experience for you.
                                </div>

                                <a class="btn btn-dark mt-2 p-2 border-2 btn-book" href="/appointment"
                                    style="border-color: #f4b324; color: #f4b324; width: 50%;">
                                    Book Now
                                </a>

                            </div>
                        </div>
                    </div>
                    <!-- Kolom Kanan -->
                    <div class="col-md-6 p-0 d-flex align-items-center justify-content-end">
                        <div class="container p-0 " style="padding: 1rem;">
                            <div class="d-flex align-items-start justify-content-end p-0 position-relative"
                                style="width: 100%; height: 100vh;">
                                <div class="position-absolute rounded"
                                    style="width: 80%; height: 110vh; top:5px;background-image: url({{ asset('comp/side3.jpg') }});background-size: cover;background-position: :right;background-repeat: no-repeat">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid text-dark p-0" style="height: 100vh; padding: 2rem;">
            <div class="container" style="height: 100%;">
                <div class="row h-100 p-0">
                    <!-- Kolom Hijau -->
                    <div class="col-md-6 p-0 d-flex">
                        <div class="container p-0 " style="padding: 1rem;">
                            <div class="d-flex justify-content-start p-0 position-relative"
                                style="width: 100%; height: 100vh;">
                                <div class="position-absolute rounded"
                                    style="width: 80%; height: 110vh;bottom: 5px;background-image: url({{ asset('comp/side2.jpg') }});background-size: cover;background-position: :right;background-repeat: no-repeat">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Kolom Kanan -->
                    <div class="col-md-6 p-0 d-flex align-items-center justify-content-end">
                        <div class="container p-0 pe-2" style="padding: 1rem;">
                            <div class="d-flex flex-column align-items-end justify-content-start">
                                <div class="align-items-center text-center" style=" width: 75%;">
                                    <div
                                        style="color: #f4b324;font-family: 'Merriweather', serif; font-size: 24px;font-weight: 800">
                                        Home Service</div>
                                    <div class="mb-3"
                                        style="color: #f4b324;font-family: 'Merriweather', serif; font-size: 16px;font-weight: 600; margin-top: -5px">
                                        Professional Service, Delivered Right to Your Door
                                    </div>
                                    <div class="text-center text-white mb-2"
                                        style="font-family: 'Merriweather', serif; font-size: 16px">
                                        The <span style="color: #f4b324">Home Service</span> feature brings professional
                                        services directly to your
                                        doorstep. No need to leave your house—our team will arrive at the time you
                                        schedule. With reliable service, you can enjoy a seamless experience from the
                                        comfort of your own home, making your time more efficient and hassle-free.
                                    </div>
                                    <a href="/onlinebook" class="btn btn-dark mt-2 p-2 border-2 btn-book"
                                        style="border-color: #f4b324; color: #f4b324; width: 50%;">Order
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cointainer-fluid text-white" style=" margin-top: 6rem">
    <div class="d-flex justify-content-center w-100">
        <div class="position-relative mt-4 fs-sm-1 fs-2" style="width:75%; height: fit-content;">
            <p class="text-center" style="font-family: 'Merriweather', serif">
                Check Hair Styling Prices to Look Cool!
            </p>
            <div class="position-absolute custom-image"></div>
        </div>
    </div>
    <div class="d-flex justify-content-center w-100"
        style="font-family: 'Merriweather', serif;font-size: 24px;font-weight: 600;color: #f4b324">Price List</div>
    <div class="container mt-3 mb-5">
        <div class="row">
            @foreach ($pricelist as $item)
                <div class="col-md-6 p-4 mb-5">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center mb-3">
                            <div style="font-family: 'Merriweather', serif">
                                {{$item->nama_paket}}
                            </div>
                            <div class="flex-grow-1 mx-4" style="border-top: 3px dashed #f4b324;"></div>
                            <div style="font-family: 'Merriweather', serif">
                                Rp {{ number_format($item->harga, 0, ',', '.') }}
                            </div>
                        </div>
                        <div class="flex-grow-1" style="border-top: 2px solid #f4b324;"></div>
                        <p class="mt-3" style="font-family: 'Merriweather', serif;font-size: 16px;opacity: 75%">
                            {{$item->deskripsi}}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="container-fluid text-white d-flex flex-column text-center justify-content-center w-100"
    style=" margin-top: 6rem; margin-bottom:3rem;margin-bottom: 5rem">

    <p style="font-family: 'Merriweather', serif;font-size: 48px;font-weight: 900;">Meet Our <span
            style="color: #f4b324">Expert</span></p>
    <div>Behind every great service is a team of passionate professionals dedicated to delivering the best results.
        Get to know the talented experts who make it all possible.</div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-3 p-0">
            <div class="w-100 gambar position-relative"
                style="background-size: cover; background-repeat: no-repeat; height: 30rem;"
                data-default-image="{{ asset('comp/side.png') }}" data-hover-image="{{ asset('comp/fotbar.jpg') }}">>
                <!-- Latar belakang gambar -->
                <div class="text-overlay p-2 text-center rounded">
                    <div style="color: #f4b324;font-family: 'Merriweather', serif; font-weight: 900; font-size: 20px;">
                        Arif Surrahman
                    </div>
                    <div class="text-white"
                        style="margin-top: -10px ;font-family: 'Merriweather', serif; font-size: 16px">Senior
                        Stylist</div>
                </div>
            </div>
            <div class="col-md-2 mt-3 w-100 mb-2">
                <div class="container">
                    <div class="row">
                        <div class="col" style="border-right: 2px solid white; text-align: center;">
                            <i class="bi bi-tiktok fs-3" style="color: #f4b324;"></i>
                        </div>
                        <div class="col" style="border-right: 2px solid white; text-align: center;">
                            <i class="bi bi-twitter-x fs-3" style="color: #f4b324;"></i>
                        </div>
                        <div class="col" style="border-right: 2px solid white; text-align: center;">
                            <i class="bi bi bi-instagram fs-3" style="color: #f4b324;"></i>
                        </div>
                        <div class="col">
                            <i class="bi bi-facebook fs-3" style="color: #f4b324;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 p-0">
            <div class="w-100 gambar position-relative"
                style="background-size: cover; background-repeat: no-repeat; height: 30rem;"
                data-default-image="{{ asset('comp/side.png') }}" data-hover-image="{{ asset('comp/fotbar.jpg') }}">>
                <!-- Latar belakang gambar -->
                <div class="text-overlay p-2 text-center rounded">
                    <div style="color: #f4b324;font-family: 'Merriweather', serif; font-weight: 900; font-size: 20px;">
                        Arif Surrahman
                    </div>
                    <div class="text-white"
                        style="margin-top: -10px ;font-family: 'Merriweather', serif; font-size: 16px">Senior
                        Stylist</div>
                </div>
            </div>
            <div class="col-md-2 mt-3 w-100 mb-2">
                <div class="container">
                    <div class="row">
                        <div class="col" style="border-right: 2px solid white; text-align: center;">
                            <i class="bi bi-tiktok fs-3" style="color: #f4b324;"></i>
                        </div>
                        <div class="col" style="border-right: 2px solid white; text-align: center;">
                            <i class="bi bi-twitter-x fs-3" style="color: #f4b324;"></i>
                        </div>
                        <div class="col" style="border-right: 2px solid white; text-align: center;">
                            <i class="bi bi bi-instagram fs-3" style="color: #f4b324;"></i>
                        </div>
                        <div class="col">
                            <i class="bi bi-facebook fs-3" style="color: #f4b324;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 p-0">
            <div class="w-100 gambar position-relative"
                style="background-size: cover; background-repeat: no-repeat; height: 30rem;"
                data-default-image="{{ asset('comp/side.png') }}" data-hover-image="{{ asset('comp/fotbar.jpg') }}">>
                <!-- Latar belakang gambar -->
                <div class="text-overlay p-2 text-center rounded">
                    <div style="color: #f4b324;font-family: 'Merriweather', serif; font-weight: 900; font-size: 20px;">
                        Arif Surrahman
                    </div>
                    <div class="text-white"
                        style="margin-top: -10px ;font-family: 'Merriweather', serif; font-size: 16px">Senior
                        Stylist</div>
                </div>
            </div>
            <div class="col-md-2 mt-3 w-100 mb-2">
                <div class="container">
                    <div class="row">
                        <div class="col" style="border-right: 2px solid white; text-align: center;">
                            <i class="bi bi-tiktok fs-3" style="color: #f4b324;"></i>
                        </div>
                        <div class="col" style="border-right: 2px solid white; text-align: center;">
                            <i class="bi bi-twitter-x fs-3" style="color: #f4b324;"></i>
                        </div>
                        <div class="col" style="border-right: 2px solid white; text-align: center;">
                            <i class="bi bi bi-instagram fs-3" style="color: #f4b324;"></i>
                        </div>
                        <div class="col">
                            <i class="bi bi-facebook fs-3" style="color: #f4b324;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 p-0">
            <div class="w-100 gambar position-relative"
                style="background-size: cover; background-repeat: no-repeat; height: 30rem;"
                data-default-image="{{ asset('comp/side.png') }}" data-hover-image="{{ asset('comp/fotbar.jpg') }}">>
                <!-- Latar belakang gambar -->
                <div class="text-overlay p-2 text-center rounded">
                    <div style="color: #f4b324;font-family: 'Merriweather', serif; font-weight: 900; font-size: 20px;">
                        Arif Surrahman
                    </div>
                    <div class="text-white"
                        style="margin-top: -10px ;font-family: 'Merriweather', serif; font-size: 16px">Senior
                        Stylist</div>
                </div>
            </div>
            <div class="col-md-2 mt-3 w-100 mb-2">
                <div class="container">
                    <div class="row">
                        <div class="col" style="border-right: 2px solid white; text-align: center;">
                            <i class="bi bi-tiktok fs-3" style="color: #f4b324;"></i>
                        </div>
                        <div class="col" style="border-right: 2px solid white; text-align: center;">
                            <i class="bi bi-twitter-x fs-3" style="color: #f4b324;"></i>
                        </div>
                        <div class="col" style="border-right: 2px solid white; text-align: center;">
                            <i class="bi bi bi-instagram fs-3" style="color: #f4b324;"></i>
                        </div>
                        <div class="col">
                            <i class="bi bi-facebook fs-3" style="color: #f4b324;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container-fluid text-white d-flex flex-column justify-content-center align-items-center"
    style=" margin-top: 6rem; background: linear-gradient(to top, #f4b324, #333); height: 40rem;">
    <div class="text-center p-3 mb-2" style="font-family: 'Merriweather', serif; font-size: 42px; font-weight: 700">
        What
        They
        Are
        Saying</div>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach ($ulasan as $index => $testimonial)
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $index }}"
                    class="{{ $index === 0 ? 'active' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
            @endforeach
        </div>
        <div class="carousel-inner">
            @foreach ($ulasan as $testimonial)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <div class="container" style="width: 50%; height: 25rem">
                        <div class="d-flex flex-column justify-content-center align-items-center text-center p-2 bg-dark"
                            style="height: 80%; border-radius: 1rem; border: 2px solid #f4b324; box-shadow: 0 4px 8px rgba(255, 255, 255, 0.6), 0 1px 3px rgba(255, 255, 255, 0.4);">
                            <div class="text-repo">{{ $testimonial->heading }}</div>
                            <div class="rating mb-3">
                                @for ($i = 1; $i <= 5; $i++)
                                    <span class="star {{ $i <= $testimonial->bintang ? 'filled' : '' }}">★</span>
                                @endfor
                            </div>
                            <div class="d-flex flex-wrap mb-4" style="font-family: 'Merriweather', serif; font-size: 14px">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum corrupti consequuntur nihil
                                ab minus eos ratione? Ipsam, odio vitae nihil accusamus quo harum accusantium magni ad non
                                ea mollitia cupiditate!
                            </div>
                            <div style="font-family: 'Merriweather', serif; font-size: 12px">
                                {{ '@' . $testimonial->nama }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


<script>
    document.querySelectorAll('.gambar').forEach(function (element) {
        const defaultImage = element.getAttribute('data-default-image');
        const hoverImage = element.getAttribute('data-hover-image');

        // Set gambar awal
        element.style.backgroundImage = `url('${defaultImage}')`;

        element.addEventListener('mouseenter', function () {
            element.style.backgroundImage = `url('${hoverImage}')`;
        });

        element.addEventListener('mouseleave', function () {
            element.style.backgroundImage = `url('${defaultImage}')`;
        });
    });


    // Capture click events on pagination links
    document.addEventListener('DOMContentLoaded', function () {
        // Ambil semua link pagination
        const paginationLinks = document.querySelectorAll('.pagination a');

        paginationLinks.forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();  // Mencegah perilaku default (redirect ke halaman baru)

                const url = link.href;  // Ambil URL dari link pagination

                // Gunakan fetch untuk mengambil konten baru
                fetch(url)
                    .then(response => response.text())
                    .then(data => {
                        // Parse konten HTML baru dan ambil konten kategori dan pagination
                        const newDoc = new DOMParser().parseFromString(data, 'text/html');
                        const newContent = newDoc.querySelector('#kategori-content').innerHTML;
                        const newPagination = newDoc.querySelector('#pagination-links').innerHTML;

                        // Perbarui konten kategori dan pagination di halaman
                        document.querySelector('#kategori-content').innerHTML = newContent;
                        document.querySelector('#pagination-links').innerHTML = newPagination;
                    })
                    .catch(error => console.log('Error fetching data:', error));
            });
        });
    });


</script>
@include('partials.footer')

@endsection