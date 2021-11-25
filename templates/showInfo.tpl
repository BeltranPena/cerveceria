{include file="header.tpl"}

<h3><a class='volver' href="home">Volver</a></h3>

<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>IBU</th>
            <th>Alcohol</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{$beer->nombre}</td>
            <td>{$beer->resumen}</td>
            <td>{$beer->ibu}</td>
            <td>{$beer->alcohol}</td>
        </tr>
    </tbody>
</table>
<table>
    <thead>
        <tr>
            <th></th>
        </tr>
    </thead>
    <tbody id="tabla">
    
    </tbody>
</table>
{if $rol == 1 || $rol == 2}
    <form id="vue-comment">
    <input type="text" id="usuario" name="input-user"required>
        <input type="text" id="comentario" name="puntaje" placeholder="comentario" required>
        <input type="number" id="calificacion" placeholder="calificacion" required>
        <input type="button" id="submit">
    </form>    
{/if}

<script src="js/app.js"></script>
{include file="footer.tpl"}