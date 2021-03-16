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
    <title><?= $page_title ?? 'OUR PAGE' ?></title>
</head>

<body>
    <nav>
        <ul>
            <li>
                <a href="/5_semester_webdev/mandatory1/profile/<?=$id?? 'some'?>">
                    PROFILE
                </a>
            </li>
            <li>
                <a href="/5_semester_webdev/mandatory1/users/<?=$id?>">
                    USERS
                </a>
            </li>
            <li>
                <a href="/5_semester_webdev/mandatory1/logout">
                    LOGOUT
                </a>
            </li>
        </ul>
    </nav>

    <section>