<?php
require_once("c://wamp64/www/login_copia/view/head/head.php");
if (!empty($_SESSION['usuario'])) {
    header("Location:panel_control.php");
}
?>

<div class="fondo-login">
    <div class="icon">
        <a href="/login/index.php">
            <i class="fa-solid fa-palette fa-fade dog-icon" style="color: rgb(54, 75, 114);"></i>
        </a>
    </div>
    <div class="titulo">
        Create una cuenta en ArtTrack
    </div>
    <form action="store.php" method="POST" class="col-3 login" autocomplete="off">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
            <input type="email" name="correo" value="<?= (!empty($_GET['correo'])) ? $_GET['correo'] : "" ?>"
                class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>



        <div class="col-auto">
    <i id="exampleInputPassword1" class="form-text">
     8 caracteres mínimo, minúsculas y mayúsculas, 1 número y un símbolo.
        </i>
    </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <div class="box-eye">
                <button type="button" onclick="mostrarContraseña('password','eyepassword')">
                    <i id="eyepassword" class="fa-solid fa-eye changePassword"></i>
                </button>
            </div>



            

    <input type="password" name="contraseña"
        value="<?= (!empty($_GET['contraseña'])) ? $_GET['contraseña'] : "" ?>"
        class="form-control" id="password" placeholder="Introduce la contraseña">
    <?php
    if (!empty($_POST['contraseña']) && !validar_contrasena($_POST['contraseña'])) {
        echo '<div class="text-danger">La contraseña no cumple con los requisitos.</div>';
    }
    ?>
    </div>


         



        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Repetir la contraseña</label>
            <div class="box-eye">
                <button type="button" onclick="mostrarContraseña('password2','eyepassword2')">
                    <i id="eyepassword2" class="fa-solid fa-eye changePassword"></i>
                </button>
            </div>
            <input type="password" name="confirmarContraseña"
                value="<?= (!empty($_GET['confirmarContraseña'])) ? $_GET['confirmarContraseña'] : "" ?>"
                class="form-control" id="password2">
        </div>
        <?php if (!empty($_GET['error'])): ?>
            <div id="alertError" style="margin: auto;" class="alert alert-danger mb-2" role="alert">
                <?= !empty($_GET['error']) ? $_GET['error'] : "" ?>
            </div>
        <?php endif; ?>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">CREAR CUENTA</button>
        </div>
    </form>
    <div class="login col-3 mt-3">
        Tienes una cuenta? <a href="login.php" style="text-decoration: none;">Inicia Sesion</a>
    </div>
</div>

<?php
require_once("c://wamp64/www/login_copia/view/head/footer.php");
?>