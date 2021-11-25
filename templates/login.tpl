{include file="header.tpl"}

<h3><a class='volver' href="home">Volver</a></h3>

<form action="verify" method="POST">
    <input type="text" name="usuario" id="usuario" placeholder="Ingrese usuario" required>
    <input type="email" name="email" id="email" placeholder="Ingrese un mail" required>
    <input type="password" name="contraseña" id="contraseña" placeholder="Ingrese una contraseña" required>
    <input type="submit" value="Login">
</form>

{include file="footer.tpl"}