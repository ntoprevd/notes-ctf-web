<?php
highlight_file(__FILE__);
class sink{
    private $code;

    function __toString(){
        eval($this->code);
        return "toString";
    }
}

class source{
    public $c;

    function __destruct(){
        echo $this->c;
    }
}

$ser = $_POST["data"];
if (isset($ser)){
    unserialize($ser);
}
