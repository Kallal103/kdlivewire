<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Livewire</title>
    <livewire:styles />
    <livewire:scripts />
</head>
<body class="flex justify-center">
    <div class="w-10/12 my-10 flex">
        <div class=" w-5/12 rounded border p-2">
            <livewire:tickets />
        </div>
        <div class="w-7/12 mx-2 rounded border p-2">
            <livewire:comments />
        </div>

    </div>


</body>
</html>
