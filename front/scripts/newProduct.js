function addProduct(){
    console.log("added categoryID " + $("#category").val());
    $("#estimationResult").text(($('#category').val() * 0.3 * $("#condition").val()).toFixed(2) );
}

$(document).ready(function(){
    console.log("entered jquery .ready")
    $.getJSON('https://fair-repack-2021.herokuapp.com/estimation', function(result){
        $.each(result, function(i, category){
        //console.log(category.categoryID + "  " + category.name);
        $("#category").append("<option value="+ category.priceAverage +">" + category.name + "</option>");
        });
    });
})
