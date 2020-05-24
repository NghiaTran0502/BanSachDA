
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
            url: "./deleteSach",
            data: {unn: dataID},
            success: function(msg){
                  alert(msg );
                  window.location.href = "./ShowTacGia";
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
            url: "./deleteTacGia",
            data: {idTG: dataID},
            success: function(msg){
                alert(msg );
                window.location.href = "./ShowTacGia";
            },
            error: function(err) {
                alertg("some error" + err);
            }
          });
    });
});


