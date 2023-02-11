<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RecipeModel;

class RecipeController extends BaseController
{
    public function index()
    {
        $recipeModel = model(RecipeModel::class);
        $data['user'] = auth()->user();            

        $data['title'] = 'Recipe List';
        $data['recipes'] = $recipeModel->findAll();

        return view('default/recipe_home', $data);

        // if (auth()->loggedIn()) 
        // {
            
        // }

        // return redirect()->to('/login');

        
    }

    

}
