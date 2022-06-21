<?php

namespace ContainerEwTiVzs;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4c319 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd1cce = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties72db8 = [
        
    ];

    public function getConnection()
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'getConnection', array(), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'getMetadataFactory', array(), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'getExpressionBuilder', array(), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'beginTransaction', array(), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'getCache', array(), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'transactional', array('func' => $func), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'commit', array(), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->commit();
    }

    public function rollback()
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'rollback', array(), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'getClassMetadata', array('className' => $className), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'createQuery', array('dql' => $dql), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'createNamedQuery', array('name' => $name), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'createQueryBuilder', array(), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'flush', array('entity' => $entity), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'clear', array('entityName' => $entityName), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->clear($entityName);
    }

    public function close()
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'close', array(), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->close();
    }

    public function persist($entity)
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'persist', array('entity' => $entity), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'remove', array('entity' => $entity), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'refresh', array('entity' => $entity), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'detach', array('entity' => $entity), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'merge', array('entity' => $entity), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'contains', array('entity' => $entity), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'getEventManager', array(), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'getConfiguration', array(), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'isOpen', array(), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'getUnitOfWork', array(), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'getProxyFactory', array(), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'initializeObject', array('obj' => $obj), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'getFilters', array(), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'isFiltersStateClean', array(), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'hasFilters', array(), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return $this->valueHolder4c319->hasFilters();
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

        $instance->initializerd1cce = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4c319) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4c319 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4c319->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, '__get', ['name' => $name], $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        if (isset(self::$publicProperties72db8[$name])) {
            return $this->valueHolder4c319->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4c319;

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

        $targetObject = $this->valueHolder4c319;
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
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4c319;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4c319;
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
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, '__isset', array('name' => $name), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4c319;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4c319;
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
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, '__unset', array('name' => $name), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4c319;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4c319;
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
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, '__clone', array(), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        $this->valueHolder4c319 = clone $this->valueHolder4c319;
    }

    public function __sleep()
    {
        $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, '__sleep', array(), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;

        return array('valueHolder4c319');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd1cce = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd1cce;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd1cce && ($this->initializerd1cce->__invoke($valueHolder4c319, $this, 'initializeProxy', array(), $this->initializerd1cce) || 1) && $this->valueHolder4c319 = $valueHolder4c319;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4c319;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4c319;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
