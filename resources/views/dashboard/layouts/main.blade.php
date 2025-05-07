<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bilcode</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="/css/dashboard/main.css">

    {{-- Box Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    {{-- Tab Icon --}}
    <link rel="icon" href="/img/Logo.png" type="image/x-icon" />

    {{-- EDITOR JS --}}
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/link@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/image@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/simple-image@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/list@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/quote@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/embed@latest"></script>

</head>
<body>

    <div class="container">

        @include('/dashboard/partials/sidebar')

        @yield('content')

    </div>

    <div class="menu">
        <button id="menu-btn">
            <i class='bx bx-menu'></i>
        </button>
    </div>


    <script src="/js/dashboard/main.js"></script>
    <script src="/js/dashboard/imageUpload.js"></script>
</body>
</html>

