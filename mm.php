アクセス修飾子








1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
42
43
44
45
46
47
<?php
/**
 * 
 */
class Human
{
  public $name = '鈴木次郎';
  protected $age = 44;
  private $blood = 'B';
 
  public function humanShout()
  {
    $this->name = '山田太郎';
    $this->age = 24;
    $this->blood = 'AB';
    echo $this->name. '<BR>';
    echo $this->age. '<BR>';
    echo $this->blood. '<BR>';
  }
 
  protected function challengeAge()
  {
    echo $this->age. '<BR>';
  }
 
  private function callengeBlood()
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