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

        $data['title'] = service('settings')->get('SiteAttr.address');;
        $data['recipes'] = $recipeModel->findAll();

        return view('default/recipe_home', $data);

        // if (auth()->loggedIn()) 
        // {
            
        // }

        // return redirect()->to('/login');

        
    }

    public function enak()
    {
        service('settings')->set('App.siteName', 'My Great Site');
        echo 'saved';
    }

    

}
