<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>
    <p>
        Dear Asante Gold Coporation, <br><br>
        Please find below the details message from your contact form on website:  <br><br>

        Name: {{$details['name'] ?? 'NA'}}<br>
        Subject: {{$details['subject'] ?? 'NA'}}<br>
        Email: {{$details['email'] ?? 'NA'}} <br>

        Message Details:<br>

        {{$details['message'] ?? ''}} <br><br>

        Best regards, <br><br>
    </p>
</body>
</html>