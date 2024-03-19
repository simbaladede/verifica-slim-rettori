<?php
    include_once "Ordine.php";
    class OrdineOnline extends Ordine{
        protected $IP;
        protected $codice_di_autorizzazione;

        public function __construct($num, $d, $importo, $IP, $cod){
            parent::____construct($num, $d, $importo){
            $this->IP= $IP;
            $this->codice_di_autorizzazione= $cod;
        }
    }

    public function jsonSerialize(){
        return array_merge(parent::jsonSerialize(), ['IP' =>$this->IP, 'codice_di_autorizzazione' =>$this->codice_di_autorizzazione]);
    }
}
?>