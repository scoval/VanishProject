<?php

namespace Hillel\Controllers;

class CategoryController
{
    public function index()
    {
        exit("index");
    }

    public function categories()
    {
       exit('categories');
    }

    public function category($id)
    {
        exit('category - ' . $id);
    }
}