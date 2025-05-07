<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/helo.css') }}">
    <title>Document</title>
</head>
<body>
    <form action="{{route('store.form')}}" method="post">
        @csrf 
        <h1>simple Form</h1>
        <label for="name">Enter Your name</label>
        <input type="name" name='name'><br>
        <label for="number">Enter your phone number</label>
        <input type="number" name="number"> <br>
         <input type="submit">
    </form>
</body>
</html>