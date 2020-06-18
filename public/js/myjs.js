
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
        $.ajax({
            type: "POST",
            url: "./DeleteSach",
            data: {unn: dataID},
            success: function(msg){
                  alert(msg );
                  window.location.href = "./Show";
            },
            error: function(err) {
               alert("some error" + err);
            }
          });
    });

    $('#example').on('click', '.deleteSach', function(){
        var dataID = parseInt(this.id);
        $.ajax({
            type: "POST",
            url: "./deleteSach",
            data: {unn: dataID},
            success: function(msg){
                  alert(msg );
                  window.location.href = "./Show";
            },
            error: function(err) {
               alert("some error" + err);
            }
          });
    });

    $('#example').on('click', '.deleteTacGia', function(){
        var dataID = parseInt(this.id);
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

    $('#example').on('click', '.deleteNXB', function(){
        var dataID = parseInt(this.id);
        $.ajax({
            type: "POST",
            url: "./deleteNXB",
            data: {unn: dataID},
            success: function(msg){
                alert(msg );
                window.location.href = "./Show";
            },
            error: function(err) {
                alertg("some error" + err);
            }
          });
    });

    $("#themSachBTN").click(function(){
        $("#myModal").modal();
    });
    
    
    $('#sanPham').on('click', '.addGioHang', function(){
        var dataID = parseInt(this.id);
        console.log(dataID);
    });

    $('#myModal').on('click', '#login', function(){
        var userName = $('#username').val();
        var passWord = $('#password').val();
        $.ajax({
            type: "POST",
            url: "./login",
            data: {user: userName, pass: passWord},
            success: function(msg){
                alert(msg );
                window.location.href = "./Showw";
            },
            error: function(err) {
                alertg("some error" + err);
            }
          });
    });

    $('#log').on('click', '#logout', function(){
        $.ajax({
            type: "POST",
            url: "./logout",
            data: {},
            success: function(msg){
                alert(msg );
                window.location.href = "./Showw";
            },
            error: function(err) {
                alertg("some error" + err);
            }
          });
    });
});


