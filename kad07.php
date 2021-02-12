
<?php
header('charset=utf-8');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>課題07 Formからのデータ受信(POST)</title>
    </head>
    <body>

        <h1 style="color:red">課題07 Formからのデータ受信(POST)</h1>

        <?php
        $name = trim(htmlspecialchars($_POST['name'] , ENT_QUOTES, 'UTF-8'));
        $class = trim(htmlspecialchars($_POST['class'] , ENT_QUOTES, 'UTF-8'));
        $no = trim(htmlspecialchars($_POST['no'] , ENT_QUOTES, 'UTF-8'));
        $seibetu = trim(htmlspecialchars($_POST['seibetu'], ENT_QUOTES, 'UTF-8'));
        $email = trim(htmlspecialchars($_POST['email'] , ENT_QUOTES, 'UTF-8'));

        //名前の入力チェック//
        if ($name == "") {
            $err['name'] = "<font color='red'>名前を入力してください</font>";
        } elseif (strlen($name) >= 30) {
            $err['name'] = "<font color='red'>200文字以内で入力してください</font>";
        }
        
        //出席番号の入力チェック//
        if($no == ""){
            $err['no'] = "<font color='red'>出席番号を入力してください</font>";
        }elseif (!preg_match('/^[0-9]+$/', $no)) {
            $err['no'] = "<font color='red'>数字で入力してください</font>";
        }
        
        //メールチェック//
        if($email == ""){
            $err['email'] =  "<font color='red'>メールアドレスを入力してください</font>";
        }elseif(!preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/', $email)){
            $err['email'] = "<font color='red'>メールアドレスが不正です</font>";
        }
        
        
        //名前の表示//
        print("<p>名前 : ");
        
        if(!isset($err['name'])){
            print $name . "</p>";
        } else {
            print $err['name'] . "</p>";
        }
        
        //クラス、出席番号の表示//
        print("<p>クラス : " . $class . " 出席番号 :");
        if(!isset($err['no'])){
            print $no . "</p>";
        }else {
            print $err['no'] . "</p>";
        }
        
        //メールアドレスを表示//
         print("<p>メールアドレス : ");
        
        if(!isset($err['email'])){
            print $email . "</p>";
        } else {
            print $err['email'] . "</p>";
        }
        
        print "<p><a href='kad07.html'>入力フォームへ</a></p>";
        ?>
    </body>
</html>
