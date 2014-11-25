<?php


namespace Permission\Model;
                  
use Zend\Db\Adapter\Adapter;
use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\Sql\Select as Select;
use Cspermission\Model\Entity\Permissions as Permissions;
                    
class PermissionsTable extends AbstractTableGateway{
   
    protected $table  = 'permissions';
    
    public function __construct(Adapter $adapter) {
        $this->adapter = $adapter;
    }
    
    public function findById($id) {
        $resultSet = $this->select(function (Select $select) use($id){
                    $select->where(array('id_role' => (int) $id));
                    $select->order('id_resource ASC');
                });
                
        $entities = array();
        foreach ($resultSet as $row) { 
            $entity = new Permissions();            
            $entity->setIdrole($row->id_role);
            $entity->setIdresource($row->id_resource);
            $entity->setPermission($row->permission);
            $map= array(
                'id_role'=>$entity->getIdrole(),
                'id_resource'=>$entity->getIdresource(),
                'permission'=>$entity->getPermission()
            ); 
            $entities[] = $map;
        }
        return $entities;
    }
}