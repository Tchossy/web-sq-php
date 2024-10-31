<?php

namespace app\controllers;

require_once(__DIR__ . '/../models/Blog.php');
require_once(__DIR__ . '/../utils/Response.php');
require_once(__DIR__ . '/../config/Database.php');

use app\models\Blog;
use app\utils\Response;
use Database;
use PDO;

class BlogController
{
  private $db;
  private $blogModel;

  public $lastPart;

  public function __construct()
  {
    $currentURL = $_SERVER['REQUEST_URI'];

    // Obtém a última parte da URI
    $parts = explode('/', $currentURL);

    $this->lastPart = end($parts);

    $database = new Database();
    $this->db = $database->getConnection();
    $this->blogModel = new Blog($this->db);
  }

  public function index()
  {
    echo "Blog";
  }

  public function getAllBlogs()
  {
    $result = $this->blogModel->getAll();
    $num = $result->rowCount();

    if ($num > 0) {
      $blogs_arr = array();
      $blogs_arr['data'] = array();

      while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $blog_item = array(
          'id' => $id,
          'author_news' => $author_news,
          'images_news' => $images_news,
          'category_news' => $category_news,
          'title_news' => $title_news,
          'description_news' => $description_news,
          'epigraph_news' => $epigraph_news,
          'author_epigraph_news' => $author_epigraph_news,
          'date_news' => $date_news,
          'date_create' => $date_create
        );

        array_push($blogs_arr['data'], $blog_item);
      }

      Response::send(200, $blogs_arr);
    } else {
      Response::send(404, array('message' => 'Nenhum usuário encontrado.'));
    }
  }

  public function getBlogById()
  {
    $id = $this->lastPart;

    $result = $this->blogModel->getById($id);
    $num = $result->rowCount();

    if ($num > 0) {
      $row = $result->fetch(PDO::FETCH_ASSOC);
      extract($row);
      $blog_item = array(
        'id' => $id,
        'author_news' => $author_news,
        'images_news' => $images_news,
        'category_news' => $category_news,
        'title_news' => $title_news,
        'description_news' => $description_news,
        'epigraph_news' => $epigraph_news,
        'author_epigraph_news' => $author_epigraph_news,
        'date_news' => $date_news,
        'date_create' => $date_create
      );

      Response::send(200, $blog_item);
    } else {
      Response::send(404, array('message' => 'Usuário não encontrado.'));
    }
  }

  // 404
  public function notFound()
  {
    echo "404";
  }
}
