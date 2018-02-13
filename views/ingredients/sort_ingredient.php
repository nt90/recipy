These recipes you can make with the given ingredients
join

<?php foreach($filtered_ingredients as $filter_ingredient): ?>
    <ul>
        <li>
            <?php echo ($filter_ingredient['recipe_name']);?>
            <?php echo ($filter_ingredient['ingredient_name']);?>
            <a href='?controller=recipes&action=show&recipe_id=<?php echo ($filter_ingredient['recipe_id']);?>'>See recipe</a>
        </li>
    </ul>
<?php endforeach;?>

