<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Arrays revisão</title>
</head>
<body>

    <h1>Arrays Revisao </h1>


    <?php

    echo '  <h2>arrays como lista ordenada </h2> ';

    $listaordenada = array('carro', 'bicicleta', 'moto');

    echo '<pre>';
         print_r($listaordenada);

        echo '</pre>';



     echo '  <h2>adicionar itens ao arrays</h2> ';

     $listaordenada[] = 'aviao';

     echo '<pre>';
     print_r($listaordenada);

    echo '</pre>';

    echo '  <h2>alterar itens ao arrays</h2> ';

     $listaordenada[1] = 'caminhao';

     echo '<pre>';
     print_r($listaordenada);

    echo '</pre>';



    echo '<h2> arrays associativo = key => valor </h2>';

    $arrayAssociativo= [
        0 => 'camisa',
        1 => 'calca',
        2 => 'sapato',
        3 => 'blusa de frio',
        4 =>'moletom'
    ];

    echo '<pre>';
     print_r($arrayAssociativo);

    echo '</pre>';



   echo '<h2> arrays - impressao de um item </h2>';

   
    echo '<pre>';
     print_r($arrayAssociativo[2]);

    echo '</pre>';

    echo '  <h2>arrays - alteracao de um item</h2> ';

     $arrayAssociativo[2] = 'sapato grande';

     echo '<pre>';
     print_r($arrayAssociativo);

    echo '</pre>';

    echo '  <h2>arrays - adicao de um item</h2> ';

    $arrayAssociativo['cpf'] = '000.111.222-34';

     echo '<pre>';
     print_r($arrayAssociativo);

    echo '</pre>';


     echo '  <h2>arrays - com varios tipos </h2> ';

     $multitipo = [
           1 => 'livro',
        'dois' =>'capitulo',
           3 => '12/08/2023',
           4 => '30',
        'telefon' => '99776543',
        'idade' => 18

     ];

     echo '<pre>';
     print_r($multitipo);
     
     
     '</pre>';


     echo '  <h2>arrays multidimensional - com multiplos arrays</h2> ';

     $multidimensional = [
        'alunos' => [
           [
            'id' => 1,
            'nome' => 'duda',
            'endereco' => 'rua x'
           ],

             [
                'id' => 2,
                'nome' => 'duda',
                'endereco' => 'rua x'

            ]

        ]

       
       

     ];

     echo '<pre>';
     print_r($multidimensional);
     
     
     '</pre>';

     echo '<h2> arrays multidimensional - impressao de um item </h2>';

   
     echo '<pre>';
      print_r($multidimensional['alunos'][0]);
 
     echo '</pre>';

   
     echo '<pre>';
      print_r($multidimensional['alunos'][0]['nome']);
 
     echo '</pre>';
 



    





   
    
    ?>
    

    
</body>
</html>