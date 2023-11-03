<?php

    class Message{


          public function setMessage($msg, $type,$display,$redirect) {
      
            $_SESSION["msg"] = $msg;
            $_SESSION["type"] = $type;
            $_Session["display"] = $display;
            
      
            if($redirect != "back") {
              header("Location: ../" . $redirect);
            } else {
              header("Location:" . $_SERVER['HTTP_REFERER']);
            }
      
          } 
      
          public function getMessage() {
      
            if(!empty($_SESSION["msg"])) {
              return [
                "msg" => $_SESSION["msg"],
                "type" => $_SESSION["type"],
                "display" => $_SESSION["display"]
              ];
            } else {
              return false;
            }
      
          }
      
          public function clearMessage() {
      
            $_SESSION["msg"] = "";
            $_SESSION["type"] = "";
            $_SESSION["display"] = "";
      
          }
    }
