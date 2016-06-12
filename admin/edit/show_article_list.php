<!DOCTYPE html>

<html>
<title>記事一覧</title>
<meta charset="UTF-8");
<meta name="viewport", content="width=device-width, initial-scale=1.0">
  <?php
     ini_set("display_errors", 1);
     require_once '../db_access.php';
     $db = new blog_db();
     $sql = 'select id, title from archive';
     $stmh = $db->pdo->prepare($sql);
  $stmh->execute();
  ?>
<style>
    td {
        padding: 5px;
    }
</style>
    <h3>記事一覧:</h3>
    <table border="1" style="border-spacing:0; margin:5px 0;">
        <!--<tr><th>編集</th> <th>削除</th></tr>-->
<?php
    while($row = $stmh->fetch(PDO::FETCH_ASSOC)){
        echo("<tr>");
        print('<td><a href="./write_article.php?id=' . $row["id"] . '">');
        print($row["title"] . "</a></td>");
        echo('<td><a href="./delete_article.php?id=' . $row["id"] . '">' . "削除" . "</a></td>");
	echo('<td><a href="../../Blog_article.php/' . $row["id"] . '">' . "表示" . "</a></td>"); 
        echo("</tr>");
    }
?>
    </table>

    <a href="./write_article.php">新規作成</a>

</html>