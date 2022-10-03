<?php
namespace Tuezy\Container;

class Collection implements CollectionContract {

    protected $items;

    public function __construct($items = [])
    {
        $this->items = $items;
    }

    public function get(string $id)
    {
        return $this->offsetGet($id);
    }

    public function has(string $id)
    {
        return $this->offsetExists($id);
    }

    public function offsetExists(mixed $offset)
    {
       return isset($this->items[$offset]);
    }

    public function offsetGet(mixed $offset)
    {
        return $this->items[$offset];
    }

    public function offsetSet(mixed $offset, mixed $value)
    {
        $this->items[$offset] = $value;
    }

    public function offsetUnset(mixed $offset)
    {
        unset($this->items[$offset]);
    }
}