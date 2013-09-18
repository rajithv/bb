<?php

namespace Zhvillues\DatabaseTestBundle\Entity\Test;

use Doctrine\ORM\Mapping as ORM;

/**
 * TestObject
 */
class TestObject
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $number;

    /**
     * @var string
     */
    private $name;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set number
     *
     * @param float $number
     * @return TestObject
     */
    public function setNumber($number)
    {
        $this->number = $number;
    
        return $this;
    }

    /**
     * Get number
     *
     * @return float 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return TestObject
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
}
