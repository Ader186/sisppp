var cont =0;
function VerificarUsuario(){
    cont++;
    $("#conteoincorecto").hide();
     $("#incorecto").hide();
    var usu = $("#txt_usu").val();
    var con = $("#txt_con").val();
    var rol_login =$('#cbm_rol').val();
    if (usu.length == 0 || con.length == 0 || rol_login.length == 0) {
         $("#notif").hide();
         $("#incorecto").hide();
         $("#llenecamp").show();
       return;
    }


    
}