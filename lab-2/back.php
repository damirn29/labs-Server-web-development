<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<main>
   <textarea name="text" id="" cols="70" rows="70">
    <?php
        print_r(get_headers("https://www.php.net/manual/ru/function.get-headers.php"));
    ?>
   </textarea>
  </main>
</body>
</html>