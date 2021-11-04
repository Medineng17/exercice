<?php

$filiere=[
[
    'niveau'=>'L1',
    'filieres'=>[
        'MAE','ETSE','GLRS'
    ],
    'Etudiant'=>[
        ['Noms'=>  'NDINGA NGALA',
        'Prenoms'=>'Medine',
        'Date'=>'17 Décembre 2000',
        'Sexe'=>  'Feminin'
    ],
        [
            'Noms'=>  'DIBEKOU ',
        'Prenoms'=>'Rita',
        'DateN'=>'7 Septembre 2000',
        'Sexe'=>  'Feminin'
    ],
        [
            'Noms'=>  'NDINGA ',
        'Prenoms'=>'Guychou',
        'DateN'=>'29 Avril 2009',
        'Sexe'=>  'Feminin'
    ]
        ]
        ],
['niveau'=>'L2',
'filieres'=>[
    'MAE','ETSE','GLRS'
],
'Etudiant'=>[
    ['Noms'=>  'Kings',
    'Prenoms'=>'Shalom',
    'DateN'=>'25 Octobre 2002',
    'Sexe'=>  'Feminin'
],
    [
        'Noms'=>  'MAHDI MAHAMOUD ',
    'Prenoms'=>'Fatouma',
    'DateN'=>'23 juin 2002',
    'Sexe'=>  'Feminin'
],
    [
        'Noms'=>  'EKOME ',
    'Prenoms'=>'Kristen',
    'DateN'=>'21 Decembre 2002',
    'Sexe'=>  'Feminin'
]
 
    ] ],
    [
        'niveau'=>'L3',
    'filieres'=>[
        'MAE','ETSE','GLRS'
    ],
    'Etudiant'=>[
        ['Noms'=>  'NDINGA',
        'Prenoms'=>'Gloire Monfort',
        'DateN'=>'21 Aout 2014',
        'Sexe'=>  'Masculin'
    ],
        [
            'Noms'=>  'NDINGA ',
        'Prenoms'=>'Hervie',
        'DateN'=>'19 juin 2001',
        'Sexe'=>  'Feminin'
    ],
        [
            'Noms'=>  'MOKAMBO ',
        'Prenoms'=>'Rosly',
        'DateN'=>'30 Octobre 2001',
        'Sexe'=>  'Masculin'
    ]
     
        ],
    ]
   
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>L1</title>
    <link rel="stylesheet" href="page.css">
</head>
<body>
    <table>
       <tr>
           <th>Noms</th>
           <th>Prenoms</th>
           <th>Date de naissance</th>
           <th>Sexe</th>
       </tr>
       <tr>
           <td><?php echo $filiere[2]['Etudiant'][0]['Noms']?></td>
           <td><?php echo $filiere[2]['Etudiant'][0]['Prenoms']?></td>
           <td><?php echo $filiere[2]['Etudiant'][0]['DateN']?></td>
           <td><?php echo $filiere[2]['Etudiant'][0]['Sexe']?></td>
       </tr>
       <tr>
            <td><?php echo $filiere[2]['Etudiant'][1]['Noms']?></td>
           <td><?php echo $filiere[2]['Etudiant'][1]['Prenoms']?></td>
           <td><?php echo $filiere[2]['Etudiant'][1]['DateN']?></td>
           <td><?php echo $filiere[2]['Etudiant'][1]['Sexe']?></td> 
       </tr>
       <tr>
            <td><?php echo $filiere[2]['Etudiant'][2]['Noms']?></td>
           <td><?php echo $filiere[2]['Etudiant'][2]['Prenoms']?></td>
           <td><?php echo $filiere[2]['Etudiant'][2]['DateN']?></td>
           <td><?php echo $filiere[2]['Etudiant'][2]['Sexe']?></td>
       </tr>
       
    </table>
    
</body>
</html>