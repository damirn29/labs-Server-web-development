<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body style="width: 1500px; margin: auto;">
    <header style="display:flex;">
        <img src="img/Logo_Polytech_rus_main.jpg" alt="" style="margin-right:200px" width="300">
        <div style="margin-right:200px; margin-top:30px">
            <a class="btn btn-primary" href="#" role="button">Lab-1</a>
            <a class="btn btn-primary" href="#" role="button">Lab-2</a>
            <a class="btn btn-primary" href="#" role="button">Lab-3</a>
        </div>
        <h3>2.1.Домашняя работа: Hello, World! </h3>
    </header>
    <main style="width: 1500px; margin: auto; height:1500px">
        <?php

$array = array(
    'Left',
    'Middle',
    'Right',
);

for ($i = 0; $i <= 2; $i++){
    echo "<button style='margin-top:200px; margin-left:20px' type='button' class='btn btn-primary'>$array[$i]</button>";
}
?>
    </main>

    <footer style="
	width: 100%;
    background-color:black;
    height:100px;
    ">
        <h4 style="color:white;">Выполнил Нуреев Дамир 221-322</h4>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>