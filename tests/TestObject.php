<?php

namespace Freshcells\StateInspector\Test;

class TestObject
{

    private $prop;
    private $dateTime;
    private $collection;

    /**
     * TestObject constructor.
     * @param string $prop
     * @param \DateTime $dateTime
     * @param array $collection
     */
    public function __construct(string $prop, \DateTime $dateTime, array $collection = [])
    {
        $this->prop       = $prop;
        $this->dateTime   = $dateTime;
        $this->collection = $collection;
    }

    /**
     * @return mixed
     */
    public function getProp()
    {
        return $this->prop;
    }

    /**
     * @return \DateTime
     */
    public function getDateTime(): \DateTime
    {
        return $this->dateTime;
    }

    /**
     * @return array
     */
    public function getCollection(): array
    {
        return $this->collection;
    }
}
