function addProduct(){
    console.log("added");
}

$(document).ready(function(){
    console.log("entered")
    var category1 = $("<option value='1'></option>").text("Category number 1");
    var category2 = $("<option value='2'></option>").text("Category number 2");
    var category3 = $("<option value='3'></option>").text("Category number 3");
    $("category").html(category1,category2,category3);
})