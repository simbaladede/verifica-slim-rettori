<?php
    class Ordine implements JsonSerializable{
        protected $num_Ordine;
        protected $data;
        protected $importo_totale;

        protected $articoli_venduti;

        public function __construct($num, $d, $importo){

        $this->num_ordine =$num;
        $this->data= $d;
        $this->importo_totale= $importo;
       

        $this->articoli_venduti= array();
        }

        public function aggiungiArticolo($a){
            array_push($this->articoli_venduti, $a);
        }
    
        public getNum(){
            return $this->num_Ordine;
        }
    
        public getData(){
            return $this->data;
        }
    
        public getImportoTot(){
            return $this->importo_totale;
        }
    
        
    
    
        public function jsonSerialize(){
            return [
                'num_ordine' => $this->num_ordine,
                'data' => $this->data,
                'importo_totale' => $this->importo_totale
    
            ];
        }
    }
?>