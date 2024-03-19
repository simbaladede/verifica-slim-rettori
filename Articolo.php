<?php
    class Articolo implements JsonSerializable{
        protected $id;
        protected $nome;
        protected $descrizione;
        protected $prezzo_di_listino;

        
        public function __construct($id, $nome, $descrizione, $prezzo){

        $this->id =$id;
        $this->nome= $nome;
        $this->descrizione= $descrizione;
        $this->prezzo_di_listino= $prezzo;
       
        }

        public getId(){
            return $this->$id;
        }
    
        public getNome(){
            return $this->$nome;
        }
    
        public getDescrizione(){
            return $this->$descrizione;
        }

        public getPrezzoListino(){
            return $this->$prezzo_di_listino;
        }


    
        
    
    
        public function jsonSerialize(){
            return [
                'id' => $this->id,
                'nome' => $this->nome,
                'descrizione' => $this->descrizione,
                'prezzo_di_listino' => $this->prezzo_di_listino,
            ];
        }
    }
    
?>