<?php

namespace app\controllers;

use app\controllers\AdminTemplateController;

class AdminController
{
  public function home()
  {
    return AdminTemplateController::view("home");
  }

  // 404
  public function notFound()
  {
    echo "404";
  }
}
