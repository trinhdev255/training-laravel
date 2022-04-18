<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <ul>
            {{-- @foreach($user_car as $uc)
                <li>Name: {{ $uc->name }}</li>
                <li>First car: {{ $uc->cars()->oldest()->first()->name }}  </li>
            @endforeach --}}
            abc
            @foreach($user_car as $uc)
                {{-- <li>Name: {{ $uc->name }}</li> --}}
                {{-- <li>Name: {{ $uc->name }}</li>
                <li>Name: {{ $uc->id }}</li> --}}
                {{-- <li>UC: {{$uc -> userId}}</li> --}}

                {{-- <li>First car: {{ $uc->cars()->oldest()->first()->name }}  </li> --}}
                {{-- <li>First car: {{ $uc->cars->first()->name }}  </li> --}}

                <li>Name: {{ $uc->name }}</li>
                <li>First car: {{ $uc->carname }}  </li>

                {{-- @break --}}
            @endforeach
        </ul>
    </div>
</body>
</html>