<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Table</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>name</th>
                <th>number</th>
            </tr>
        </thead>
        <tbody>
            @foreach($forms as $form)
                <tr>
                    <td>{{$form->name}}</td>
                    <td>{{$form->number}}</td>
                    <td><a href="{{ route('form.edit',$form->id) }}">edit</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>