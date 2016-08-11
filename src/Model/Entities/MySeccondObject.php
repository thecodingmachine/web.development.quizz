<?php

namespace WebDevelopmentQuizz\Model\Entities;

/**
 * Created by PhpStorm.
 * User: Xavier
 * Date: 11/08/2016
 * Time: 17:08
 */
class MySeccondObject
{
    /**
     * @var MyFirstObject
     */
    private $firstObject;
    
    public function __construct(MyFirstObject $firstObject)
    {
        $this->$firstObject = $firstObject;
    }

    /**
     * @return MyFirstObject
     */
    public function getFirstObject():MyFirstObject
    {
        return $this->firstObject;
    }

    /**
     * @param MyFirstObject $firstObject
     */
    public function setFirstObject(MyFirstObject $firstObject)
    {
        $this->firstObject = $firstObject;
    }

}