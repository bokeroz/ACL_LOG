<?php

namespace Permission\Model\Entity;

class Permissions{

    /**
     * @var int              
     */
      protected $id;  

    /**
     * @var int              
     */
      protected $idrole;  

    /**
     * @var int              
     */
      protected $idresource;  

    /**
     * @var enum              
     */
      protected $permission;  

    /**
     * Set id
     *
     * @param int $id
     * @return type                   
     */            
	public function setId($id){
		$this->id = (int) $id;
	}
    /**
     * Get id
     *
     * @return int
     */          
	public function getId(){
		return $this->id;
	}
    /**
     * Set idrole
     *
     * @param int $idrole
     * @return type                   
     */            
	public function setIdrole($idrole){
		$this->idrole = (int) $idrole;
	}
    /**
     * Get idrole
     *
     * @return int
     */          
	public function getIdrole(){
		return $this->idrole;
	}
    /**
     * Set idresource
     *
     * @param int $idresource
     * @return type                   
     */            
	public function setIdresource($idresource){
		$this->idresource = (int) $idresource;
	}
    /**
     * Get idresource
     *
     * @return int
     */          
	public function getIdresource(){
		return $this->idresource;
	}
    /**
     * Set permission
     *
     * @param enum $permission
     * @return type                   
     */            
	public function setPermission($permission){
		$this->permission = (string) $permission;
	}
    /**
     * Get permission
     *
     * @return enum
     */          
	public function getPermission(){
		return $this->permission;
	}
}

?>