<?php  
class publicationUser {

    protected $id;
    protected $userId;
    protected $text;
    protected $createDate;
    protected $username;
    protected $mail;
    protected $pass;
   

    public function __construct($userId,$text,$createDate,$username,$mail,$pass){
        $this->userId = $userId;
        $this->text = $text;
        $this->createDate = $createDate;
        $this->username = $username;
        $this->mail = $mail;
        $this->pass = $pass;
    }
    
    // public function __get($atributo){
    //     return $this->atributo;
    // }
        
}
?>