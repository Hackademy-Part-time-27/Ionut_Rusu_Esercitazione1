<?php
const Giorno = 'Martedi'; //string
const Mese = 'Ottobre'; //string
const Anno = 2024; //integer
const Ora = 2.35; //float
const Corretto = false; //boolean
echo gettype (Giorno) .  " ";
echo gettype (Mese).  " ";
echo gettype (Anno).  " ";
echo gettype (Ora).  " ";
echo gettype (Corretto).  " ";




$text1 = 'Marco';
$text2 = 'hai';
$text3 = 'sete';
$text4 = '?';
$text5 = 'Perchè';
$text6 = 'hai';
$text7 = 'bevuto';
$text8 = 'tutto';
echo ($text1) . " " . ($text2) . " " . ($text3) . " " . ($text4) . " " ;
echo ($text5) . " " . ($text6) . " " . ($text7) . " " . ($text8);


$words1 = [
    'nel',
    'mezzo',
    'di',
    'cammin',
    'di',
    'nostra',
    'vita',
    'words2' => [
    'mi ritrovai',
    'per una',
    'selva oscura',
    'che',
    'la diritta via',
    'era smarrita',
    ],
];
echo $words1[0] . " " . $words1[1] . " " . $words1[2] . " " . $words1[3] . " " . $words1[4] . " " . $words1[5] . " " . $words1[6] . "\n" . $words1['words2'][0] . " " . $words1['words2'][1] . " " . $words1['words2'][2] . " " . $words1['words2'][3] . " " . $words1['words2'][4] . " " . $words1['words2'][5];
