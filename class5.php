<?php
class Hoge{
    public $go;

    public function __contruct($str)
    {
        if(is_string($str)){
            $this->go = $str;
        }
    }

    public function retsGo()
    {
        if(is_string($this->go)){
            return 'go!go!';
        }else{
            return 'goできませんでした';
        }
    }
}

$hoge = new Hoge(987);
echo $hoge->retsGo();

?>