<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nav</title>
</head>

<style>
    ul {
        background-color: #282c34;
        width: 8%;
        padding: 0;
        height: 101vh;
        color: white;
        margin: -8;

    }

    li {

        display: flex;
        flex-direction: column;
        flex-wrap: nowrap;
        justify-content: center;
        align-items: center;
        align-content: center;
        width: 100%;
        height: 100px;
        border-bottom: 1px solid rgba(192, 192, 192, 0.445);
        color: silver;
        text-decoration: none;
        overflow: hidden;
    }

    a {
        color: silver;
        font-size: 15.5px;
    }

    a:hover {
        color: white;
        text-decoration: none;
        letter-spacing: 1px;
    }

    ul a {
        text-decoration: none;
    }

</style>

<body>
    <ul>
        <li><a href=""></a></li>
        <li><a href="/" enabled>Home</a></li>
        <li><a href="">Spécialistes </a></li>
        <li><a href="">Pannes</a></li>
        <li><a href="">Users</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="">Contact</a></li>
    </ul>
</body>

</html>
