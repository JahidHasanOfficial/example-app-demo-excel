<!-- resources/views/certificates/result.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Certificate Verification Result</title>
</head>
<body>
    <h1>Certificate Verification Result</h1>

    <p>Certificate Number: {{ $certificate->name }}</p>
    <p>Student Name: {{ $certificate->email }}</p>
    <p>Course Name: {{ $certificate->phone }}</p>
    
</body>
</html>
