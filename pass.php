
<?php
    
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ファイル処理1</title>
    </head>
    <body>
        <h1 style="color:red">課題09 ファイル処理1(ユーザ認証)</h1>
        
        <?php
            echo $_SESSION['id'] . "さんログイン成功です" . "<br><a href='kad09.php'>ログインページへ</a>";
            unset($_SESSION['id']);
        ?>
    </body>
</html>
