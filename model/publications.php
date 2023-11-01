<?php 
 class Publications {
    protected $usersId;
    protected $text;

    public function __construct($usersId,$text){
        $this->usersId = $usersId;
        $this->text = $text;
    }
    
    public function __get($atributo){
        return $this->$atributo;
    }
        

 }
?>