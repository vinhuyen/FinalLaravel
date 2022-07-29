<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title></title>

    <link rel="stylesheet" href="">

</head>

<body>

<!-- sentData được truyền từ app\Mail\SendMail.php -->

<h1>{{ $sentData['title'] }}</h1>

<p>{{ $sentData['body'] }}</p>

</body>

</html>
