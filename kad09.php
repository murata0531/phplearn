
<?php

    session_start();
    if(!isset($_SESSION['id'])){
        $_SESSION['id'] = '';
    }
    header('charset=utf-8');
    $id = '';
    $kurasu = '';
    
    if(isset($_POST['sub'])){
        
        $id = trim(htmlspecialchars($_POST['id'], ENT_QUOTES, 'UTF-8'));
        $pass = trim(htmlspecialchars($_POST['pass'], ENT_QUOTES, 'UTF-8'));
        
        $filename = 'usr.dat';
        $file = fopen($filename, 'r') or die('ファイルオープン失敗');
        
        flock($file, LOCK_SH);
        
        while(!feof($file)){
            $data = fgets($file, 1000);
           
            list($did,$dpass) = explode(',', $data);
            
            if($id == trim($did) && $pass == trim($dpass)){
               $_SESSION['id'] = $id;
               header('Location:pass.php');
               break;
            }elseif($id == trim($did) && $pass != trim($dpass)){
                $message = 'パスワードが違います';
                break;
            }else {
                $message = 'ユーザ名、パスワードが違います';
            }
        }
        
        flock($file, LOCK_UN);
        fclose($file);
    }else if($id != ''){
        $message = '正しく入力して下さい';
    }else {
        $message = '名前とパスワードを入力して下さい';
    }
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ファイル処理1</title>
    </head>
    <body>
        
        <h1 style="color:red">課題09 ファイル処理1(ユーザ認証)</h1>
        
        <form action="kad09.php" method="post">
            <label for="id">ユーザID : <input type="text" name="id"></label><br>
            <label for="pass">パスワード : <input type="password" name="pass"></label><br>
            <button type="submit" value="login" name="sub">押す</button>
            <button type="reset">Reset</button>
        </form>
        <?= $message ?>
    </body>
</html>
