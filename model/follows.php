<?php 
 class Follows {
    protected $usersId;
    protected $usersToFollowID;

    public function __construct($usersId,$usersToFollowID){
        $this->usersId = $usersId;
        $this->usersToFollowID = $usersToFollowID;
    }
    
    public function __get($atributo){
        return $this->atributo;
    }
        

 }
?>