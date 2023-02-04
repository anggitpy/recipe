<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Recipe;

class RecipeController extends BaseController
{
    public function index()
    {
        $recipe = model(Recipe::class);
        echo var_dump($recipe->findAll());
    }
}
