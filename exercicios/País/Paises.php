<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylePaís.css">
    <title>Olimpiadas</title>
</head>

<body>

    <?php

    $pais1 = array("Ordem" => "1", "Nome" => "Estados Unidos", "Bandeira" => "https://flagcdn.com/32x24/us.png", "Ouro" => 46, "Prata" => 37, "Bronze" => 38, "Total Medalhas" => "121");
    $pais2 = array("Ordem" => "2", "Nome" => "Grã-Bretanha", "Bandeira" => "https://flagcdn.com/32x24/gb.png", "Ouro" => "27", "Prata" => "23", "Bronze" => "17", "Total Medalhas" => "67");
    $pais3 = array("Ordem" => "3", "Nome" => "China", "Bandeira" => "https://flagcdn.com/32x24/cn.png", "Ouro" => 26, "Prata" => "18", "Bronze" => "26", "Total Medalhas" => "70");
    $pais4 = array("Ordem" => "4", "Nome" => "Rússia", "Bandeira" => "https://flagcdn.com/32x24/ru.png", "Ouro" => "19", "Prata" => "17", "Bronze" => "20", "Total Medalhas" => "56");
    $pais5 = array("Ordem" => "5", "Nome" => "Alemanha", "Bandeira" => "https://flagcdn.com/32x24/de.png", "Ouro" => "17", "Prata" => "10", "Bronze" => "15", "Total Medalhas" => "42");

    $paises = array($pais1, $pais2, $pais3, $pais4, $pais5);


    print "<table border=1>";
    print "     <tr>";
    print "         <th>Ordem</th>";
    print "         <th>País</th>";
    print "         <th>Ouro</th>";
    print "         <th>Prata</th>";
    print "         <th>Bronze</th>";
    print "         <th>Total</th>";
    print "     </tr>";

    foreach ($paises as $p) {

        print "<tr>";
        print "     <td>" . $p['Ordem'] . "</td>";
        print "     <td> <img src='". $p['Bandeira'] ."' height='12'>" . $p['Nome'] . "</td>";
        print "     <td>" . $p['Ouro'] . "</td>";
        print "     <td>" . $p['Prata'] . "</td>";
        print "     <td>" . $p['Bronze'] . "</td>";
        print "     <td>" . $p['Total Medalhas'] . "</td>";
        print "</tr>";
    }

    print "</table>";
    ?>

</body>

</html>