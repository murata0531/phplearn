
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>課題04</title>
    </head>
    <body>
        
        <h1 style="color:red">課題04 文字列操作、正規表現</h1>
        <p>■文字列を操作</p>
        文字列を操作して、結果を表示する<br>
        
        <?php
            
            $moji = "PHP,JAVA,RERL,Ruby,Python";
            
           print "操作する文字列(変数moji) : " . $moji . "<br>";
           print "文字列の文字数は : " . strlen($moji) . "文字<br>";
           print "5文字目から4文字分取り出す : " . substr($moji, 5, 4) . "br";
           print "小文字に変換する : " . mb_strtolower($moji) . "<br>";
           print "全角文字に変換する : " . mb_convert_kana($moji, "R") . "<br>";
           
           print "「,」で区切り配列\$haiに格納して表示する(explode)<br>";
           
           
           $hai = explode(",", $moji);
           $n = 0;
           
           foreach ($hai as $i){
               
               print "hai(" . $n . ")=" . $i . "<br>";
               
               $n++;
               
           }
           
           print "<br>■正規表現(マッチング)<br><br>";
           
           print "正規表現を行い、表示を変える<br>";
           print "変数\$moji2の内容がアルファベットで始まっているかどうか調べ表示を変える<br>";
           
           $moji2 = "ecc144";
           
           print "文字\$moji2の内容 : " . $moji2 . "<br>";
           
           if(preg_match('/^[a-zA-Z]/', $moji2)){
               
               print "変数の内容はアルファベットで始まっている文字列です<br>";
               
           }
           
           print "変数の文字列の一部を置き換える<br>";
           
           $moji3 = "Hello PHP!";
           
           print "変数\$moji3の内容 : " . $moji3;
           
           print "「Hello」を「こんにちは」に置き換える<br>";
           
           print str_replace("Hello", "こんにちは", $moji3, $i)
        ?>
    </body>
</html>
