
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1 style="color:red">課題01 文字列の表示</h1>
        
        <h2>■printを使用した文字列表示</h2>
        
        <?php
        
        print "Are you ready for PHP?<br>";
        ?>
        
        <h2>■定数を利用した文字列の表示</h2>
        
        <?php
        
        define('A','Hello');
        
        
        print A;
        ?>
        
        <h2>■print関数を使用しない文字列の表示</h2>
        
        
        
        
        <?= 'こんにちは PHP' ?>
      
        
        <h2>■ヒアドキュメントを利用して表示</h2>
        
        <?php
            
            $str = <<< 'END'
Are you ready for PHP? <br>
<font color="#0000ff">PHP</font>
END;
            print $str;
        ?>
    </body>
</html>
