<?php

namespace app\models;

class Blog
{
  private $conn;
  private $table = 'news';

  public $id;
  public $author_news;
  public $images_news;
  public $category_news;
  public $title_news;
  public $description_news;
  public $epigraph_news;
  public $author_epigraph_news;
  public $date_news;
  public $date_create;

  public function __construct($db)
  {
    $this->conn = $db;
  }

  public function getAll()
  {
    $query = 'SELECT * FROM ' . $this->table . ' ORDER BY id DESC';
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt;
  }

  public function getById($id)
  {
    $query = 'SELECT * FROM ' . $this->table . ' WHERE id = :id';
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt;
  }
}
