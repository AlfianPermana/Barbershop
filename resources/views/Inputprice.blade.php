<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <title>Document</title>
</head>

<body>
    <form class="p-2" action="{{route('input.price') }}" method="POST">
        @csrf
        <div class="mb-4" style="font-size: 38px; font-weight: 700">
            Online Booking
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Service</label>
            <input type="type" class="form-control" name="nama_paket" id="exampleFormControlInput1"
                placeholder="Input Packet Name" />
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Service</label>
            <input type="number" class="form-control" name="harga" id="exampleFormControlInput1"
                placeholder="Input Item Price" />
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Deskripsi</label>
            <textarea id="" name="deskripsi" class="form-control"></textarea>
        </div>
        <div class="container-fluid d-flex justify-content-end align-items-end w-100 h-50">
            <button class="p-2 bg-dark text-white" style="
                        border-radius: 50px;
                        border: 3px solid #f4b324;
                        width: 35%;
                    ">
                Submit
            </button>
        </div>
    </form>
</body>

</html>