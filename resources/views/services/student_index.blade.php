<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Father Name</th>
                <th>Roll Number</th>
                <th>CGPA</th>
                <th>Marks</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->father_name }}</td>
                    <td>{{ $student->roll_number }}</td>
                    <td>{{ $student->cgpa }}</td>
                    <td>{{ $student->marks }}</td>
                    <td> <a href="{{ route('student.edit',$student->id)}}">Edit buttun</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>