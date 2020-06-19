
$(document).ready(function () {
    $('#example').DataTable();
});

$(document).ready(function () {
    $("#failSignIn").fadeOut(7000);
});
$(document).ready(function () {
    $("#failSignUp").fadeOut(7000);
});


$(document).ready(function () {




    $('#example').on('click', '.deleteNhomSach', function () {
        var dataID = parseInt(this.id);
        $.ajax({
            type: "POST",
            url: "./DeleteSach",
            data: { unn: dataID },
            success: function (msg) {
                alert(msg);
                window.location.href = "./Show";
            },
            error: function (err) {
                alert("some error" + err);
            }
        });
    });

    $('#example').on('click', '.deleteSach', function () {
        var dataID = parseInt(this.id);
        $.ajax({
            type: "POST",
            url: "./deleteSach",
            data: { unn: dataID },
            success: function (msg) {
                alert(msg);
                window.location.href = "./Show";
            },
            error: function (err) {
                alert("some error" + err);
            }
        });
    });

    $('#example').on('click', '.deleteTacGia', function () {
        var dataID = parseInt(this.id);
        $.ajax({
            type: "POST",
            url: "./deleteTacGia",
            data: { idTG: dataID },
            success: function (msg) {
                alert(msg);
                window.location.href = "./ShowTacGia";
            },
            error: function (err) {
                alertg("some error" + err);
            }
        });
    });

    $('#example').on('click', '.deleteNXB', function () {
        var dataID = parseInt(this.id);
        $.ajax({
            type: "POST",
            url: "./deleteNXB",
            data: { unn: dataID },
            success: function (msg) {
                alert(msg);
                window.location.href = "./Show";
            },
            error: function (err) {
                alertg("some error" + err);
            }
        });
    });

    $("#themSachBTN").click(function () {
        $("#myModal").modal();
    });


    $('#sanPham').on('click', '.addGioHang', function () {
        var dataID = parseInt(this.id);
        console.log(dataID);
    });

    $('#myModal').on('click', '#login', function () {
        var userName = $('#username').val();
        var passWord = $('#password').val();
        $.ajax({
            type: "POST",
            url: "../TrangBanSach/login",
            data: { user: userName, pass: passWord },
            success: function (msg) {
                alert(msg);
                window.location.href = "./Showw";
            },
            error: function (err) {
                alertg("some error" + err);
            }
        });
    });

    $('#myModalSignUp').on('click', '#signUp', function () {
        var userName = $('#usernamedk').val();
        var passWord = $('#passworddk').val();
        var rePass = $('#RePassworddk').val();
        var name = $('#namedk').val();
        var gioitinh = $('#sexdk').val();
        if (passWord == rePass) {
            $.ajax({
                type: "POST",
                url: "../TrangBanSach/signUp",
                data: { user: userName, pass: passWord, fullName: name, gioiTinh: gioitinh },
                success: function (msg) {
                    alert(msg);
                    window.location.href = "./Showw";
                },
                error: function (err) {
                    alertg("some error" + err);
                }
            });
        }
        else {
            alert("Mật khẩu không trùng nhau!");
        }

    });

    $('#phanHoi').on('click', '#gui', function () {
        name = $('#name').val();
        title = $('#title').val();
        SDT = $('#SDT').val();
        maill = $('#mail').val();
        body = $('#body').val();
        $.ajax({
            type: "POST",
            url: "../TrangBanSach/guiPhanHoi",
            data: { nas: name, til: title, sd: SDT, ma: maill, b: body },
            success: function (msg) {
                alert(msg);
                window.location.href = "./Showw";
            },
            error: function (err) {
                alertg("some error" + err);
            }
        });
    });



    $('#log').on('click', '#logout', function () {
        $.ajax({
            type: "POST",
            url: "../TrangBanSach/logout",
            data: {},
            success: function (msg) {
                alert(msg);
                window.location.href = "./Showw";
            },
            error: function (err) {
                alertg("some error" + err);
            }
        });
    });

    // $('#usernamedk').keyup(function(){
    //     // $('repass').htmnl('nghia');
    //     console.log('ahsbdasd');
    // });

    $('#myModalSignUp').on("keyup", '#usernamedk', function () {
        var userName = $('#usernamedk').val();
        // $.post("../TrangBanSach/checkedUser", { un: $un }, function (data) {
        //     $('#checked').html(data);
        // });
        $.ajax({
            type: "POST",
            url: "./che",
            data: { user: userName },
            success: function (msg) {
                console.log(msg);
                if(msg=="true"){
                    $("#checked").html("Tài khoản đã tồn tại!");
                }
                else{
                    $("#checked").html("");
                }
            },
            error: function (err) {
                console.log("some error" + err);
            }
        });
    });

    $('#myModalSignUp').on("keyup", '#RePassworddk', function () {
        var password = $('#passworddk').val();
        var re = $('#RePassworddk').val();
        if(re==password){
            $("#checkedP").html("");
        }
        else{
            $("#checkedP").html("Mật khẩu không trùng khớp!");
        }
    });

    // $('#us').on('load','#countUser', function(){
    //     console.log("test");
    // })

    $("#countUser").html(function(){
        $.ajax({
            type: "POST",
            url: "../AdminUsers/getCount",
            data: {},
            success: function (msg) {
                console.log(msg);
                $("#countUser").html(msg);
            },
            error: function (err) {
                console.log("some error" + err);
            }
        });
    });


    $("#countNXB").html(function(){
        $.ajax({
            type: "POST",
            url: "../AdminNXB/getCount",
            data: {},
            success: function (msg) {
                console.log(msg);
                $("#countNXB").html(msg);
            },
            error: function (err) {
                console.log("some error" + err);
            }
        });
    });

    $("#countNhomSach").html(function(){
        $.ajax({
            type: "POST",
            url: "../AdminNhomSach/getCount",
            data: {},
            success: function (msg) {
                console.log(msg);
                $("#countNhomSach").html(msg);
            },
            error: function (err) {
                console.log("some error" + err);
            }
        });
    });
    
    $("#countSach").html(function(){
        $.ajax({
            type: "POST",
            url: "../AdminNhomSach/getCount",
            data: {},
            success: function (msg) {
                console.log(msg);
                $("#countSach").html(msg);
            },
            error: function (err) {
                console.log("some error" + err);
            }
        });
    });


    $("#countTacGia").html(function(){
        $.ajax({
            type: "POST",
            url: "../AdminTacGia/getCount",
            data: {},
            success: function (msg) {
                console.log(msg);
                $("#countTacGia").html(msg);
            },
            error: function (err) {
                console.log("some error" + err);
            }
        });
    });
});


