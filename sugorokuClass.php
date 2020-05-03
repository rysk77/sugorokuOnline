<?php

header("Content-Type: text/html; charset=utf-8");
class  sugorokuClass{
    var $state;         //Game State
    var $name_a;          //ID A
    var $name_b;          //ID B

    // Constructor
    function sugorokuClass(){
        $this->state= 0;
        $this->name_a = '-';
        $this->name_b = '-';
    }

    // 進行状態を調べてゲームを実行
    function action($name){
       switch($this->state){
            case 0:     // プレイヤーのログイン
                if ($this->name_a=='-'){
                  $this->name_a= $name;
                    $this->state = 1;
                  }
                if ($this->name_a!=$name && $this->name_b=='-'){
                  $this->name_b= $name;
                  $this->state = 2;
                }
                if ($this->name_a=='-' && $this->name_b=='-'){
                    $this->state = 3;
                  break;
                }
                 break;
            case 10:     // player1のターン

                //$this->state = 2;
                break;
            case 20:     // player2のターン

                //$this->state = 1;
                break;
            default:
            exit();
        }
        $this->put_file();
    }

}
?>
