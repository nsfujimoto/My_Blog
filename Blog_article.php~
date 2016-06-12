<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
ini_set("display_errors", 1);
$url = $_SERVER["REQUEST_URI"];
$sep_url = explode('/', $url);
$id = $sep_url[count($sep_url)-1];
?>

<html id="page_top">
    <head>
        <title>Tsuzone</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
        if(isset($id)){
		echo ( '<link type="text/css" rel="stylesheet" href="../Blog_config/Blog_css.css"> ');
	}else{
		echo ( '<link type="text/css" rel="stylesheet" href="./Blog_config/Blog_css.css"> ');
	}
?>
    </head>
    <body>
        
        <!-- Header -->
        
        <header class="global_header">
            <a href="../Blog_top.php" class="logo">TSUZONE</a>
            <p>ぼくのしゅみぶろぐ.</p>
        </header>
        
        <!-- Header -->
        
        
        <hr class="global_hr">
        <div class="wrapper">
            
            <!-- メインコンテンツ -->
            
            <div class="main_column">
                <div class="contents">
                        <?php
                            require_once ("./admin/db_access.php");
                            $db = new blog_db();
                            $db->read_detail($id);
                        ?>
                </div>
                
                <div class="comment">
                    
                    <h1>Comment</h1>
                    
                    <!-- コメント表示 -->
                    
                    <?php
                        require_once("./admin/db_access.php");
                        $comment_db = new comment_db();
                        $comment_db->read_comment($id);
                    ?>
                    
                    <!-- 
                    <ul>
                        <li><div class="entry">
                            <h3>user name</h3>
                            <p>
                                test testtest testtest testtest test<br>
                                test testtest testtest test
                            </p>
                        </div></li>
                        
                        <li><div class="entry">
                            <h3>user name2</h3>
                            <p>
                                test testtest testtest testtest test<br>
                                test testtest testtest testtest testtest testtest testtest test<br>
                                test testtest testtest test
                            </p>
                        </div></li>
                    </ul>
                    -->
                    
                    <!-- /コメント表示 -->
                    
                    <!-- 投稿フォーム -->
                    
                    <form class="comment_form" method="post" action="../Blog_config/post_comment.php">
                        <h2>name:</h2>
                        <input type="text" name="name"><br>
                        <h2>comment:</h2>
                        <textarea name="message"></textarea><br>
                        <input type="submit" value="submit">
                        <input type="hidden" name="id" value="<?=$id?>">
                    </form>
                    
                    <!-- /投稿フォーム -->                   
                </div>
            </div>
            
            <!-- メインコンテンツ -->
            
            
            <!-- 右カラムのコンテンツ-->
            
            <div class="right_column">
                <div class="contents">                 
                    <h1 class="right_header">プロフィール</h1>
                    <img src="../image/prof.png" alt="" width="100">   
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
