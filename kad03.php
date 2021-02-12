
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>配列操作</title>
    </head>
    <body>
        
        <h1 style="color:red">課題03 配列の操作</h1>
        
        <?php
            
        $lang = array("PHP","JSP","Ruby","Perl","Python");
        $colors = array("blue","purple","green","yellow","red");
        $name = array(
            "PHP" => "HypertextPreprocessor",
            "ASP" => "Active Server Pages",
            "JSP" => "Java Server Pages",
            "CGI" => "Common Gateway Interface",
            "IIS" => "Internet Information Server"
        );
        ?>
        
        <p>■配列1 表示</p><br>
        <p>for分を使用し配列の内容を表示する</p>
        WEB用スクリプト一覧<br>
        <?php
            for($i = 0; $i < count($lang); $i++){
                print $lang[$i] . "<br>";
            }
        ?>
        
        <p>配列2表示</p><br>
        
        <p>foreach文を使用し配列の内容を表示する</p>
        色を変えて文字を表示<br>
        
        <?php
            
        foreach ($colors as $i){
            
            print "<font color=" . $i . ">PHP: Hypertext Preprocessor<br>" ;
        }
        
        print "<br><p>■配列3表示</p><br>";
        print "連想配列の内容を表示する<br>略語 → 正式名<br>";
        foreach ($name as $key => $val){
            print "略語 : " . $key ." → 正式名：" . $val . "<br>";
        }
        ?>
    </body>
</html>
