$(document).on("click","#logOut", function(){
    $.ajax({
        type: "POST",
        url:"../controllers/logOut.php"
    }).done(function(res){
        location.href = "../inde.php";
    }).fail(function(){

    });
});

$(document).on("click","#log", function(){
    var usu = $("#user").val();
    var pass = $("#pass").val();

    if(usu.trim() != "" && pass.trim() != ""){
        if(usu == "prueba" && pass =="12345"){
            // Swal.fire("HOLA","VAMOS BIEN","success");
            $.ajax({
                type:"POST",
                url: "controllers/login.php"
            }).done(function(res){
                if(res == "p"){
                    location.href="views/map.php";
                    // Swal.fire("HOLA","VAMOS BIEN","success");
                }
            }).faul(function(){
    
            });
        }
        else{
            Swal.fire("ERROR","User or Password incorret","error");

        }
    }else{
        Swal.fire("ERROR","completar todos los campos ","error");
    }
});





