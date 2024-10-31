<?php

namespace app\controllers;

use app\controllers\BaseTemplateController;

class BaseController
{
  public function home()
  {
    return BaseTemplateController::view("home");
  }
  public function about()
  {
    return BaseTemplateController::view("about");
  }
  public function blogDetails()
  {
    return BaseTemplateController::view("blog-details");
  }
  public function blog()
  {
    return BaseTemplateController::view("blog");
  }
  public function bookSingleLiderAutentico()
  {
    return BaseTemplateController::view("book-single-lider-autentico");
  }
  public function bookSingleSeuPotencial()
  {
    return BaseTemplateController::view("book-single-seu-potencial");
  }
  public function books()
  {
    return BaseTemplateController::view("books");
  }
  public function contact()
  {
    return BaseTemplateController::view("contact");
  }
  public function courses()
  {
    return BaseTemplateController::view("courses");
  }

  // 404
  public function notFound()
  {
    echo "404";
  }
}