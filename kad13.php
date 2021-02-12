
 <?php
    
    header('charaset=utf-8');
    
    define('HOST','localhost');
    define('USR','ie2a');
    define('PASS','ecc');
    define('DB','ie2a' );
    
 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>課題13 データベース処理(データ追加)</title>
    </head>
    <body>
        
        <h1 style="color:red">課題13 データベース処理(データ追加)</h1>
        
        <?php
        
            if(isset($_POST['submit']) && $_POST['siteName'] != '' && $_POST['url'] != ''){
                
                $siteName = trim(htmlspecialchars($_POST['siteName'],ENT_QUOTES,'UTF-8'));
                $url = trim(htmlspecialchars($_POST['url'],ENT_QUOTES,'UTF-8'));
                $content = trim(htmlspecialchars($_POST['content'],ENT_QUOTES,'UTF-8'));
                
                if(!$conn = mysqli_connect(HOST, USR, PASS, DB)){
                    die("データベースに接続できません");
                }
                
                mysqli_set_charset($conn, 'UTF-8');
                
                $siteName = mysqli_real_escape_string($conn,$siteName);
                $url = mysqli_real_escape_string($conn,$url);
                $content = mysqli_real_escape_string($conn,$content);
                
                
                
                $siteName = str_replace("%","\%",$siteName);
                $url = str_replace("%","\%",$url);
                $content = str_replace("%","\%",$content);
               
                
                $sql = "INSERT INTO ie2a02(site,url,content) VALUES(?,?,?)";
                $stmt = mysqli_prepare($conn, $sql);
                mysqli_stmt_bind_param($stmt, 'sss',$siteName,$url,$content);
                mysqli_stmt_execute($stmt);
                
                
                if(mysqli_stmt_affected_rows($stmt)){
                    print '<p>登録完了</p>';
                }else {
                    die('登録できませんでした');
                }
                
                mysqli_stmt_free_result($stmt);
                mysqli_close($conn);
                    
            }
        ?>
        
        <form method="post">
            <table border="1" cellpadding="0" bodercolor="#656567">
                <tbody>
                    <tr>
                        <td><label for="siteName">サイト名</label></td><td><input type="text" name="siteName" id="siteName" required="true"></td><td><font color="red">必須項目</td>
                    </tr>
                    <tr>
                        <td><label for="url">URL</label></td><td><input type="text" name="url" id="url" required="true"></td><td><font color="red">必須項目</td>
                    </tr>
                    <tr>
                        <td><label for="content">サイト名</label></td><td><input type="textarea" name="content" id="content" required="true"></td>
                    </tr>
                    <tr>
                        <td><button type="submit" name="submit" value="登録">登録</button><button type="reset">リセット</button></td>
                    </tr>
                </tbody>
            </table>
        </form>
        
    </body>
</html>
