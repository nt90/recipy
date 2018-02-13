<div id="wpr-recipy">
  <div id="cnr-recipy">
     <article>
        <img class="img-responsive" src="http://www.beatosvirtuve.lt/wp-content/uploads/2015/09/Beatos-virtuve_vietnamas-614x370.jpg">
        <span>
           <h1><?php echo $recipe->recipe_name; ?></h1>
         <p><?php echo $recipe->description; ?></p>

         <p><?php echo $recipe->instructions;?></p>



         <?php foreach ($recipe_ingredients as $ingredient): ?>
          <?php echo ($ingredient['ingredient_name']);?>
         <?php endforeach; ?>
        </span>
     </article>
  </div>
</div>






