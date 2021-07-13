<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .header,
        .footer {
            background-color: linen;
            height: 100px;
        }
    </style>
</head>

<body>
    <div class="header">
        <a href="Logout">Logout</a>
    </div>
    <div class="content">
        <?php
        require_once "./mvc/views/components/" . $data['Page'] . ".php";
        ?>
    </div>
    <div class="footer"></div>
</body>

</html>