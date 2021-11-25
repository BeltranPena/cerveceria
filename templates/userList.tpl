{include file="templates/header.tpl"}

<table>
    <thead>
        <tr>
            <th>Usuario</th>
        </tr>
    </thead>
    <tbody>
    {foreach from=$usuarios item=$usuario}
        <tr>
            <td>{$usuario->usuario}</td>
            <td>{$usuario->email}</td>
            <td><a href="deleteUser/{$usuario->id_usuario}"><img class="icon" src="images/goma.png"></td>
            <td><a href="upgradeUser/{$usuario->id_usuario}"><img class="icon" src="images/flecha.png"></td>
        </tr>
    {/foreach}
    </tbody>


{include file="templates/footer.tpl"}