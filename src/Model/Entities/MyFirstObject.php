<?php

namespace WebDevelopmentQuizz\Model\Entities;

/**
 * Created by PhpStorm.
 * User: Xavier
 * Date: 11/08/2016
 * Time: 17:08
 */
class MyFirstObject
{
    /**
     * @var string
     */
    private $name;
    
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName() :string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }
    
    

}