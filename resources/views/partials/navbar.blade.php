<style>
    .nav-link {
        color: #f4b324 !important;
    }

    .nav-link.active {
        color: white !important;
    }

    .btn-book:hover {
        background-color: #f4b324 !important;
        color: #333 !important;
    }
</style>

<div class="container-fluid" style="position: absolute; z-index: 5;background-color: rgba(0, 0, 0, 0.3)">
    <header
        class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-1 mb-2 px-4">
        <div class="col-md-3 mb-2 mb-md-0">
            <a href="/" class="d-inline-flex flex-column link-body-emphasis text-decoration-none">
                <div class="text-center text-light"
                    style="text-shadow: 0 0 2px lightcyan, 0 0 5px lightcyan; font-family: 'Merriweather', serif; font-weight: 900; font-size: 35px;">
                    Cakmo</div>
                <div class="text-center text-light"
                    style="margin-top: -15px ; font-family: 'Merriweather', serif; font-weight: light; font-size: 16px;">
                    Barbershop
                </div>
            </a>
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">

            <li><a href="/" class="nav-link px-2">Home</a></li>
            <li><a href="#" class="nav-link px-2">Service</a></li>
            <li><a href="/about" class="nav-link px-2">About Us</a></li>
            <li><a href="/contact" class="nav-link px-2">Contact</a></li>
        </ul>

        <a class="col-md-3 text-end" href="/appointment">
            <button style="color: #f4b324;border-color: #f4b324" type="button"
                class="rounded-pill btn me-2 btn-book">Book
                Appointment</button>
        </a>
    </header>
</div>

<script>
    const currentUrl = window.location.href; // Mendapatkan URL halaman saat ini
    const navLinks = document.querySelectorAll('.nav-link');

    // Menentukan apakah URL saat ini adalah root ("/")
    const isRootUrl = currentUrl.endsWith('/') || currentUrl.endsWith(window.location.origin);

    navLinks.forEach(link => {
        const href = link.getAttribute('href'); // Mendapatkan nilai href
        if (isRootUrl && href === '/') {
            // Jika halaman saat ini adalah root dan href adalah "/"
            link.classList.add('active');
        } else if (!isRootUrl && href !== '/' && currentUrl.includes(href)) {
            // Jika bukan root dan href cocok dengan URL
            link.classList.add('active');
        } else {
            // Hapus kelas active jika tidak cocok
            link.classList.remove('active');
        }
    });
</script>