<?php

namespace photo\Models;

use photo\Utils\Database;
use \PDO;

class Category extends CoreModel {
    private $name;
    private $position;
    private $picture;

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of position
     */ 
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set the value of position
     *
     * @return  self
     */ 
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get the value of picture
     */ 
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     *
     * @return  self
     */ 
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }
    public static function findAll()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `category` ORDER BY `position` LIMIT 5';
        $pdoStatement = $pdo->query($sql);
        $categoryList = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'photo\Models\Category');
        
        return $categoryList;
    }
}