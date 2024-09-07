<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
</head>
<body>

@include('swal.alert')

<div class="container col-xl-10 col-xxl-8 px-4 py-5">

    <div class="row">
        <form method="post" action="/logout">
            <button class="w-15 btn btn-lg btn-danger" type="submit">Keluar</button>
        </form>
    </div>
    <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 mb-3">John Doe</h1>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
            <form class="p-4 p-md-5 border rounded-3 bg-light" method="post" action="/todolist">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="password" placeholder="todo">
                    <label for="todo">Nomor Pegawai</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="password" placeholder="todo">
                    <label for="todo">Nama Pegawai</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="password" placeholder="todo">
                    <label for="todo">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary show_confirm" type="submit">Tambah User</button>
            </form>
        </div>
    </div>
    <div class="row align-items-right g-lg-5 py-5">
        <div class="mx-auto">
            <form id="deleteForm" method="post" style="display: none">

            </form>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Jam</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Belajar Laravel Dasar</td>
                    <td>9:30</td>
                    <th style="color: red">terlambat</th>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>

</html>
