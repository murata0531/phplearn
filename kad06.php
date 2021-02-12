

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>課題06</title>
    </head>
    <body>

        <h1 style="color:red">課題05 日付・時刻関数</h1>

        <?php
        echo "<p>■指定した回数分文字列を表示する関数</p>";

        echo "PHP/WEB構築を4回表示する<br>";

        function viewMoji($kaisu) {

            while ($kaisu > 0) {

                echo "PHP/WEB構築<br>";

                $kaisu--;
            }
        }

        viewMoji(4);

        echo "<p>■現在の時刻を表示する関数</p>";

        function viewJikoku() {

            $datetimenow = getdate();

            echo "現在の時刻 : " . $datetimenow['hours'] . "時" . $datetimenow['minutes'] . "分" . $datetimenow['seconds'] . "秒<br>";
        }

        viewJikoku();

        echo "<p>■時間によりメッセージを変える関数</p>";

        function viewJhyoji() {
            $timemessage = date("H");

            if ($timemessage >= 4 && $timemessage <= 7) {

                echo "まだ朝早いです";
            } elseif ($timemessage >= 8 && $timemessage <= 12) {
                echo "おはようございます";
            } else if ($timemessage >= 13 && $timemessage <= 15) {
                echo "お昼です";
            } else if ($timemessage >= 16 && $timemessage <= 18) {
                echo "もう夕方になりました";
            } else if ($timemessage >= 19 && $timemessage <= 22) {
                echo "夜になりました";
            } else {
                echo "深夜になりました";
            }
        }

        viewJhyoji();
        ?>
    </body>
</html>
