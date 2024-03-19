<?php
require_once "Ordine.php";
require_once "OrdineFisico.php";
require_once "OrdineOnline.php";
require_once "Articolo.php";
class Negozio implements JsonSerializable{

    protected $nome;
    protected $telefono;
    protected $indirizzo;
    protected $url;
    protected $p_iva;

    protected $ordiniNegozio;
    protected $catalogo;


    function __construct($n, $tel, $ind, $sito, $iva){
        $this->nome =$n;
        $this->telefono= $tel;
        $this->indirizzo= $ind;
        $this->url= $sito;
        $this->p_iva= $iva;

        $this->ordiniNegozio= array();
        $this->catalogo= array();


    }

    public function aggiungiOrdine(Ordine $o){
        array_push($this->ordiniNegozio, $o);
    }

    public function aggiungiCatalogo(Articolo $o){
        array_push($this->catalogo, $o);
    }

    public function getCatalogo(){
        return $this->catalogo;
    }




    public getNome(){
        return $this->nome;
    }

    public getTelefono(){
        return $this->telefono;
    }

    public getinidirizzo(){
        return $this->indirizzo;
    }

    public getUrl(){
        return $this->url;
    }

    public getP_IVA(){
        return $this->p_iva;
    }



    public function jsonSerialize(){
        return [
            'nome' => $this->nome,
            'telefono' => $this->telefono,
            'indirizzo' => $this->indirizzo,
            'url' => $this->url,
            'p_iva' => $this->p_iva,

        ];
    }



    public function popola(){


        
        array_push($this->OrdiniNegozio, new Ordine(2, '01/03/2024', 523));

        $o = new OrdineOnline(1, '19/03/2024', 140, '144.214.65.30', 3467);
        $a1= new Articolo(23, 'maglia nike', '......', 50);
        $a2= new Articolo(32, 'scarpe adidas', '......', 70);
        $o->aggiungiArticolo($a1);
        $o->aggiungiArticolo($a2);
        
        array_push($this->OrdiniNegozio, $o);
        array_push($this->getCatalogo, $o); // dono gli articoli presenti in negozio

        $o2 = new OrdineFisico(2, '19/03/2024', 540, 'carta');
        $a1= new Articolo(23, 'maglia nike', '......', 50);
        $a2= new Articolo(32, 'scarpe adidas', '......', 70);
        $a3= new Articolo(32, 'scarpe gucci', '......', 400);

        $o2->aggiungiArticolo($a1);
        $o2->aggiungiArticolo($a2);
        $o2->aggiungiArticolo($a3);
        
        
        array_push($this->OrdiniNegozio, $o2);
        array_push($this->getCatalogo, $o2);





    }
}