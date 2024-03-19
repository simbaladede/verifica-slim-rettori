<?php
    include_once "Ordine.php";
    class OrdineFisico extends Ordine{
        protected $pagamento; //stringa che recita carta o contanti

        public function __construct($num, $d, $importo, $paga){
            parent::____construct($num, $d, $importo){
            $this->pagamento= $paga;
        }
    }

    public function jsonSerialize(){
        return array_merge(parent::jsonSerialize(), ['pagamento' =>$this->pagamento]);
    }
}
?>