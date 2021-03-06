<?php
    ini_set("display_errors", 1);
    $url = $_SERVER["REQUEST_URI"];
    $sep_url = explode('/', $url);
    $id = (int)$sep_url[count($sep_url)-1];
?>

<html id="page_top">
    <head>
        <title>Tsuzone</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="/~takumi/code-prettify/loader/prettify.js"></script>
	    <script src="/~takumi/code-prettify/loader/lang-css.js"></script>
	    <link rel="stylesheet" href="/~takumi/code-prettify/styles/sons-of-obsidian.css" type="text/css">
        <link type="text/css" rel="stylesheet" href="/Blog/Blog_config/Blog_css.css">
        <link type="text/css" rel="stylesheet" href="/Blog/Blog_config/Album.css">
    </head>
    <body>
        
        <!-- Header -->
        
        <header class="global_header">
            <a href="/Blog/Blog_top.php" class="logo">TSUZONE</a>
            <p>ぼくのしゅみぶろぐ.</p>
        </header>
        
        <!-- Header -->
        
        
        <hr class="global_hr">
        <div class="album_wrapper">
            
            <!-- Main Contents -->

            <?php
                ini_set("display_errors", 1);
                require_once "../admin/Album_db.php";
                $db = new album_db();
                $stmh = $db->get_photos($id);
                $cnt = 0;
                foreach($stmh as $value){
                ?>
                <div class="album_box">
                <?php
                    echo "<div class=\"album_photo_box\">";
                    echo "<img src=\"" . $value["url"] . '" alt="">'."\n";
                    echo "</div>";
                    echo "<hr>";
                    echo "<p>";
                    echo "name: " . $value["name"] . "<br>\n";
                    echo "<small>". $value["date"];
                    echo "<a href=\"/Blog/Album/delete_photo.php/" . $value["id"] . "\">削除</a>";
                    echo "</small>";
                    echo "</p>";

                    $cnt ++;
                ?>
                </div>
                <?php
                }
                $cnt = $db->count_photos();
                echo "<br>";
                echo "<p class=\"center_p\">";
                for($i = 0 ; $i < $cnt/20 ; $i++){
                    echo "<a href=\"/Blog/Album/show_photos.php/" . $i ."\">" . $i . "</a>  ";
                }
                echo "</p>";
            ?>


            <!-- Main Contents -->
        </div>    
        <hr class="global_hr">
        
        <!-- Footer -->
        
        <footer class="global_footer">
            <p class="copyright"><small>Coprighting &copy; 2016 @tsuzozozo All Rights Reserved.</small></p>
        </footer>
                   
        <!-- Footer -->
        <script>prettyPrint();</script>
    </body>
</html>
