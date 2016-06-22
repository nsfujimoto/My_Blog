<html>
<head>
    <title>Album</title>
    <meta charset="utf-8">
</head>
    <pre>
    <?php
    $dir_file = scandir("../image/");
    //var_dump($dir_file);
    foreach($dir_file as $key){
    ?>
    <img src="../image/<?=$key?>" alt="" width="200px">
    <?php
    }
    ?>
    </pre>
</html>