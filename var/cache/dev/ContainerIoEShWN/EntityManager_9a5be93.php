<?php

namespace ContainerIoEShWN;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder24b9a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere26f0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesad1c0 = [
        
    ];

    public function getConnection()
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'getConnection', array(), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'getMetadataFactory', array(), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'getExpressionBuilder', array(), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'beginTransaction', array(), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'getCache', array(), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->getCache();
    }

    public function transactional($func)
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'transactional', array('func' => $func), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'wrapInTransaction', array('func' => $func), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'commit', array(), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->commit();
    }

    public function rollback()
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'rollback', array(), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'getClassMetadata', array('className' => $className), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'createQuery', array('dql' => $dql), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'createNamedQuery', array('name' => $name), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'createQueryBuilder', array(), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'flush', array('entity' => $entity), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'clear', array('entityName' => $entityName), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->clear($entityName);
    }

    public function close()
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'close', array(), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->close();
    }

    public function persist($entity)
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'persist', array('entity' => $entity), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'remove', array('entity' => $entity), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'refresh', array('entity' => $entity), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'detach', array('entity' => $entity), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'merge', array('entity' => $entity), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'getRepository', array('entityName' => $entityName), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'contains', array('entity' => $entity), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'getEventManager', array(), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'getConfiguration', array(), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'isOpen', array(), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'getUnitOfWork', array(), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'getProxyFactory', array(), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'initializeObject', array('obj' => $obj), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'getFilters', array(), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'isFiltersStateClean', array(), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'hasFilters', array(), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return $this->valueHolder24b9a->hasFilters();
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

        $instance->initializere26f0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder24b9a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder24b9a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder24b9a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, '__get', ['name' => $name], $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        if (isset(self::$publicPropertiesad1c0[$name])) {
            return $this->valueHolder24b9a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder24b9a;

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

        $targetObject = $this->valueHolder24b9a;
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
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder24b9a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder24b9a;
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
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, '__isset', array('name' => $name), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder24b9a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder24b9a;
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
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, '__unset', array('name' => $name), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder24b9a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder24b9a;
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
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, '__clone', array(), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        $this->valueHolder24b9a = clone $this->valueHolder24b9a;
    }

    public function __sleep()
    {
        $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, '__sleep', array(), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;

        return array('valueHolder24b9a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere26f0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere26f0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere26f0 && ($this->initializere26f0->__invoke($valueHolder24b9a, $this, 'initializeProxy', array(), $this->initializere26f0) || 1) && $this->valueHolder24b9a = $valueHolder24b9a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder24b9a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder24b9a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
