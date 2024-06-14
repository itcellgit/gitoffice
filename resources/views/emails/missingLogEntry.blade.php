<!DOCTYPE html>
<html>
<head>
    <title>Missing Log Entry Notification</title>
</head>
<body>
    <p>Dear {{ $fullName }},</p>
    <p>We have noticed that there is no log entry for you on {{ \Carbon\Carbon::parse($date)->format('d-m-Y') }}. Please make sure to log your entry.</p>
    <p>Thank you.</p>
</body>
</html>
