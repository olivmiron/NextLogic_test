<!DOCTYPE html>
<html>
    <head>
        <title>NextLogic test project</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="/design/global.css"/>
        <script defer type="text/javascript" src="logic/core_logic.js"></script>

        <link rel="icon" type="image/x-icon" href="design/favicon.ico"/>
        
        <meta name="description" content="NextLogic test project"/>
        <meta name="made-by" content="Made by Mironescu Olivier - 2022"/>
    </head>
    <body>
        <div id="container_0">
            <div id="top_bar"><span>NextLogic Test Project</span><a href="/">Read Tables</a><a href="/update.php">Update Tables</a></div>
            <div id="container_1">

                <!-- tabel clase -->

                
                <div class="table_description"><span>Clase Colegiul "Costache Negruzzi", Iași</span></div>
                <table>
                    <tr>
                        <th>Id Clasa</th>
                        <th>An Clasa</th>
                        <th>Profil Clasa</th>
                        <th>Numar elevi</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>IXA</td>
                        <td>mate-info</td>
                        <td>5</td>
                    </tr>
                </table>

                <br/><br/><br/>
                <!-- tabel note -->

                <div class="table_description"><span>Note elevi</span></div>
                <table>
                    <tr>
                        <th>Id Nota</th>
                        <th>Nota</th>
                        <th>Elev</th>
                        <th>Materie</th>
                        <th>Data</th>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>7</td>
                        <td>Marlie Atteridge (13)</td>
                        <td>Engleza (2)</td>
                        <td>sep 2015</td>
                    </tr>
                </table>

            </div>
            <div id="bottom_bar">Copyright &#169; Mironescu Olivier - <?php echo date("Y");?></div>
        </div>
    </body>
</html>