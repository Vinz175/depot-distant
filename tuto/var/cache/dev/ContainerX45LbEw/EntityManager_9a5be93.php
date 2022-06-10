<?php

namespace ContainerX45LbEw;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3dfe5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer37bff = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb83fc = [
        
    ];

    public function getConnection()
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'getConnection', array(), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'getMetadataFactory', array(), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'getExpressionBuilder', array(), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'beginTransaction', array(), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'getCache', array(), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->getCache();
    }

    public function transactional($func)
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'transactional', array('func' => $func), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'wrapInTransaction', array('func' => $func), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'commit', array(), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->commit();
    }

    public function rollback()
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'rollback', array(), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'getClassMetadata', array('className' => $className), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'createQuery', array('dql' => $dql), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'createNamedQuery', array('name' => $name), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'createQueryBuilder', array(), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'flush', array('entity' => $entity), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'clear', array('entityName' => $entityName), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->clear($entityName);
    }

    public function close()
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'close', array(), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->close();
    }

    public function persist($entity)
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'persist', array('entity' => $entity), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'remove', array('entity' => $entity), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'refresh', array('entity' => $entity), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'detach', array('entity' => $entity), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'merge', array('entity' => $entity), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'getRepository', array('entityName' => $entityName), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'contains', array('entity' => $entity), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'getEventManager', array(), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'getConfiguration', array(), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'isOpen', array(), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'getUnitOfWork', array(), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'getProxyFactory', array(), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'initializeObject', array('obj' => $obj), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'getFilters', array(), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'isFiltersStateClean', array(), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'hasFilters', array(), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return $this->valueHolder3dfe5->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer37bff = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3dfe5) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3dfe5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3dfe5->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, '__get', ['name' => $name], $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        if (isset(self::$publicPropertiesb83fc[$name])) {
            return $this->valueHolder3dfe5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3dfe5;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3dfe5;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3dfe5;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3dfe5;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, '__isset', array('name' => $name), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3dfe5;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3dfe5;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, '__unset', array('name' => $name), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3dfe5;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3dfe5;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, '__clone', array(), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        $this->valueHolder3dfe5 = clone $this->valueHolder3dfe5;
    }

    public function __sleep()
    {
        $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, '__sleep', array(), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;

        return array('valueHolder3dfe5');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer37bff = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer37bff;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer37bff && ($this->initializer37bff->__invoke($valueHolder3dfe5, $this, 'initializeProxy', array(), $this->initializer37bff) || 1) && $this->valueHolder3dfe5 = $valueHolder3dfe5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3dfe5;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3dfe5;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
