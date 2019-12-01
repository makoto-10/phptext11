<?php
class TestCall
{
    public function __call($name, $ary)
    {
        if(!method_exists($this, $name)){
            return self::nothing($ary);
        }else{
            return self::$name();
        }
    }

    private function ex()
    {
        echo '存在します';
    }

    private function nuthing($str)
    {
        echo '存在しません'. end($str);
    }
}

$testcall = new TestCall();
$testcall -> naiyone('hoge-');
?>