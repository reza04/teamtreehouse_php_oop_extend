<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $str="<p>Deskripsi text yang boleh ditampilkan</p><h2>Text yang tidak boleh ditampilkan</h2><script>alert('hello world');</script>";
        $text=strip_tags($str,'<h2>');

        echo $text;
    ?>
</body>
</html>