<?php
if(isset($_POST['login'])){
  $sesion=new SessionController();
  $sesion->login($_POST['usuario'],$_POST['password']);
}
?>
<div class="login-box">
      <img src="./public/imagenes/user.png" class="avatar" alt="Avatar Image">
      <h1>ACCESO</h1>
      <form method="POST">
        <!-- USERNAME INPUT -->
        <label for="username">Usuario</label>
        <input id="username" type="text" placeholder="Enter Usuario" name="usuario" required="yes" value="<?=$_POST['usuario']?>">  
        <!-- PASSWORD INPUT -->
        <label for="password">Contraseña</label>
        <input id="password"type="password" placeholder="Enter Contraseña" name="password" required="yes" value="<?=$_POST['password']?>">
        <input type="submit" value="Iniciar sesión" name="login">
        <a href="olvidandoContrasena">Olvidaste tu contraseña?</a><br>
      </form>
</div>
<?php if(isset($_POST['login'])):?>
<script>alert("Usuario y contraseña no coinciden con usuario registado")</script>
<?php endif; ?>