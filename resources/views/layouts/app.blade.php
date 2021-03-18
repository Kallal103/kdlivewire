
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Support Ticket System</title>
    <livewire:styles />
</head>
<body class=" flex flex-wrap justify-center">
    <div class=" flex w-full justify-between px-4 bg-purple-900 text-white">
        <a class=" mx-3 py-4" href="/">Home</a>
        <div class=" py-4">
            <a class=" mx-3 " href="/login">Login</a>
            <a class=" mx-3 " href="/register">Register</a>
        </div>
    </div>
    <div class=" my-10 w-full flex justify-center">
        {{ $slot }}
    </div>

    <livewire:scripts />
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
    data-turbolinks-eval="false" data-turbo-eval="false"></script>
</body>
</html>

