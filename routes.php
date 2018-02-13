<?php
function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
        case 'pages':
            $controller = new PagesController();
            break;
        case 'posts':
            // we need the model to query the database later in the controller
            require_once('models/post.php');
            $controller = new PostsController();
            break;
        case 'ingredients':
            // Add a model to query the database later in the controller
            require_once('models/ingredients.php');
            $controller = new IngredientsController();
            break;

        case 'recipes':
            // Add a model to query the database later in the controller
            require_once('models/recipes.php');
            $controller = new RecipesController();
            break;
    }

    $controller->{ $action }();
}

// we're adding an entry for the new controller and its actions
$controllers = array('pages' => ['home', 'error'],
                     'posts' => ['index', 'show'],
                     'ingredients' => ['index', 'show'],
                     'recipes' => ['index', 'show']);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('pages', 'error');
    }
} else {
    call('pages', 'error');
}
?>