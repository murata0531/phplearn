<?php

    require_once('KadSyousai.php');

class KadKeisyo extends KadSyousai{

    var $card;

    function KadKeisyo($money, $card=0){
        $this->KadSyousai($money);
        $this->card = $card;
    }
    
    function getCard(){
    	return $this->card;
    }

    function updateBuy2($nedan){
    	if (!$this->updateBuy($nedan)) {
            $this->card += $nedan;
            return false;			
	} else {
            return true;
	}
    }

    function moneyMessage($shina){
    	$this->printMessage($shina);
    }

    function cardMessage($shina){
	print $shina . '－購入（カード）<br>';
    }
}

