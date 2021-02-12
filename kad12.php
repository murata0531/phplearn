
<?php
    
    header('charset=utf-8');

    define('HOST','localhost');
    define('USR','ie2a');
    define('PASS','ecc');
    define('DB','ie2a');
    
    $conn = "";

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>課題12 データベース処理(検索</title>
    </head>
    <body>
        
        <h1 style="color:red">課題12 データベース処理(検索)</h1>
        
        <form method="post" action="kad12.php">
            <input type="text" id="site" name="site">
            <input type="submit" value="検索" name="submit"></input>
        </form>
        
        
        <?php
            
            if(isset($_POST['submit'])){
                if($_POST['site'] != ''){
                    if(!$conn = mysqli_connect(HOST,USR,PASS,DB)){
                        die('データベースに接続できません');
                    }
                    
                    mysqli_set_charset($conn,'utf8');
                    
                    $condition = '';
                   
                    
                    if(isset($_POST['site']) && ($_POST['site'] != '')){
                        $site = trim(htmlspecialchars($_POST['site'], ENT_QUOTES, 'UTF-8'));
                        $site = str_replace("%","\%",$site);
                        $condition = "WHERE site LIKE \"%" . $site . "%\"";
                 
            
            
                        $sql = "SELECT * FROM ie2a02 " . $condition;
        print $sql;
                        $stmt = mysqli_prepare($conn, $sql);

                        mysqli_stmt_execute($stmt);

                        $num = mysqli_stmt_num_rows($stmt);
        print $num;
                        }
                                     }
                if($_POST['site'] !=''){
                    if($num > 0){
                        print "<table border=\"1\">\n";
                        print "<tr><td>id</td><td>site</td><td>url</td><td>content</td>\n";
                        mysqli_stmt_bind_result($stmt,$bid,$bsite,$burl,$bcontent);

                        while(mysqli_stmt_fetch($stmt)){

                            print "<tr>";
                            print "<td>" . $bid . "</td>";
                            print "<td>" . $bsite . "</td>";
                            print "<td>" . $burl . "</td>";
                            print "<td>" . $bcontent . "</td>";
                            print "</tr>\n";

                        }

                        print "</table>";
                    }

                    mysqli_stmt_free_result($stmt);
                    mysqli_stmt_close($stmt);
                    mysqli_close($conn);
                }
             }
        ?>
        
    </body>
</html>
 