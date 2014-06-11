$(document).ready(function() {
    c = 1; // Es la cantidad de profesores.
    $("#btnAgregarProfesor").click(function() {
        $("#tblFormularioRegistrarAlumno").append("<tr><td><label>Nombre<label></td>\
        <td><input type='text' name='txtNombreProfesor" + c + "' /></td>\
        <td><label>Apellido<label></td>\
        <td><input type='text' name='txtApellidoProfesor" + c + "' /></td></tr>");
        c++;
    });
    $("#btnBorrarProfesor").click(function(){
        if($("#tblFormularioRegistrarAlumno > tbody > tr").length > 1){
            $("#tblFormularioRegistrarAlumno tr:last-child").remove();
        }else{
            alert("Debe tener al menos un profesor");
        }
    });
});