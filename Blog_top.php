<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html id="page_top">
    <head>
        <title>Tsuzone</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="./Blog_config/Blog_css.css">
    </head>
    <body>
        
        <!-- Header -->
        
        <header class="global_header">
            <a href="./Blog_top.php" class="logo">TSUZONE</a>
            <p>ぼくのしゅみぶろぐ.</p>
        </header>
        
        <!-- Header -->
        
        
        <hr class="global_hr">
        <div class="wrapper">
            
            <!-- メインコンテンツ -->
            
            <div class="main_column">
                <div class="contents">
                    
                    <?php
                    ini_set("display_errors", 1);
                    require_once("admin/db_access.php");
                    $db = new blog_db();
                    $db->read_contents();
                    
                    
                    ?>
                    </div>
            </div>
            
            <!-- メインコンテンツ -->
            
            
            <!-- 右カラムのコンテンツ-->
            
            <div class="right_column">
                <div class="contents">                 
                    <h1 class="right_header">プロフィール</h1>
                    <img src="./image/prof.png" alt="" width="100">   
                    <p>
                        ツゾさん<br>
                        ドナドナされてます                   
                    </p>
                </div>
                <div class="contents">
                    <p>
                       工事中
                    </p>
                </div>
            </div>
            
            <!-- 右カラムのコンテンツ -->
            
        </div>
        <hr class="global_hr">
        
        <!-- Footer -->
        
        <footer class="global_footer">
            <p class="copyright"><small>Coprighting &copy; 2016 @tuzozozo All Rights Reserved.</small></p>
        </footer>
                   
        <!-- Footer -->
        
    </body>
</html>
