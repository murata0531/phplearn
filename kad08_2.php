
<?php
session_start();
header('charset=utf-8');

$name = '';

if(isset($_GET['name'])){
    $name = trim(htmlspecialchars($_GET['name'], ENT_QUOTES, 'UTF-8'));
}

if($name == '' && isset($_GET['sub'])){
    if($name == '' || $_SESSION['name'] ==''){
        $err['name'] = "<font color='red'>名前が空白です</font>";
    }
}else if($name != "" && !isset($_SESSION['name'])){
    $_SESSION['name'] = $name;


for($i = 1; $i <= 4; $i++){
    $_SESSION['shohin' . $i] = 0;
}
setcookie("name", $name, time() + 60);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>課題08 クッキーセッション</title>
    </head>
    <body>
        <h1 style="color:red">課題08 クッキーセッション</h1>
        
        <p>名前 : 
        <?php
        if(isset($err['name']) && $err['name'] != ''){
            print  $err['name'] ;
            exit;
        }else {
            print $_SESSION['name'] . "さん、いらっしゃいませ!";
        }
        ?>
        </p>
        
        <p>
        <form action="kad08_3.php" method="post">
            <table border="1">
                <tr><th>photo</th><th>name</th><th>price</th><th>piece</th></tr>
                <tr><td><img src="./images/cake01.jpg" width="80" height="68"></td>
                    <td>ブッシュド・ノエル</td><td>250円</td><td><input type="hidden" name="shohin1" value="250">
                        <input type="text"name="kosu1" size="4" value=<?= $_SESSION['shohin1'] ?>>pieces</td></tr>
                
                <tr><td><img src="./images/cake02.jpg" width="80" height="68"></td>
                    <td>シブースド・ノエル</td><td>200円</td><td><input type="hidden" name="shohin2" value="200">
                        <input type="text"name="kosu2" size="4" value=<?= $_SESSION['shohin2'] ?>>pieces</td></tr>
                
                <tr><td><img src="./images/cake03.jpg" width="80" height="68"></td>
                    <td>イチゴとシブースドケーキ</td><td>400円</td><td><input type="hidden" name="shohin3" value="400">
                        <input type="text"name="kosu3" size="4" value=<?= $_SESSION['shohin3'] ?>>pieces</td></tr>
                
                <tr><td colspan="3"><input type="submit" name="sub" value="購入"></td></tr>
            </table>
        </form>
        </p>
    </body>
</html>
