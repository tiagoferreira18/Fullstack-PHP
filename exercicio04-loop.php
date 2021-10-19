<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EXERCÍCIO 04</title>
  <style>
    h1{
      margin:auto;
      background-color:#79B1E6;
      color: white;
      width: 600px;
      text-align: center;
    }
    p{
      margin: auto;
      max-width: 600px;
    }

    hr{
      margin-top :50px;
      max-width: 600px;     
    }
    caption{
      text-align:left;
      font-weight: bold;
      height: 2rem;
      margin-top: 2rem;
    }
    table{
      /* border: 1px solid black; */
      text-align: left;
      margin: auto;
      width:600px;
    }
   th{
     text-align:center;
   }

    th, td{
      background-color:#79B1E6;
      color: white;
    
      padding: 10px;
      background-color:#79B1E6;
      color: white;
    }

  </style>
</head>
<body>
  
<h1>EXERCÍCIO 04</h1>
<hr>
<p>Crie um array associativo com 4 nomes de linguagens e uma pequena descrição para cada.</p>
<p>Em seguida, use um loop para iterar sobre este array e exibir todos os dados em linhas de uma tabela HTML conforme exemplo abaixo:</p>
<hr>

<?php
$linguagens = [
  [
    "nome" => "HTML",
    "desc" => "Estruturação"
  ],
  [
    "nome" => "CSS",
    "desc" => "Estilos"
  ],
  [
    "nome" => "JS",
    "desc" => "Comportamento"
  ],
  [
    "nome" => "PHP",
    "desc" => "Back-end"
  ]
];
?>
<table>
  <caption>Relação de Linguagens:</caption>
  <thead>
    <tr><th>Linguagem</th><th>Descrição</th></tr>
  </thead>
<?php
foreach($linguagens as $linguagem){
?>

<tr><td><?=$linguagem["nome"]?></td> <td><?=$linguagem["desc"]?></td></tr>

<?php 
}
?>
  
</table>
</body>
</html>
