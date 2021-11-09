<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 700px;
        }
    </style>
</head>
<body>
    <table border=1px>
        <th>NOMBRE</th><th>FUNCIÓN</th><th>VALOR</th>
        <tr>
            <td>session.use_cookies</td>
            <td>Especifica si el módulo usará cookies para almacenar el id de sesión en la parte del cliente. Por defecto es 1 (habilitado)</td>
            <td>1(true) ó 0(false)</td>
        <tr>
            <td>session.use_only_cookies</td>
            <td>especifica si el módulo sólo usará cookies para almacenar el id de sesión en la parte del cliente. Habilitar este ajuste previene ataques que implican pasar el id de sesión en la URL. Por defecto es 1 (habilitado).</td>
            <td>1(true) ó 0(false)</td>
        </tr>
        <tr>
            <td>ssession.save_handler</td>
            <td>Define el nombre del gestor que se usa para almacenar y recuperar información asociada con una sesión. Por defecto es files. Observe que las extensiones individuales pueden registrar sus propios gestores save_handler; los gestores registrados se pueden obtener a nivel de instalación consultando phpinfo().</td>
            <td>files(por defecto) ó user</td>
        </tr>
        <tr>
            <td>session.name</td>
            <td>Especifica el nombre de la sesión que se usa como nombre de cookie. Sólo debería contener caracteres alfanuméricos. Por defecto es PHPSESSID. Véase también session_name().</td>
            <td>Sólo debería contener caracteres alfanuméricos. Le podemos dar un nombre nosotros</td>
        </tr>
        <tr>
            <td>session.auto_start</td>
            <td>especifica si el módulo de sesión inicia una sesión automáticamente cuando arranque una petición. Por defecto es 0 (deshabilitado).</td>
            <td>0(false) ó 1(true)</td>
        </tr>
        <tr>
            <td>session.cookie_lifetime</td>
            <td>especifica el tiempo de vida en segundos de la cookie que es enviada al navegador. El valor 0 significa "hasta que el navegador se cierre". Por defecto es 0. Véase también session_get_cookie_params() y session_set_cookie_params(). </td>
            <td>Un número de segundos</td>
        </tr>
        <tr>
            <td>session.gc_maxlifetime</td>
            <td>especifica el número de segundos después de lo cual la información sea vista como 'basura' y potencialmente limpiada. La recolección de basura puede suceder durante el inicio de sesiones (dependiendo de session.gc_probability y session.gc_divisor). </td>
            <td>Un número de segundos</td>
        </tr>
    </table>
</body>
</html>