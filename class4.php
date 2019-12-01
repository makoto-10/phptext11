<?php
$ai = new ArctificialIntelligence($a, $b, $c);
echo $ai->return();

class AiExtends extends ArctificialIntelligence
{
    protected $japanese;
    protected $maht;
    protected $music;
    protected $status;

    public function __contruct($p1=null, $p2=null, $p3=null)
    {
        if(!is_numeric($p1) || !is_numeric($p2) || !is_numeric($p3)){
            self::aiResult(false);
        }else{
            $this->japanese = (int)$p1*2;
            $this->nath = (int)$p2*2;
            $this->music = (int)$p3*2;
            self::aiResult(true);
        }
    }
}
echo '<BR>';
$ai2 = new AiExtends($a, $b, $c);
echo $ai2->return();
?>