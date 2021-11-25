<table class="tabla">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
        </tr>
    </thead>
    <tbody id="tableBody">
        {foreach from=$beers item=$beer}
            <tr>
                <td><a href="beerInfo/{$beer->id_cerveza}">{$beer->nombre}</a></td>
                <td>{$beer->resumen}</td>
                {if $rol == 2}
                    <td><a href="deleteBeer/{$beer->id_cerveza}"><img class="icon" src="images/goma.png"></td>
                    <td><a href="updateBeer/{$beer->id_cerveza}"><img class="icon" src="images/edit.png"></td>
                {/if}
            </tr>
        {/foreach}
    </tbody>
</table>

{include file="footer.tpl"}