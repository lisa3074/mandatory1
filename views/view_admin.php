<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
        content="IE=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="/5_semester_webdev/mandatory1/style.css">
    <title>ADMIN</title>
</head>

<body>
    <section>
        <h1>Hi <?= "{$_SESSION['email']}";?></h1>
        <p>Welcome back to us!</p>
        <p>Press the button if you want to sign out.</p>
        <a href="/5_semester_webdev/mandatory1/logout"> <button>Logout</button></a>

    </section>