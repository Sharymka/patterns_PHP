<?php

namespace Model\Repository;

use exceptions\EmptyCacheException;

class IdentityMap
{
    private $identityMap = [];
    public  function add(IDomainObject $obj)
    {
        $key = $this->getGlobalKey(get_class($obj), $obj->getId());
        $this->identityMap[$key] = $obj;
    }
    public function get(string $classname, int|array $ids)
    {
        $products = [];
        foreach ($ids as $id) {
            $key = $this->getGlobalKey($classname, $id);
            if (isset($this->identityMap[$key])) {
                $products[$id] =  $this->identityMap[$key];
            }
        }
        if(count($products) == 1){
            return $products[0];
        }
        if(count($products) == 0){
            return null;
        }
        return $products;
    }
    private function getGlobalKey(string $classname, int $id)
    {
        return sprintf('%s.%d', $classname, $id);
    }
}
