<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>
    <h2>Add Product</h2>

    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('product.store') }}">
        @csrf
        <label>Product Name:</label><br>
        <input type="text" name="name"><br><br>

        <label>Price:</label><br>
        <input type="text" name="price"><br><br>

        <label>Description:</label><br>
        <textarea name="description"></textarea><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
