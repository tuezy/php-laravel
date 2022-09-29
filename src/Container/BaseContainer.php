<?php
namespace Tuezy\Container;

abstract class BaseContainer implements ContainerContract , \ArrayAccess{

    protected Storage $alias;

    protected Storage $binding;

    protected Storage $instances;

    public static $instance = null;

    public const TYPE_INSTANCE = 'instances';

    public const TYPE_BINDING = 'binding';

    public const TYPE_ALIAS = 'alias';

    public function __construct()
    {
        $this->alias = new StorageAlias();

        $this->binding = new StorageBinding();

        $this->instances = new StorageInstances();

    }

    public static function getInstance(){
        if(is_null(static::$instance))
            static::$instance = new static;
        return static::$instance;
    }

    public function alias(string $key, string $value){
        $this->alias[$key] = $value;
    }

    public function bind(string $key, $value){
        $this->binding[$key] = $value;
    }

    public function instance(string $key, $value){
        $this->instances[$key] = $value;
    }

    public function detectStorage($pos){
        return [
            1   =>  self::TYPE_INSTANCE,
            2   =>  self::TYPE_BINDING,
            3   =>  [self::TYPE_INSTANCE, self::TYPE_BINDING],
            4   =>  self::TYPE_ALIAS,
            5   =>  [self::TYPE_INSTANCE, self::TYPE_ALIAS],
            6   =>  [self::TYPE_BINDING, self::TYPE_ALIAS],
            7   =>  $this->containAllType()
        ][$pos] ?? null;
    }

    public function offsetExists($offset)
    {
        return $this->instances->has($offset) + $this->binding->has($offset) + $this->alias->has($offset);
    }

    public function offsetGet($offset)
    {
        $pos = $this->offsetExists($offset);

        $typeOfStorage = $this->detectStorage($pos);

        if(!$typeOfStorage) return null;

        if(is_array($typeOfStorage)){
            $result = [];
            foreach ($typeOfStorage as $type){
                $result[$type] = $this->{$type}->get($offset);
            }
            return $this->priorityOffsetGet($result);
        }
        return $this->{$typeOfStorage}->get($offset);
    }

    public function offsetSet($offset, $value)
    {
        if(is_callable($value) || is_object($value))
            $this->instance($offset, $value);
        if(is_string($value))
            $this->alias($offset, $value);
        else
            $this->bind($offset, $value);
    }

    public function offsetUnset($offset)
    {
        unset($this->instances[$offset]);
        unset($this->alias[$offset]);
        unset($this->binding[$offset]);
    }

    /**
     * get item base on priority of type : instance -> binding -> alias
     * @param $result
     * @return mixed
     */
    private function priorityOffsetGet($result){
        if(isset($result[self::TYPE_INSTANCE]))
            return $result[self::TYPE_INSTANCE];
        if(isset($result[self::TYPE_BINDING]))
            return $result[self::TYPE_BINDING];
        return $result[self::TYPE_ALIAS];
    }

    private function containAllType(){
        return [self::TYPE_INSTANCE, self::TYPE_BINDING, self::TYPE_ALIAS];
    }

    public function get(string $id)
    {
        return $this->offsetGet($id);
    }

    public function has(string $id)
    {
        return $this->offsetExists($id);
    }

    public function __get($name)
    {
        return $this->get($name);
    }
    public function __set($name, $value)
    {
        $this->offsetSet($name, $value);
    }
    public function __isset($name)
    {
        return $this->has($name);
    }
    public function __unset($name)
    {
        $this->offsetUnset($name);
    }
}