
<?php
    
    session_start();
    header('charset=utf-8');
    
    $goukei = 0;
    
    for($i = 1; $i <= 4; $i++){
        
        $kakaku = trim(htmlspecialchars($_POST['shohin' .$i],ENT_QUOTES,'UTF-8'));
        $kosu = trim(htmlspecialchars($_POST['kosu' .$i],ENT_QUOTES,'UTF-8'));

        if(!preg_match('/^[0-9]+$/', $kosu)){
            $_SESSION['shohin'.$i] = 0;
        }elseif ($kosu != 0) {
            $_SESSION['shohin'.$i] = $kosu;
            $goukei += ($kakaku * $_SESSION['shohin'.$i]);
        
        }
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

        <?php
            print $_SESSION['name']."さん、お買い上げありがとうございます<br>\n";
            print "お買い上げ金額は". number_format($goukei)."円になります\n";
            print "<p><a href='kad08_2.php'>買い物に戻る</a></p>";
        ?>
    </body>
</html>
