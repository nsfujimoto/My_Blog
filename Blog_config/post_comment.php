<!DOCTYPE html>

<html id="page_top">
  <head>
    <title>Tsuzone</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="Blog_css.css">
  </head>
  <body>
    
    <!-- Header -->

    <header class="global_header">
      <a href="../Blog_top.php" class="logo">TSUZONE</a>
      <p>ぼくのしゅみぶろぐ.</p>
    </header>
    
    <!-- Header -->
    
    <!-- Main -->
    <hr class="global_hr">
    <div class="wrapper">
      <p>
    <?php
       ini_set("display_errors", 1);
       require_once("../admin/db_access.php");
       $db = new comment_db();
       $name = $_POST["name"];
       $message = $_POST["message"];
       $id = $_POST["id"];
       
       //idが空か
       if($id == ""){
       echo "id test<br>";
       }
       
       //nameが空の場合の処理
       if(str_replace(array(" ", "　", "\n", "\t"), "", $name) == ""){
       $name = "no name";
       }
       
       //messageが空の場合の処理
       $str = str_replace(array(" ", "　", "\n", "\t", "\x0B"), "", $message);
       $str = ltrim($str);
       if(empty($str)){
       echo "メッセージを入力してください";
       }else{
       //messageが空でない場合のみコメント投稿する
       if($db->write_comment($id, $name, $message)){
    echo("投稿成功");
    }else{
    echo("投稿失敗");
    }
    }
    ?>
      </p>
    </div>
    <hr class="global_hr">
    <!-- Main -->

    <!-- Footer -->
  
  <footer class="global_footer">
    <p class="copyright"><small>Coprighting &copy; 2016 @tuzozozo All Rights Reserved.</small></p>
  </footer>
  
  <!-- Footer -->
  
  </body>
</html>

