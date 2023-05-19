<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>lacos</title>
</head>
<body>
    
<?php

$dados= [
[ 
  'id' =>1,
  'nome' => 'zeus',
  'idade' => 56

],


[
'id' =>2,
  'nome' => 'julia',
  'idade' => 60

],


[
'id' =>3,
  'nome' => 'sofia',
  'idade' => 40

],

];


echo'<pre>';
print_r($dados);
echo '</pre>';


$lista =[
'casa', 'bola', 'escola', 'if'
]; 


for ($i =0; $i<4; $i++){
    echo $i; 
    echo ($lista[$i]);
}


echo '<h2> for aninhado </h2>';
echo "<pre>";
    for ($i =0; $i<10; $i++){
        echo "i -> " .$i. "\n";

        for ($j =0; $j<10; $j++){
            echo " -> j " .$j. "\n";
        }  

    }

 echo '<h2> foreach (variavel as chaves => value0; </h2>';
   foreach( $dados as $key => $value ){
    echo $key ;
    echo "<pre>"; 
    print_r ($value);
 echo "</pre>";
   }

 foreach( $dados as $key1 => $value1 ){
  echo $key1 ;
  echo "<pre>"; 
  print_r ($value1);
echo "</pre>";

   }


   echo '<h2> while; </h2>';

   echo $dados [0] ['idade'];
   
    while($dados [0] ['idade']< 60 ){
        echo "<pre>";
          print_r($dados [0] ['idade']);
        echo "</pre>";
        $dados [0] ['idade'] = $dados [0] ['idade'] +1;
    }

?>





<h3> ATIVIDADE DE LACOS</h3>
<?php


$Array = [
  'cursos' => [
      [
          'nome' => 'informatica',
          'alunos' => [
              [
                  'nome' => 'duda',
                  'disciplinas' => [
                      [
                          'nome' => 'quimica',
                          'notas' => [7, 8, 9],
                      ],
                      [
                          'nome' => 'matematica',
                          'notas' => [6, 7, 8],
                      ],
                      [
                          'nome' => 'portugues',
                          'notas' => [9, 9, 10],
                      ],
                      [
                          'nome' => 'historia',
                          'notas' => [5, 6, 7],
                      ],
                  ],
              ],



              [
                  'nome' => 'maria isabel',
                  'disciplinas' => [
                      [
                          'nome' => 'Asw',
                          'notas' => [8, 9, 9],
                      ],
                      [
                          'nome' => 'Psw',
                          'notas' => [7, 8, 7],
                      ],
                      [
                          'nome' => 'Bd',
                          'notas' => [9, 10, 10],
                      ],
                      [
                          'nome' => 'redes',
                          'notas' => [6, 7, 8],
                      ],
                  ],
              ],
          ],
      ],
      [
          'nome' => 'agropecuaria',
          'alunos' => [
              [
                  'nome' => 'jesus',
                  'disciplinas' => [
                      [
                          'nome' => 'fisica',
                          'notas' => [8, 9, 9],
                      ],
                      [
                          'nome' => 'geografia',
                          'notas' => [7, 8, 7],
                      ],
                      [
                          'nome' => 'matematica',
                          'notas' => [9, 10, 10],
                      ],
                      [
                          'nome' => 'biologia',
                          'notas' => [6, 7, 8],
                      ],
                  ],
              ],
              [
                  'nome' => 'thayná',
                  'disciplinas' => [
                      [
                          'nome' => 'sociologia',
                          'notas' => [7, 8, 9],
                      ],
                      [
                          'nome' => 'filosofia',
                          'notas' => [6, 7, 8],
                      ],
                      [
                          'nome' => 'ciencia da computação',
                          'notas' => [8, 9, 10],
                      ],
                      [
                          'nome' => 'geometria',
                          'notas' => [5, 6, 7],
                      ],
                  ],
              ],
          ],
      ],
  ],
];

foreach ($Array['cursos'] as $curso) {
  echo "Nome do curso: " . $curso['nome'] . "<br>";
}

echo "<br>";


foreach ($Array['cursos'] as $curso) {
  foreach ($curso['alunos'] as $aluno) {
      echo "Nome do aluno: " . $aluno['nome'] . "<br>";
  }
  echo "<br>";
}


foreach ($Array['cursos'] as $curso) {
  foreach ($curso['alunos'] as $aluno) {
      foreach ($aluno['disciplinas'] as $disciplina) {
          echo "Nome da disciplina: " . $disciplina['nome'] . "<br>";
      }
  }
}

echo "<br>";


foreach ($Array['cursos'] as $curso) {
  foreach ($curso['alunos'] as $aluno) {
      echo "Nome do aluno: " . $aluno['nome'] . "<br>";
      echo "Disciplinas e notas:<br>";
      foreach ($aluno['disciplinas'] as $disciplina) {
          echo "Disciplina: " . $disciplina['nome'] . "<br>";
          echo "Notas: " . implode(', ', $disciplina['notas']) . "<br>";
      }
      echo "<br>";
  }
}

echo "<br>";

?>

</body>
</html>