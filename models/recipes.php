<?php
class Recipe {
// we define 3 attributes
// they are public so that we can access them using $post->author directly
    //public $recipe_id;
    //public $recipe_name;
    //public $description;

    public function __construct($recipe_id, $recipe_name, $description, $instructions, $ingredients, $image_url) {
        $this->recipe_id      = $recipe_id;
        $this->recipe_name  = $recipe_name;
        $this->description = $description;
        $this->instructions = $instructions;
        $this->ingredients = $ingredients;
        $this->image_url = $image_url;
    }

    public static function all() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM recipes');


        foreach($req->fetchAll() as $recipe) {
            $list[] = new Recipe($recipe['recipe_id'], $recipe['recipe_name'], $recipe['description'], $recipe['instructions'], $recipe['ingredients']);
        }

        return $list;

    }


    public static function find($id) {
        $db = Db::getInstance();

        $id = intval($id);
        $sql = $db->prepare('SELECT * FROM recipes WHERE recipe_id = :id');
               $db->query('SELECT ingredients.ingredient_name FROM recipes INNER JOIN ingredient_index ON recipes.recipe_id = ingredient_index.recipe_id INNER JOIN ingredients ON ingredient_index.ingredient_id = ingredients.ingredient_id WHERE recipes.recipe_id = 1');

        $sql->execute(array('id' => $id));
        $recipe = $sql->fetch();

        return new Recipe($recipe['recipe_id'], $recipe['recipe_name'], $recipe['description'], $recipe['instructions'], $recipe['ingredients'], $recipe['image_url']);

    }

}

class RecipeIngredient {

    public function __construct($ingredient_name) {
        $this->ingredient_name = $ingredient_name;
    }

    public static function RecipeIngredients($id) {
        $list_ingredients = [];
        $db = Db::getInstance();
        $sql = $db->query("SELECT ingredients.ingredient_name FROM recipes INNER JOIN ingredient_index ON recipes.recipe_id = ingredient_index.recipe_id INNER JOIN ingredients ON ingredient_index.ingredient_id = ingredients.ingredient_id WHERE recipes.recipe_id = $id");
            //print_r($sql->fetchAll());

        return $sql->fetchAll();
    }

}



?>