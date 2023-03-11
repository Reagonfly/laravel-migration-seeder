<!DOCTYPE html>
<html>

<head>
    <title>Lista treni</title>
</head>

<body>
    <h1>Tutti i treni in partenza il 27/02/2023</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Compagnia</th>
                <th>Stazione di partenza</th>
                <th>Stazione di arrivo</th>
                <th>Orario di partenza</th>
                <th>Orario di arrivo</th>
                <th>Codice treno</th>
                <th>Numero di carrozze</th>
                <th>In orario</th>
                <th>Cancellato</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
            <tr>
                <td>{{ $train->id }}</td>
                <td>{{ $train->company }}</td>
                <td>{{ $train->departure_station }}</td>
                <td>{{ $train->arrival_station }}</td>
                <td>{{ $train->departure_time }}</td>
                <td>{{ $train->arrival_time }}</td>
                <td>{{ $train->train_code }}</td>
                <td>{{ $train->carriages_number }}</td>
                <td>{{ $train->on_time ? 'Sì' : 'No' }}</td>
                <td>{{ $train->canceled ? 'Sì' : 'No' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>