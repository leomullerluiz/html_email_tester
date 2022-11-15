<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML E-Mail Tester</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="send_email.php" method="POST">
        <input type="text" name="email" placeholder="e-mail"/> <br>
        <textarea name="message" id="html" placeholder="HTML"></textarea> <br>
        <input type="submit" value="Test">
    </form>

    <iframe id="code"></iframe>

    <script type="text/javascript" src="js/app.js"></script>

</body>
</html>