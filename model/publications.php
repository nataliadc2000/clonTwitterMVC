<?php 
 class Publications {
    protected $users_id;
    protected $text;

    public function __construct($users_id,$text){
        $this->users_id = $users_id;
        $this->text = $text;
    }
    
    public function __get($atributo){
        return $this->$atributo;
    }
        

 }
?>