<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RecipeModel;

class RecipeController extends BaseController
{
    public function index()
    {
        $recipeModel = model(RecipeModel::class);
        $data['title'] = 'Recipe List';
        $data['recipes'] = $recipeModel->findAll();

        return view('default/recipe_home', $data);
    }
}
