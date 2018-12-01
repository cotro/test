<!-- pdf.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>
                Date de début de la location
            </th>
            <th>
                Date de fin de la location
            </th>
            <th>
                Forfait sélectionné
            </th>
            <th>
                Modules supplémentaires
            </th>
            <th>
                Prix total
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                {{$reservation['date_debut']}}
            </td>
            <td>
                {{$reservation['date_fin']}}
            </td>
            <td>
                {{$reservation['forfait']}}
            </td>
            @if($reservation['modules_supplementaires'] == "")
                <td>
                    Pas de module supplémentaire
                </td>
            @else
                <td>
                    {{$reservation['modules_supplementaires']}}
                </td>
            @endif
            <td>
                {{$reservation['prix']}}
            </td>
        </tr>
    </tbody>
</table>
</body>
</html>