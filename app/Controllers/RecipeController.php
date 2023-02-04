<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RecipeModel;

class RecipeController extends BaseController
{
    public function index()
    {
        $recipeModel = model(RecipeModel::class);
        // echo var_dump($recipe->findAll());
        $recipe = new \App\Entities\Recipe;
        $recipe->recipe_name = 'Bakso Wonogiri';
        $recipe->recipe_description = 'A comfort food. It is basically a meatball soup served with noodles and vermicelli';
        $recipe->country_id = 1;
        $recipeModel->save($recipe);
    }
}
