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

                $stmh = $db->get_photo_from_id($id);
                $cnt = 0;
                while($value = $stmh->fetch(PDO::FETCH_ASSOC)){
                    if(unlink($_SERVER["DOCUMENT_ROOT"] . $value["url"])){
                        $db->delete_photo_from_id($id);
                        echo "削除しました";
                    }else{
                        echo "削除に失敗しました";
                    }
                    $cnt ++;
                }
                if($cnt == 0){
                    echo "<p>削除に失敗しました</p>";
                }
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
