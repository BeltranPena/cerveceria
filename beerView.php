<?php




class View{

    

    function home(){
        echo"<!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <link rel='stylesheet' type='text/css' href='style.css'>
                <title>Cerveceria</title>
            </head>
            <body>
            <img class='logo' src='./images/logo.png' alt='logo'>";
        echo"<nav>
                <ul>
                <li><a href='tipos/1'>clasicas</a></li>
                    <li><a href='tipos/2'>modernas</a></li>
                    <li><a href='tipos/3'>worldwide</a></li>
                </ul>
            </nav>";
        echo"</body>
        </html>";
    }


    function renderAll($allBeers){
	    echo "<h1>lista de cervezas</h1>";

        //imprime la tabla

        echo "<table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>IBU</th>
                        <th>Alcohol</th>
                    </tr>
                </thead>
                <tbody>";
        foreach ($allBeers as $beers){
            echo "<tr>
                    <td>$beers->nombre</td>
                    <td>$beers->resumen</td>
                    <td>$beers->ibu</td>
                    <td>$beers->alcohol</td>
                </tr>";
        }
        echo "
                </tbody>
            </table>
        ";
	}

	function renderBeerByID($nombre, $beer){
        echo"<!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <link rel='stylesheet' type='text/css' href='../style.css'>
                <title>Cerveceria</title>
            </head>
            <body>
            <img class='logo' src='../images/logo.png' alt='logo'>";
        echo"<nav>
                <ul>
                <li><a href='../tipos/1'>clasicas</a></li>
                    <li><a href='../tipos/2'>modernas</a></li>
                    <li><a href='../tipos/3'>worldwide</a></li>
                </ul>
            </nav>";
        if($nombre == !null){
            echo "<h1>lista por categoria: $nombre->tipo </h1>";
            echo "<h3>$nombre->descripcion</h3>";
            echo "<a href='../home'>Volver</a>";

            //imprime la tabla

            echo "<table>
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>IBU</th>
                            <th>Alcohol</th>
                        </tr>
                    </thead>
                    <tbody>";
            foreach ($beer as $beers){
                echo "<tr>
                        <td>$beers->nombre</td>
                        <td>$beers->resumen</td>
                        <td>$beers->ibu</td>
                        <td>$beers->alcohol</td>
                    </tr>";
            }
            echo "
                    </tbody>
                </table>
            ";
        }
        else{
            echo "<h2>Oops! Parece que la categoria no tiene elementos.</h2>";
            echo "<a href='../home'>Volver</a>";
        }
        echo"</body>
        </html>";
	}
	function renderError(){
	echo "<h2>Error! Categoria no especificada.</h2>";
	}
}