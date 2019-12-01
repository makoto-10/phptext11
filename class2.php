<?php
class Human
{
    public $name = '鈴木次郎';
    protected $age = 44;
    private $blood = 'B';

    public function humanShout()
    {
        $this->name = '山田太郎';
        $this->age =24;
        $this->blood = 'AB';
        echo $this->name. '<BR>';
        echo $this->age. '<BR>';
        echo $this->blood. '<BR>';        
    }

    protected function challengeAge()
    {
        echo $this->age. '<BR>';
    }

    private function challengeBlood()
    {
        echo $this->blood. '<BR>';
    }
}

class HumanExtends extends Human
{
    public function prot()
    {
        $this->challengeAge();
        $this->challengeBlood();
    }
}

$class = new Human();
$class2 = new HumanExtends();
echo $class->name. '<BR>';
$class->humanShout();
$class2->prot(). '<BR>';

?>