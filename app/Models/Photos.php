<?php

namespace photo\Models;
use photo\Utils\Database;
use \PDO;

class Photos extends CoreModel
{
private $picture;
private $category_id;



/**
 * Get the value of category_id
 */ 
public function getCategory_id()
{
return $this->category_id;
}

/**
 * Set the value of category_id
 *
 * @return  self
 */ 
public function setCategory_id($category_id)
{
$this->category_id = $category_id;

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

public function findByCategory($id)
{
    $pdo = Database::getPDO();
    $sql = "
    SELECT * FROM `photos` WHERE `photos`.`category_id` = $id ";
    $pdoStatement = $pdo->query($sql);

    $pictureList = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'photo\Models\Photos');
    
    return $pictureList;
}
}