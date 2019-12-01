<?php
class TestDestruct
{
    public function testMethod()
    {
        echo 'methodです<BR>';
    }

    public function __destruct()
    {
        echo 'デストラクタです';
    }
}

$test = new TestDestruct();
$test->testMethod();
echo 'デストラクタはどこにでるかな？<BR>';
?>