<!DOCTYPE html>
            <html lang='en'>
            <head>
                <base href="{BASE_URL}" />
                <meta charset='UTF-8'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <link rel='stylesheet' type='text/css' href='css/style.css'>
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
                <title>Cerveceria</title>

                <!-- development version, includes helpful console warnings -->
                <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
            </head>
            <body>
            <img class='logo' src='images/banner.png' alt='logo'>";
            <nav>
                <div id="navegador">
                    <ul>
                        <li><h4><a href='tipos/1'>clasicas</a></h4></li>
                        <li><h4><a href='tipos/2'>modernas</a></h4></li>
                        <li><h4><a href='tipos/3'>worldwide</a></h4></li>
                    </ul>
                </div>
                <div id="login">
                    <ul>
                        {if $rol != 0}
                            <li><h4><a href='logout'>logout</a></h4></li>
                        {else}
                            <li><h4><a href='login'>login</a></h4></li>
                            <li><h4><a href='register'>registrarse</a></h4></li>
                        {/if}
                    </ul>
                </div>
            </nav>