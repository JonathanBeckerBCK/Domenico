<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
    
    require_once("Presidente.php");

    $Eurico = new Presidente();
    $Eurico->setNumero(16);
    $Eurico->setNome("Eurico Gaspar Dutra");
    $Eurico->setInicio(1946);
    $Eurico->setFim(1951);

    $Eurico = new Presidente();
    $Eurico->setNumero(16);
    $Eurico->setNome("Getulio");
    $Eurico->setInicio(1946);
    $Eurico->setFim(1951);



/*
Numero	      Nome	           Início	Fim
  16	Eurico Gaspar Dutra	    1946	1951
  17	Getúlio Vargas	        1951	1954
  18	Café Filho	            1954	1955
  19	Carlos Luz	            1955	1955
  20	Nereu Ramos	            1955	1956
  21	Juscelino Kubitschek	1956	1961*/












    ?>


</body>
</html>