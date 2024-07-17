<!-- resources/views/certificates/verify.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Certificate Verification</title>
</head>
<body>
    <h1>Certificate Verification</h1>

    @if (session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    <form action="{{ route('certificates.verify.post') }}" method="POST">
        @csrf
        <label for="certificate_number">Certificate Number:</label>
        <input type="text" id="certificate_number" name="name" required>
        <button type="submit">Verify</button>
    </form>
</body>
</html>
