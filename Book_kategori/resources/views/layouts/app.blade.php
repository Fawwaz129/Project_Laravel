<!doctype html>
<html lang="en">
    {{-- https://bit.ly/mastering-task-index --}}
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />

    <title>Task Management</title>

    <style>
        .group-action a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    @include('components.navbar')
    <div class=" sm:ml-64">
        @yield('main')
    </div>   


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    
</body>

</html>