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
                $('#sort_rang_result').html(data);
            }
        });
        return false;
    });


    //at the ingredients page show popup with all ingrediens before start

    function showPopup() {

        $("#popup").show();

        return showPopup();

    }



});
