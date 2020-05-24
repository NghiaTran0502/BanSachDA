
$(document).ready(function() {
    $('#example').DataTable();
});

$(document).ready(function () {
    $("#failSignIn").fadeOut(7000);
});
$(document).ready(function () {
    $("#failSignUp").fadeOut(7000);
});


$(document).ready(function () {
    $('#example').on('click', '.deleteNhomSach', function(){
        var dataID = parseInt(this.id);
        // $.post("./deleteSach.php",{unn:22}, function(data){
        //     console.log(data);
        // });
        $.ajax({
            type: "POST",
            url: "./AdminNhomSach/deleteSach.php",
            data: {unn: dataID},
            success: function(msg){
                  alert( "Data Saved: " + msg );
            },
            error: function(err) {
               alert("some error" + err);
            }
          });
    });

    $('#example').on('click', '.deleteTacGia', function(){
        var dataID = parseInt(this.id);
        // $.post("./deleteSach.php",{unn:22}, function(data){
        //     console.log(data);
        // });
        $.ajax({
            type: "POST",
            url: "./AdminTacGia/deleteTacGia",
            data: {idTG: dataID},
            success: function(msg){
                alert( "Data Saved: " + msg );
            },
            error: function(err) {
                alertg("some error" + err);
            }
          });
    });
});


