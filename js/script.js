function filter() {
    var selectFilter =$('#selectFilter').val() //gets selected value from main.php
    $.ajax({
        type: "POST",
        url: "../addtask/filter", //this url will take you to the function filter in the addtask controller
        data: {selectFilter: selectFilter}, //this data will be pushed with the post
        success: function(data){
            $("#table2").html(data); //this will output the data returned from the controller
        }
    })
}
