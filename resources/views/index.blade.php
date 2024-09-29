<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treni in partenza</title>
</head>
<body>
    <h1>Treni in partenza dalla data odierna</h1>

    <table>
        <thead>
            <tr>
                <th>Azienda</th>
                <th>Stazione di Partenza</th>
                <th>Stazione di Arrivo</th>
                <th>Orario di Partenza</th>
                <th>Orario di Arrivo</th>
                <th>Codice Treno</th>
                <th>Numero Carrozze</th>
                <th>In Orario</th>
            </tr>
        </thead>
        <tbody>
            @foreach($treni as $treno)
            <tr>
                <td>{{ $treno->azienda }}</td>
                <td>{{ $treno->stazione_partenza }}</td>
                <td>{{ $treno->stazione_arrivo }}</td>
                <td>{{ $treno->orario_partenza }}</td>
                <td>{{ $treno->orario_arrivo }}</td>
                <td>{{ $treno->codice_treno }}</td>
                <td>{{ $treno->numero_carrozze }}</td>
                <td>{{ $treno->in_orario ? 'Sì' : 'No' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
