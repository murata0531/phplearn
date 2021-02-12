
<?php

header('charset=utf-8');
$message="";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['sub'])){
        $updir = './upload/';
        
        switch ($_FILES['upfile']['error']) {
            case 1: print 'ファイルのサイズが大きすぎます(php.ini)';
                    exit;
            case 2: print 'ファイルのサイズが大きすぎます';
                    exit;
            case 3: print 'ファイルの一部しかアップロードされていません';
                    exit;
            case 4: print 'ファイルが転送されませんでした';
                    exit;
                
        }
        
        if(is_uploaded_file($_FILES['upfile']['tmp_name'])){
            
            $fname = mb_convert_encoding($_FILES['upfile']['error'], 'utf-8','auto');
            
            if(move_uploaded_file($_FILES['upfile']['tmp_name'], $updir.$fname) == false){
                print 'アップロード失敗';
                exit;
            }else {
                $message = 'アップロード成功';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
         <h1 style="color:red">課題10 ファイル処理2(ファイルのアップロード)</h1>
        
        <?php
            if($message != ''){
                print $message;
            }else {
                print 'アップロード失敗';
            }
        ?>
    </body>
</html>
