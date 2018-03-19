<?php
class IngredientsController {
    public function index() {
        // we store all the posts in a variable
        $ingredients = Ingredient::all();
        $ingredient_new = Ingredient::NewIngredient();
        $ingredients_all = Ingredient::ListIngredientsAll();
        require_once('views/ingredients/index.php');
    }

    public function show()
    {
        //$sort_ingredients = sortIngredient::showIngredient();
        $filtered_ingredients = sortIngredient::filterIngredient();
        $count_ingredients = sortIngredient::countIngredients();

        require_once('views/ingredients/sort_ingredient.php');


        //echo count($filtered_ingredients);


    }


}
?>