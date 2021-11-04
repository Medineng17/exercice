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
        'Date_de_naissnace'=>'17 Décembre 2000',
        'Sexe'=>  'Feminin'
    ],
        [
            'Noms'=>  'DIBEKOU ',
        'Prenoms'=>'Rita',
        'Date_de_naissnace'=>'7 Septembre 2000',
        'Sexe'=>  'Feminin'
    ],
        [
            'Noms'=>  'NDINGA ',
        'Prenoms'=>'Guychou',
        'Date_de_naissnace'=>'29 Avril 2009',
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
    'Date_de_naissnace'=>'25 Octobre 2002',
    'Sexe'=>  'Feminin'
],
    [
        'Noms'=>  'MAHDI MAHAMOUD ',
    'Prenoms'=>'Fatouma',
    'Date_de_naissnace'=>'23 juin 2002',
    'Sexe'=>  'Feminin'
],
    [
        'Noms'=>  'EKOME ',
    'Prenoms'=>'Kristen',
    'Date_de_naissnace'=>'21 Decembre 2002',
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="page.css">
    <title>Tableau</title>

</head>
<body>
    <div class="container">
        <label>Niveaux</label>
        <select>
            <option >L1</option>
            <option>L2</option>
            <option>L3</option>
        </select>
        <label>Filieres</label>
        <select>
            <option>MAE</option>
            <option>GLRS</option>
            <option>ETSE</option>
        </select>
        <input type= "submit" value="Ok" name="Envoyer" />
    <table>
        <tr>
                <th>Niveaux</th>
                <th>Filiere</th>
                <th>Actions</th>
            </tr>

         <tr>
             <td><?php echo $filiere[0]['niveau']?></td>
             <td><?php echo $filiere[0]['filieres'][1]?></td>
             <td>
                 <a href="l1.php">Etudiant</a>
             </td>
         </tr>
         <tr>
         <td><?php echo $filiere[1]['niveau']?></td>
        <td><?php echo $filiere[1]['filieres'][0]?></td>
        <td>
                 <a href="l2.php">Etudiant</a>
             </td>
         </tr>
         <tr>
         <td><?php echo $filiere[2]['niveau']?></td>
        <td><?php echo $filiere[2]['filieres'][2]?></td> 
        <td>
        <a href="l3.php">Etudiant</a>
        </td>
         </tr>
           
           

        

	
	</table>
    
    </div>

</body>
</html>