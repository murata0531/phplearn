
<?php

session_start();
if(isset($_SESSION['name'])){
    unset($_SESSION['name']);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h1 style="color:red">課題08 クッキーセッション</h1>
        
        <p>名前を入力して下してください</p>
        <form action="kad08_2.php" method="get">
            <input type="text" name="name" value=
            <?php
                if(isset($_COOKIE['name'])){
                    print $_COOKIE['name'];
                }
                ?>
            >
            <button type="submit" value="送信" name="sub" size="4">送信</button>
            <input type="reset" value="取消">
        </form>
        <?php
        
        ?>
    </body>
</html>
