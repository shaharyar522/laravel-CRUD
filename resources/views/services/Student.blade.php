<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>  
</head>
<body>

@if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success!',
        text: '{{ session('success') }}'
    });
</script>
@endif
{{-- {{ route('store.studentinfo') }} --}}
<form action="{{ route('store_stuend_data') }}" method="POST">
    @csrf

    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="father_name">Father Name:</label><br>
    <input type="text" id="father_name" name="father_name" required><br><br>

    <label for="roll_number">Roll Number:</label><br>
    <input type="text" id="roll_number" name="roll_number" required><br><br>

    <label for="cgpa">CGPA:</label><br>
    <input type="text" id="cgpa" name="cgpa" required><br><br>

    <label for="marks">Marks:</label><br>
    <input type="number" id="marks" name="marks" required><br><br>

    <button type="submit">Submit</button>
</form>

</body>
</html>
