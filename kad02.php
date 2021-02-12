
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ループ処理</title>
    </head>
    <body>
        
        <h1 style="color:red">課題02 ループ処理</h1>
        
        <p>■ループ1 for</p>
        <p>for文で7つの文字を表示</p>
        <?php
            for($i = 0; $i < 7; $i++){
                
                print "What is a PHP?<br>";
            }
        ?>
        
        <p>■ループ2 while</p>
        <p>while文で7つの文字を表示</p>
        
        <?php
            
        $i = 1;
        
        while($i <= 7){
            
            print "PHP is a web script{$i}.<br>";
            
            $i ++;
        }
        ?>
    </body>
</html>
