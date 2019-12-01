<?php
class ArtificialIntelligence
{
    protected $japanese;
    protected $math;
    protected $music;
    protected $status;

    public function __construct($p1=null, $p2=null, $p3=null)
    {
        if(!is_numeric($p1) || !is_numeric($p2) || !is_numeric($p3)){
            self::aiResult(false);
        }else{
            $this->japanese = (int)$p1;
            $this->math = (int)$p2;
            $this->music = (int)$p3;
            self::aiResult(true);
        }
    }

    protected function aiResult($status)
    {
        $this->status = $status;
    }

    public function return()
    {
        if($this->status == true){
            return'人工知能ポイントは'. (int)($this->japanese + $this->math + $this->music). 'でした';
        }else{
            return 'エラーです。人工知能は人口無能になりました。'; 
        }
    }
}

$a = mt_rand(0, 100);
$b = mt_rand(0, 100);
$c = mt_rand(0, 100);
$ai = new ArtificialIntelligence($a, $b, $c);
echo $ai->return();

$ai = new ArtificialIntelligence($a, $b, $c);
echo $ai->return();

?>