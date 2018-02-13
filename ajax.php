<?php
$mysqli = new mysqli('localhost','root','','recipy');

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT recipes.recipe_name FROM recipes INNER JOIN ingredient_index ON recipes.recipe_id = ingredient_index.recipe_id INNER JOIN ingredients ON ingredient_index.ingredient_id = ingredients.ingredient_id";
extract($_POST);
if(isset($sortRecipe))
    $query.=" WHERE ingredients.ingredient_name IN ('".implode(',', $sortRecipe)."')";

if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        echo $row['recipe_name'];
    }

}
/* close connection */
$mysqli->close();
?>


