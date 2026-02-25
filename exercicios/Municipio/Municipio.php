<?php 

$mun1 = array("Nome" => "Foz do Iguaçu", 
              "Habitantes" => "250000", 
              "Area" => "500", 
              "Altitude" => "145", 
              "Estado" => "Paraná-PR");

$mun2 = array("Nome" => "Cascavel", 
              "Habitantes" => "300000", 
              "Area" => "420", 
              "Altitude" => "320", 
              "Estado" => "Paraná-PR");

$mun3 = array("Nome" => "Chapecó", 
              "Habitantes" => "240000", 
              "Area" => "120", 
              "Altitude" => "620", 
              "Estado" => "Santa Catarina-SC");

$municipios = array($mun1, $mun2, $mun3);

print 
"<table border=1> 
    <tr>
        <th>Nome</th>
        <th>Habitantes</th>
        <th>Área</th>
        <th>Altitude</th>
        <th>Estado</th>
    </tr>
";

foreach ($municipios as $m)
{
    print "<tr>";
    print "<td>" . $m['Nome'] . "</td>";
    print "<td>" . $m['Habitantes'] . "</td>";
    print "<td>" . $m['Area'] . "</td>";
    print "<td>" . $m['Altitude'] . "</td>";
    print "<td>" . $m['Estado'] . "</td>";
    print "</tr>";
}

print "</table>";