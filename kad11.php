
<?php
    
    header('charset=utf-8');
    $xmlobj = simplexml_load_file('shohin.xml');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>課題11 ファイル処理3</title>
    </head>
    <body>
        
         <h1 style="color:red">課題11 ファイル処理3</h1>
        
         <p>ケーキ一覧</p>
        <?php
            
            $xmlobj-> CAKE[0]->PHOTO;
            $xmlobj-> CAKE[0]->NAME;
            $xmlobj-> CAKE[0]->PRICE;
            
            print '<table border="1">';
            print '<thead><tr><th>Photo</th><th>Name</th><th>Price</th></tr></thead>';
            print '<tbody>';
            foreach ($xmlobj->CAKE as $cakes){
                
                print '<tr><td><img src="./images/' . $cakes->PHOTO . '" width="80" height="68"></td>';
                print '<td>' .  $cakes->NAME . '</td>';
                print '<td>' .  $cakes->PRICE . '円</td></tr>';
                
            }
            
            print '</tbody></table>';
        ?>
    </body>
</html>
