<?php
class SetStateTest
{
    public function __set_state()
    {
        echo 'exportされました';
    }
}

$set_state = new SetStateTest();
$a = var_export($set_state, true);
eval('echo '. $a. ';');
?>

