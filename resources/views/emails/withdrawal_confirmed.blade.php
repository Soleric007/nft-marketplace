<!DOCTYPE html>
<html>

<head>
    <title>Withdrawal Confirmation</title>
</head>

<body>
    <h2>Dear {{ $user->name }},</h2>
    <p>Your withdrawal request of <strong>${{ number_format($amount, 2) }}</strong> has been confirmed.</p>
    <p>Your balance will be updated shortly.</p>
    <p>Thank you for using our platform.</p>
</body>

</html>
