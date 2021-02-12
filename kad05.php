
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>課題05</title>
    </head>
    <body>

        <h1 style="color:red">課題05 日付・時刻関数</h1>

        <?php
        $w = date("w");
        $week = array("日", "月", "火", "水", "木", "金", "土");

        echo "今日は" . date("Y年m月d日") . "($week[$w])<br>";
        
        $datetimenow = getdate();

        echo "現在の時刻は" . $datetimenow['hours'] . "時" . $datetimenow['minutes'] . "分" . $datetimenow['seconds'] . "秒です<br>";
        
        echo "時間によりメッセージが変わる<br>";
        
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
        ?>
    </body>
</html>
