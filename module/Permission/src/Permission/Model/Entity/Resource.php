<?php


namespace Permission\Model\Entity;

class Resource{

    /**
     * @var int              
     */
      protected $id;  

    /**
     * @var int              
     */
      protected $idparent;  

    /**
     * @var int              
     */
      protected $idtype;  

    /**
     * @var varchar              
     */
      protected $nombre;  

    /**
     * @var varchar              
     */
      protected $resource;  

    /**
     * @var text              
     */
      protected $descripcion;  

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
     * Set idparent
     *
     * @param int $idparent
     * @return type                   
     */            
	public function setIdparent($idparent){
		$this->idparent = (int) $idparent;
	}
    /**
     * Get idparent
     *
     * @return int
     */          
	public function getIdparent(){
		return $this->idparent;
	}
    /**
     * Set idtype
     *
     * @param int $idtype
     * @return type                   
     */            
	public function setIdtype($idtype){
		$this->idtype = (int) $idtype;
	}
    /**
     * Get idtype
     *
     * @return int
     */          
	public function getIdtype(){
		return $this->idtype;
	}
    /**
     * Set nombre
     *
     * @param varchar $nombre
     * @return type                   
     */            
	public function setNombre($nombre){
		$this->nombre = (string) $nombre;
	}
    /**
     * Get nombre
     *
     * @return varchar
     */          
	public function getNombre(){
		return $this->nombre;
	}
    /**
     * Set resource
     *
     * @param varchar $resource
     * @return type                   
     */            
	public function setResource($resource){
		$this->resource = (string) $resource;
	}
    /**
     * Get resource
     *
     * @return varchar
     */          
	public function getResource(){
		return $this->resource;
	}
    /**
     * Set descripcion
     *
     * @param text $descripcion
     * @return type                   
     */            
	public function setDescripcion($descripcion){
		$this->descripcion = (string) $descripcion;
	}
    /**
     * Get descripcion
     *
     * @return text
     */          
	public function getDescripcion(){
		return $this->descripcion;
	}
}

?>