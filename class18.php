<?php
class DebugInfoTest
{
    public function __debugInfo()
    {
        echo 'var_dumpされました<BR>';
    }
}

$debug_info = new DebugInfoTest();
var_dump($debug_info);
?>