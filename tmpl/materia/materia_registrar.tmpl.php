<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
    <head>
        <title>Cirugía Cardiovascular Hospital Privado</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo $G_CssPath; ?>/materia/materia_registrar.css"/>
        <script type="text/javascript" src="<?php echo $G_JsPath ?>/lib/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="<?php echo $G_JsPath ?>/materia/materia_registrar.js"></script>
    </head>
    <body>
        <form action="<?php echo $G_WebPath ?>/src/ctrl/materia/materia_registrar.ctrl.php" method="post">
            <table >
                <caption>Registro de materia</caption>
                <tbody>
                    <tr>
                        <td>
                            <label>Nombre</label>
                        </td>
                        <td>
                            <input type="text" name="txtNombre" id="txtNombre" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Horario desde</label>
                        </td>
                        <td>
                            <input type="text" name="txtHorarioDesde" id="txtHorarioDesde" />
                        </td>
                        <td>
                            <label>Horario hasta</label>
                        </td>
                        <td>
                            <input type="text" name="txtHorarioHasta" id="txtHorarioHasta" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Día</label>
                        </td>
                        <td>
                            <select>
                                <option value="LU">Lunes</option>
                                <option value="MA">Martes</option>
                                <option value="MI">Miércoles</option>
                                <option value="JU">Jueves</option>
                                <option value="VI">Viernes</option>
                                <option value="SA">Sábado</option>
                                <option value="DO">Domingo</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Curso</label>
                        </td>
                        <td>
                            <input type="text" name="txtCurso" id="txtCurso" />
                        </td>
                    </tr>
                </tbody>
            </table>
            <div>
                <br />
            </div>
            <table id="tblFormularioRegistrarAlumno">
                <caption>Profesores</caption>
                <tbody>
                    <tr>
                        <td>
                            <label>Nombre</label>
                        </td>
                        <td>
                            <input type="text" name="txtNombreProfesor1" id="txtNombreProfesor0" />
                        </td>
                        <td>
                            <label>Apellido</label>
                        </td>
                        <td>
                            <input type="text" name="txtApellidoProfesor1" id="txtApellidoProfesor0" />
                        </td>
                        <td>
                            <input type="button" name="btnAgregarProfesor" id="btnAgregarProfesor" value="Agregar profesor"/>
                        </td>
                        <td>
                            <input type="button" name="btnBorrarProfesor" id="btnBorrarProfesor" value="Borrar profesor"/>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div>
                <input type="submit" name="btnRegistrar" id="btnRegistrar" value="Registrar materia"/>
            </div>
        </form>
        <div>
            <br />
            <br />
            <a href="<?php echo $G_WebPath; ?>/src/ctrl/materia/materia_consultar.ctrl.php">Ver materias</a>
        </div>
    </body>
</html>