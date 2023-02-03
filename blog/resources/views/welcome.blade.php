<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

</head>

<body class="antialiased">
    <!-- <a href="">get users json</a> -->

    <a href="<?php echo route("get.test.user", ["id" => 5]); ?>">click here</a>
    <br><br><br>

    <a href="<?php echo route("start"); ?>">back</a>
</body>

</html>