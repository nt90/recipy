<?php
class RecipesController {
    public function index() {
        $recipes = Recipe::all();
        require_once('views/recipes/index.php');
    }

    public function show() {
        // we expect a url of form ?controller=posts&action=show&id=x
        // without an id we just redirect to the error page as we need the post id to find it in the database
        if (!isset($_GET['recipe_id']))
            return call('pages', 'error');

        // we use the given id to get the right post
        $recipe = Recipe::find($_GET['recipe_id']);
        $recipe_ingredients = RecipeIngredient::RecipeIngredients($_GET['recipe_id']);
//print_r($recipe);
        require_once('views/recipes/show.php');
    }
}
?>
