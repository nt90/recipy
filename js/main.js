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

/*
    jQuery(function ($) {
        // init the state from the input
        $(".image-checkbox").each(function () {
            if ($(this).find('input[type="checkbox"]')) {
                $(this).addClass('image-checkbox-checked');
            }
            else {
                $(this).removeClass('image-checkbox-checked');
            }
        });

        // sync the state to the input
        $(".image-checkbox").on("click", function (e) {
            if ($(this).hasClass('image-checkbox-checked')) {
                $(this).removeClass('image-checkbox-checked');
                $(this).find('input[type="checkbox"]').first().removeAttr("checked");
            }
            else {
                $(this).addClass('image-checkbox-checked');
                $(this).find('input[type="checkbox"]').first().attr("checked", "checked");
            }

            e.preventDefault();
        });
    });*/

});
