<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('user_data.store')}}" method="post">
        <label for="name">Enter your name</label>
        <input type="text" name="name">
        <label for="father_name">Enter your father name</label>
        <input type="text" name="father_name">
        <label for="email">Enter Your emil</label>
        <input type="email" name="email">
        <label for="description">Enter your descripoiton</label>
        <input type="text" name="description">
        <input type="submit">
    </form>
</body>
</html>