{include file="header.tpl"}

<h3><a class='volver' href="home">Volver</a></h3>

<form class="form" action='changeBeer/{$id}' method='post'>
    <input type='text' name='nombre' id='nombre' placeholder='nombre'>
    <input type='text'name='resumen' id='resumen' placeholder='resumen'>
    <input type='number' name='ibu' id='ibu' placeholder='IBU'>
    <input type='text' name='alcohol' id='alcohol' placeholder='alcohol'>
    <input type='number'name='id_tipo' id='id_tipo' placeholder='id tipo'>
    <input type='submit' value='Actualizar'>
</form>

{include file="footer.tpl"}