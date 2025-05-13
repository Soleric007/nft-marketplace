<!DOCTYPE html>
<html>
<head>
    <title>New Contact Message</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { padding: 20px; background-color: #f9f9f9; }
        .heading { color: #4c51bf; font-size: 24px; margin-bottom: 20px; }
        .message-box { background-color: #fff; padding: 15px; border-radius: 8px; border: 1px solid #ddd; }
        .label { font-weight: bold; margin-top: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="heading">📨 New Contact Form Submission</div>

        <div class="message-box">
            <p><span class="label">Name:</span> {{ $data['name'] }}</p>
            <p><span class="label">Email:</span> {{ $data['email'] }}</p>
            @if(!empty($data['phone']))
                <p><span class="label">Phone:</span> {{ $data['phone'] }}</p>
            @endif
            <p><span class="label">Message:</span><br>{{ $data['message'] }}</p>
        </div>
    </div>
</body>
</html>
