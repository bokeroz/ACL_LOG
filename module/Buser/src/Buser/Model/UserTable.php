<?php

namespace Buser\Model;

use Zend\Db\Adapter\Adapter;
use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\Sql\Select as Select;

class UserTable extends AbstractTableGateway{
  


    protected $table  = 'user';
    
  
    public function __construct(Adapter $adapter) {
        $this->adapter = $adapter;
    }
    
   
    public function findId($username){
        $resultSet = $this->select(function (Select $select) use ($username){
                    $select->where(array('username' => $username));
                });
        if(count($resultSet)===1){
            $row = $resultSet->current();
            return $row; 
        } else return 0;
           
    }
  

    public function findGid($id){
        $resultSet = $this->select(function (Select $select) use ($id){
                    $select->columns(array('gid'));
                    $select->where(array('id' => $id));
                });
        if(count($resultSet)===1){
            $row = $resultSet->current()->gid;
            return $row; 
        } else return 0;
           
    }
    
    public function finduserInfo($id){
    

          $resultSet = $this->select(function (Select $select) use ($id){
                    $select->columns(array('display_name'));
                });
        if(count($resultSet)===1){
            $row = $resultSet->current();
            return $row; 
        } else return 0;
           
    }
}
