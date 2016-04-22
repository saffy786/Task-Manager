function filter() {
    var selectFilter =$('#selectFilter').val()
    $.ajax({
        type: "POST",
        url: "../addtask/filter",
        data: {selectFilter: selectFilter},
        success: function(data){
            $("#table2").html(data);
        }
    })
}
