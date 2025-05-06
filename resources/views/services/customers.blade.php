<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('service.store')}}" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="Enter you name">
        <label for="emial">Email:</label>
        <input type="email" name="email" placeholder="Enter your Email">
        <label for="phone">Phone Number:</label>
        <input type="number" name="number" placeholder="Enter Your Number">
        <input type="submit">
    </form>
</body>

</html>