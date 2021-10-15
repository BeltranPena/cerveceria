<table class="tabla">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>IBU</th>
            <th>Alcohol</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$beers item=$beer}
            <tr>
                <td>{$beer->id_cerveza}</td>
                <td>{$beer->nombre}</td>
                <td>{$beer->resumen}</td>
                <td>{$beer->ibu}</td>
                <td>{$beer->alcohol}</td>
                <td><a href="deleteBeer/{$beer->id_cerveza}">Borrar</a></td>
            </tr>
        {/foreach}
    </tbody>
</table>

{include file="footer.tpl"}