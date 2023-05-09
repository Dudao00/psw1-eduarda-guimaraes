!DOCTYPE html>
<html lang="br-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Funções Arrays</title>
</head>
<body>
    
</body>
</html>


<?php
$array =  [
    'nome' => 'Thayna',
    'endereco' => 'Rua Ipiranga',
    'idade' => 17,
    'cpf' => '975.097.096-98'
];

$arrayassociativo = [
    'linux',
    'windows',
    'ios'
];

echo '<pre>';
   echo (count($array));
echo '</pre>';

echo '<pre>';
echo (count($arrayassociativo));
echo '</pre>';


echo '<h2> Count - conta elementos </h2>';

echo '<pre>';
   echo (count($array));
echo '</pre>';

echo '<pre>';
   echo (count($array));
echo '</pre>';

echo '<pre>';
echo (count($arrayassociativo));
echo '</pre>';

echo '<h2> Array value - mostra o valor de cada </h2>';

echo '<pre>';
  print_r(array_values($array));
echo '</pre>';


echo '<h2> in array = busca um item no array </h2>';

echo '<pre>';
  print_r(in_array('Duda',$array));
echo '</pre>';

echo '<pre>';
echo '</pre>';

echo '<pre>';
  var_dump(in_array('Duda',$array));
echo '</pre>';


echo '<pre>';
 var_dump(array_search('Duda',$array));
 echo '<pre>';


 echo '<pre>';
 var_dump( array_search('linex', $arrayassociativo));
 echo '<pre>';



 echo '<h2> isset - verifica se posicao existe no array <h2>';

 echo '<pre>';
     var_dump(isset($array['cpf']));
     echo '<pre>';


echo '<h2> isset - verifica se posicao existe no array <h2>';

 echo '<pre>';
     var_dump(isset($array[0]));
     echo '<pre>';


     
echo '<pre>';
print_r(explode(',', 'Duda, marcos, henrique'));
echo '<pre>'; 









$aluno=[
    
    [ 'Eduarda'=>
     
       [ 'Geografia'=>

            ['avaliação'=> 80,
              'teste'=>10 ],

        'Portugues'=>

            ['avaliação'=> 95,
              'teste'=>10 ]

    ]],

        ['Henrique'=>
     
       [ 'Geografia'=>

            ['avaliação'=> 80,
              'teste'=>10 ],

        'Portugues'=>

            ['avaliação'=> 95,
              'teste'=>10 ]
        
        ]],

        ['Isabel'=>
     
               [ 'Geografia'=>

            ['avaliação'=> 80,
              'teste'=>10 ],

        'Portugues'=>

            ['avaliação'=> 95,
              'teste'=>10 ]

        
        ]],

        ['Kaike'=>
     
       [ 'Geografia'=>

            ['avaliação'=> 80,
              'teste'=>10 ],

        'Portugues'=>

            ['avaliação'=> 95,
              'teste'=>10 ]
        
        ]]


    
    ];

     echo'<pre>';
     print_r($aluno);
     echo'</pre>';









?>