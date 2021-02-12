<?php

class KadSyousai{
    /* 
     * メンバ変数宣言
     */
    var $saifu;             // 所持金
    
    /*
     * コンストラクタ
     * 引数：$money -> 初期所持金
     */
    function __construct($money) {
        $this -> saifu = (int)$money;
        
    }
    
    /*
     * saifu の値を取得
     * 戻値：$this -> saifu
     */
    function getSaifu(){
        return $this -> saifu;
        
    }
    
    /*
     * 購入判定・所持金の更新
     * 引数：$nedan -> 購入商品の価格
     * 戻値：boolean(true -> 購入可能, faise -> 購入不可)
     */
    function updateBuy($nedan){
        if( $nedan <= $this -> saifu ){
            $this -> saifu = $this -> saifu - $nedan;
            return true;
        }else{
            return false;
        }
    }
    
    /*
     * 商品名を表示
     * 引数：$shina -> 商品名
     */
    function printMessage($shina){
        print $shina . " - 購入<br />\n";
        
    }
    
}

?>
