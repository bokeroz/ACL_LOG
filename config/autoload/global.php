<?php
define('ROOT_PATH', dirname('..'));
return array(
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
            'Zend\Cache\StorageFactory' => function() {
                $cache = \Zend\Cache\StorageFactory::factory(array(
                'adapter' => 'filesystem',
                'plugins' => array(
                    'exception_handler' => array('throw_exceptions' => false),
                    'serializer'
                    )
                ));
                $cache->setOptions(array(
                    'ttl'=>720000,
                    'cache_dir' => ROOT_PATH.'/data/cache'));    
                return $cache;
            }      
        ),
        'abstract_factories' => array(
            'Zend\Db\Adapter\AdapterAbstractServiceFactory',
        ),
        'aliases' => array(
            'db' => 'Zend\Db\Adapter\Adapter',
            'cache' => 'Zend\Cache\StorageFactory',
        ),
    ),
    'db' => array(
                'driver' => 'Pdo',
                'dsn' => 'mysql:dbname=autacl;hostname=localhost',
                'username' => 'root',
                'password' => 'eduardo',
                'driver_options' => array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
                ), 
                'adapters' => array(
                    'db1' => array(
                       'driver' => 'Pdo',
                       'dsn' => 'mysql:dbname=autacl;host=localhost',
                       'username' => 'root',
                        'password' => 'eduardo',
                       'driver_options'  => array(
                            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
                        ),
                    ),  
                ),    
            ),

);
