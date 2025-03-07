<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$subject}}</title>
    <style>
        /* Reset some default styles */
        body, p {
            margin: 0;
            padding: 0;
        }

        /* Email container */
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
        }

        /* Header */
        .header {
            text-align: center;
            padding: 20px 0;
        }

        /* Content */
        .content {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Footer */
        .footer {
            text-align: center;
            padding: 20px 0;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <h1>{{$subject}}</h1>
            <p>Welcome to Pharmex Africa MVP interactive mailer!</p>
        </div>
        <div class="content">

            <p>{!!html_entity_decode($content)!!}</p>
        </div>
        <div class="footer">
            <p>Contact us at: info@africanpharmaceuticalreview.com</p>
            <p>&copy; {{date('Y')}} Pharmex Africa MVP. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
