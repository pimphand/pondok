<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- csrf-token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <title>Use SweetAlert2 with AJAX in Laravel</title>
</head>

<body class="container" style="margin-top: 40px;">
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Users</h3>
            </div>
        </div>
    </div>
   
    <form action="{{ route('test') }}" method="post" enctype="multipart/form-data">
        <!-- Name -->
        @csrf
        <select name="hostel" id="">
            <option value="1">Putra</option>
            <option value="2">Putri</option>
        </select>
        <label for="">name</label><br>
        <input type="text" name="name">
        <label for="">image</label><br>
        <input type="file" name="image[]">
        <input type="file" name="image[]">

        <button type="submit">ksrsr</button>
    </form>

    @include('sweetalert::alert')
</body>

</html>