<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funçoes no PHP</title>
  <style>
   h1{
     text-align:center;
   }

   p{
     text-align: center;
   }
   hr{
     width: 600px;
   }
   table{
     /* border: solid 1px; */
     width: 600px;
     text-align: center;
     margin: auto;
   }
   hr{
    margin-top: 30px;
    margin-bottom: 30px;
   }
   caption{
     text-align: left;
    
   }

   th, td{
      border: solid 1px ;
      background-color:#79B1E6;
      color: white;
      padding: 10px;
    }

  </style>
</head>
<body>
  <h1>Funções no PHP</h1>
  <hr>
  <p>Feito uma função para realizar o calculo de média</p>
  <p>Funções servem principalmente para reaproveitar o código</p>
  <p>A função é declarada uma unica vez e sempre que precisar posso chama-la.</p>
  <hr>
  <?php
    function calculaMedia(float $nota1, float $nota2):float{
      return ($nota1 + $nota2) / 2;
    }
      
  ?>

    <table>
      <caption>Tabela de notas:</caption>
      <thead>
        <tr>
          <th>Nome</th>
          <th>Notas</th>
          <th>Média </th>
        </tr>
      </thead>
      <tr>
        <td>Adriano:</td>
        <td>7 e 8</td>
        <td><?=calculaMedia(7,8)?></td>
      </tr>

      <tr>
        <td>Alicio:</td>
        <td>6.5 e 4</td>
        <td><?=calculaMedia(6.5,4)?></td>
      </tr>
      <tr>
        <td>Sandra:</td>
        <td>10 e 9</td>
        <td><?=calculaMedia(10,9)?></td>
      </tr>
      <tr>
        <td>Yasmin:</td>
        <td>8.87 e 6.66</td>
        <td><?=calculaMedia(8.87,6.66)?></td>
      </tr>
    </table>
  
</body>
</html>