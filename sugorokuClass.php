<?php

header("Content-Type: text/html; charset=utf-8");
class  sugorokuClass{
    var $state;         //Game State
    var $name1;          //ID A
    var $name2;          //ID B
    var $login;
    var $sum1;
    var $sum2;
    var $count1;
    var $caout2;
    var $dice1;
    var $dice2;
    var $flag;
    var $eventNum;

    function get1(){
      $pdo = new PDO('mysql:host=localhost;dbname=sugoroku;charset=utf8','aaa','aaa');

      $sql = "SELECT state from data where id = 1";
      $stmt = $pdo->query($sql);
      $stmt->execute();
      $this->state = $stmt->fetchColumn();

      $sql = "SELECT name1 from data where id = 1";
      $stmt = $pdo->query($sql);
      $stmt->execute();
      $this->name1 = $stmt->fetchColumn();

      $sql = "SELECT name2 from data where id = 1";
      $stmt = $pdo->query($sql);
      $stmt->execute();
      $this->name2 = $stmt->fetchColumn();

      $sql = "SELECT login from data where id = 1";
      $stmt = $pdo->query($sql);
      $stmt->execute();
      $this->login = $stmt->fetchColumn();

      $sql = "SELECT sum1 from masu where id = 1";
      $stmt = $pdo->query($sql);
      $stmt->execute();
      $this->sum1 = $stmt->fetchColumn();

      $sql = "SELECT sum2 from masu where id = 1";
      $stmt = $pdo->query($sql);
      $stmt->execute();
      $this->sum2 = $stmt->fetchColumn();

      $sql = "SELECT count1 from masu where id = 1";
      $stmt = $pdo->query($sql);
      $stmt->execute();
      $this->count1 = $stmt->fetchColumn();

      $sql = "SELECT count2 from masu where id = 1";
      $stmt = $pdo->query($sql);
      $stmt->execute();
      $this->count2 = $stmt->fetchColumn();

      $sql = "SELECT dice from masu where id = 1";
      $stmt = $pdo->query($sql);
      $stmt->execute();
      $this->dice1 = $stmt->fetchColumn();

      $sql = "SELECT eventNum from masu where id = 1";
      $stmt = $pdo->query($sql);
      $stmt->execute();
      $this->eventNum = $stmt->fetchColumn();

      $sql = "SELECT flag from masu where id = 1";
      $stmt = $pdo->query($sql);
      $stmt->execute();
      $this->flag = $stmt->fetchColumn();

      $pdo = null;
    }


      function get2(){
      $pdo = new PDO('mysql:host=localhost;dbname=sugoroku;charset=utf8','aaa','aaa');

          $sql = "SELECT state from data where id = 1";
          $stmt = $pdo->query($sql);
          $stmt->execute();
          $this->state = $stmt->fetchColumn();

          $sql = "SELECT name1 from data where id = 1";
          $stmt = $pdo->query($sql);
          $stmt->execute();
          $this->name1 = $stmt->fetchColumn();

          $sql = "SELECT name2 from data where id = 1";
          $stmt = $pdo->query($sql);
          $stmt->execute();
          $this->name2 = $stmt->fetchColumn();

          $sql = "SELECT login from data where id = 1";
          $stmt = $pdo->query($sql);
          $stmt->execute();
          $this->login = $stmt->fetchColumn();

          $sql = "SELECT sum1 from masu where id = 2";
          $stmt = $pdo->query($sql);
          $stmt->execute();
          $this->sum1 = $stmt->fetchColumn();

          $sql = "SELECT sum2 from masu where id = 2";
          $stmt = $pdo->query($sql);
          $stmt->execute();
          $this->sum2 = $stmt->fetchColumn();

          $sql = "SELECT count1 from masu where id = 2";
          $stmt = $pdo->query($sql);
          $stmt->execute();
          $this->count1 = $stmt->fetchColumn();

          $sql = "SELECT count2 from masu where id = 2";
          $stmt = $pdo->query($sql);
          $stmt->execute();
          $this->count2 = $stmt->fetchColumn();

          $sql = "SELECT dice from masu where id = 2";
          $stmt = $pdo->query($sql);
          $stmt->execute();
          $this->dice2 = $stmt->fetchColumn();

          $sql = "SELECT eventNum from masu where id = 2";
          $stmt = $pdo->query($sql);
          $stmt->execute();
          $this->eventNum = $stmt->fetchColumn();

          $sql = "SELECT flag from masu where id = 2";
          $stmt = $pdo->query($sql);
          $stmt->execute();
          $this->flag = $stmt->fetchColumn();

          $pdo = null;
        }



    function update(){
      $pdo = new PDO('mysql:host=localhost;dbname=sugoroku;charset=utf8','aaa','aaa');
      $sql = "UPDATE data SET state = '$this->state', name1 = '$this->name1', name2 = '$this->name2',login = '$this->login' WHERE id = 1";
  		$pdo->query($sql);

      $pdo = null;
    }

}
?>
