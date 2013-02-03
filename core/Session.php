<?php

class Session{
    public function get($item){
        if(isset($_SESSION[$item])){
            return $_SESSION[$item];
        }
            return false;
    }
    public function destroy($item = null){
        if($item == null){
            session_destroy();
        }else{
            if(isset($_SESSION[$item])){
                unset($_SESSION[$item]);
            }
        }
    }
    public function set($item, $value){
        if(isset($_SESSION[$item])){
            return false;
        }
        $_SESSION[$item] = $value;
        return true;
    }
}