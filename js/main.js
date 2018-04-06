$(document).ready(function() {

 $(document).on('change','.filter_ingredients',function(){

        var url = "?controller=ingredients&action=show";
        $.ajax({
            type: "POST",
            url: url,
            data: $(".filter_ingredients").serialize(),

            success: function(data)
            {
                console.log(data);
                $('#wpr-result-recipes').html(data);
            }
        });
        return false;
    });

    $("img").click(function(){
        if ($(this).find('input[type="checkbox"]')) {
            $(this).addClass('image-checkbox-checked');
        }
        else {
            $(this).removeClass('image-checkbox-checked');
        }
    });
    
});
