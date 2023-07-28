<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Azienda</th>
                        <th scope="col">Stazione di Partenza</th>
                        <th scope="col">Orario di Partenza</th>
                        <th scope="col">Stazione di arrivo</th>
                        <th scope="col">Orario di arrivo</th>
                        <th scope="col">Codice Treno</th>
                        <th scope="col">Ritardo</th>
                      </tr>
                    </thead>
                    @foreach($trains as $train)
                    <tbody>
                      <tr>
                        <th scope="row">{{$train -> azienda}}</th>
                        <td>{{$train -> stazione_di_partenza}}</td>
                        <td>{{$train -> orario_di_partenza}}</td>
                        <td>{{$train ->stazione_di_arrivo}}</td>
                        <td>{{$train -> orario_di_arrivo}}</td>
                        <td>{{$train -> n_carrozza}}</td>
                        <td>
                            @if($train->in_orario)
                                in orario
                            @else
                                ritardo di {{$train->tempo_ritardo}} minuti
                            @endif
                        </td>
                        <td>
                            @if($train->in_orario)
                                In Arrivo
                            @elseif($train->tempo_ritardo >= 200)
                                Cancellato
                            @else
                                In Arrivo
                            @endif
                        </td>
                      </tr>                    
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>