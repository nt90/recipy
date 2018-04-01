<?php
class Ingredient {
// we define 3 attributes
// they are public so that we can access them using $post->author directly
    public $ingredient_id;
    public $ingredient_name;
    public $ingredient_image;

    public function __construct($ingredient_id, $ingredient_name, $ingredient_image) {
        $this->ingredient_id      = $ingredient_id;
        $this->name    = $ingredient_name;
        $this->ingredient_image    = $ingredient_image;
    }
//Temp ingredients
    public static function all() {
        $list = [];
        $db = Db::getInstance();


        $req = $db->query('SELECT * FROM temp_ingredients');

// we create a list of Post objects from the database results
        foreach($req->fetchAll() as $ingredient) {
            $list[] = new Ingredient($ingredient['ingredient_id'], $ingredient['ingredient_name'], $ingredient['ingredient_image']);
        }

        return $list;

    }

    public static function NewIngredient() {
        $db = Db::getInstance();
        if(isset($_POST['submit'])) {
            $ingredientNew = ($_POST['ingredientNew']);
            echo($ingredientNew);

            $query = $db->query("INSERT INTO temp_ingredients(ingredient_id,ingredient_name) SELECT ingredient_id, ingredient_name FROM ingredients WHERE ingredient_name LIKE '$ingredientNew' ");
        }

        // return $query->fetchAll();
    }

    //List of all ingredients

    public static function ListIngredientsAll() {
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM ingredients ORDER BY RAND() LIMIT 8');

        foreach($req->fetchAll() as $ingredient) {
            $list[] = new Ingredient($ingredient['ingredient_id'], $ingredient['ingredient_name'], $ingredient['ingredient_image']);
        }

        return $list;

    }
}

class sortIngredient {
    public static function showIngredient() {

        $list3 = [];
        $db = Db::getInstance();
        extract($_POST);
        if(isset($sortRecipe))


        $query = $db->query("SELECT recipes.recipe_id, recipes.recipe_name, recipes.image_url, ingredients.ingredient_name, recipes.count_ingredient FROM recipes INNER JOIN ingredient_index ON recipes.recipe_id = ingredient_index.recipe_id INNER JOIN ingredients ON ingredient_index.ingredient_id = ingredients.ingredient_id WHERE ingredients.ingredient_name IN('".implode("','",$sortRecipe)."') ");
        return $query->fetchAll();

    }


    public static function filterIngredient() {

        //we need to merge these arrays and filter recipe_id to count-ingredients


        $sort_ingredients = self::showIngredient();
        $count_ingredients = self::countIngredients();

        //make a new array
        $filtered_ingredients = array();

        foreach ($sort_ingredients as $key => $value){

            extract($_POST);
            if (isset($sortRecipe)) ;

            //We need to count if the sortRecipe array is equal to amount of ingredients the recipe has
            //How many ingredients do you need to match?
            //if(count($sortRecipe) >= 2 ) {
                if (array_key_exists($value['recipe_name'], $filtered_ingredients)) {

                    $filtered_ingredients[$value['recipe_name']]['ingredient_name'] .= ', ' . $value['ingredient_name'];
                } else {
                    $filtered_ingredients[$value['recipe_name']] = array('recipe_id' => $value['recipe_id'], 'recipe_name' => $value['recipe_name'], 'ingredient_name' => $value['ingredient_name'],'image_url' => $value['image_url']);
                }
            //}
        }
        return array_values($filtered_ingredients);
    }

    public static function countIngredients() {
        //Now we need to count how many ingredients there are in each recipe
        //So make an Empty array, and name it whatever
        $count_ingredients = [];
        $db = Db::getInstance();

        $query= $db->query("SELECT recipes.recipe_id,recipes.recipe_name, ingredients.ingredient_name, COUNT(ingredients.ingredient_name) AS  count_ingredients FROM recipes INNER JOIN ingredient_index ON recipes.recipe_id = ingredient_index.recipe_id INNER JOIN ingredients ON ingredient_index.ingredient_id = ingredients.ingredient_id GROUP  BY recipes.recipe_name");
        return $query->fetchAll();
    }

}
?>

