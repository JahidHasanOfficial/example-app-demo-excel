<!-- resources/views/certificates/result.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Certificate Verification Result</title>
</head>
<body>
    <h1>Certificate Verification Result</h1>

    <p>Certificate Number: {{ $certificate->certificate_number }}</p>
    <p>Student Name: {{ $certificate->student_name }}</p>
    <p>Course Name: {{ $certificate->course_name }}</p>
    <p>Issue Date: {{ $certificate->issue_date }}</p>

    {{-- <a href="{{ route('certificates.index') }}">Back to Certificate List</a> --}}
</body>
</html>
