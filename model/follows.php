<?php 
 class Follows {
    protected $users_id;
    protected $usersToFollowID;

    public function __construct($users_id,$usersToFollowID){
        $this->users_id = $users_id;
        $this->usersToFollowID = $usersToFollowID;
    }
    
    public function __get($atributo){
        return $this->$atributo;
    } 

 }
?>