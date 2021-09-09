<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('style.css') }}" id="app-style" rel="stylesheet" type="text/css">
</head>
<body>
    <form id="regForm" action="{{route('news.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>Register:</h1>

        <!-- One "tab" for each step in the form: -->
        <div class="tab">Name:
          <p><input placeholder="First name..." name="name" oninput="this.className = ''"></p>
        </div>

        <div class="tab">Contact Info:
          <p><input placeholder="E-mail..." type="file" name="image" oninput="this.className = ''"></p>
        </div>

        <div class="tab">Birthday:
          <p><input placeholder="dd" name="categories" value="1" oninput="this.className = ''"></p>
        </div>

        <div class="tab">Login Info:
          <p><input placeholder="Username..." name="description" oninput="this.className = ''"></p>
        </div>

        <div style="overflow:auto;">
          <div style="float:right;">
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
          </div>
        </div>

        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
        </div>

    </form>
</body>
<script src="{{ asset('test.js') }}"></script>

</html>
