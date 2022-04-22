<?php
class mainModel extends Model{
    public function __construct(){
        parent::__construct();
    }
    public function Insert($data){
      try{
        $query = $this->db->connect()->prepare(
                  "INSERT INTO post(title) 
                   VALUES($data)"
                );
        return true;
        
      }catch(PDOException $e){
        return false;
      }
    }
    public function upDate($data){
    }
    public function Delete($data){
    }
    public function get(){
    }
}
?>