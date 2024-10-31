<?php

namespace app\routes;

class Routes
{
  public static function get()
  {
    return [
      'get' => [
        // BASE VIEW ROUTES
        "/" => 'BaseController@home',

        "/about" => 'BaseController@about',
        "/blog-details" => 'BaseController@blogDetails',
        "/blog" => 'BaseController@blog',
        "/book-single-lider-autentico" => 'BaseController@bookSingleLiderAutentico',
        "/book-single-seu-potencial" => 'BaseController@bookSingleSeuPotencial',
        "/books" => 'BaseController@books',
        "/contact" => 'BaseController@contact',
        "/courses" => 'BaseController@courses',

        // BASE CONTROLLERS ROUTES
        "/blog/get/all" => 'BlogController@getAllBlogs',
        "/blog/get/one/[0-9]+" => 'BlogController@getBlogById',
      ],
      'post' => [
        // '/search/.*' => 'UserController@getUserById',
        '/user/search/[0-9]+' => 'UserController@getUserById',
        '/user/create' => 'UserController@createUser',
      ],
      'delete' => [
        '/user/delete/[0-9]+' => 'UserController@deleteUserById',
      ],
      'put' => [
        '/user/update/[0-9]+' => 'UserController@updateUser',
      ],
    ];
  }
};