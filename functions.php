<?php function validar_contrasena($contrasena) {
if (strlen($contrasena) < 8 || strlen($contrasena)> 20) {
    return false;
    }

    // Verificar si contiene al menos una minúscula, una mayúscula, un número y un símbolo
    if (!preg_match('/[a-z]/', $contrasena) ||
    !preg_match('/[A-Z]/', $contrasena) ||
    !preg_match('/[0-9]/', $contrasena) ||
    !preg_match('/[!@#$%^&*(),.?":{}|<>]/', $contrasena)) {
        return false;
        }

        return true;
        }
?>