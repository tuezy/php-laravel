<?php
namespace Tuezy\Core\Contract;

interface Repository{
    public function find($id): Entity;
    public function all();
    public function delete($id);
    public function deleteAll($ids);
    public function update(Entity $entity);
}