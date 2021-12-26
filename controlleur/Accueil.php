<?php

namespace App\controlleur;

use App\Configuration;
use Cadre\Vue;
use Exception;
use TableauDefilant\Table;


class Accueil
{
    /**
     * @throws Exception
     */
    public function __invoke()
    {
        $cheminProjet = Configuration::getCheminProjet();
        $data = [
            ['1.1', '1.2', '1.3'],
            ['2.1', '2.2', '2.3'],
            ['3.1', '3.2', '3.3']
        ];

//        $table = '<table>';
//        foreach ($data as  $valeurs) {
//            $table .= '<tr>';
//            foreach($valeurs as $valeur) {
//                $table .= "<td>$valeur</td>";
//            }
//            $table .= '</tr>';
//        }
//        $table .= '</table>';

        $donnees = [
//            'donnees' => ['un' => 'UN', 'deux' => 'DEUX', 'trois' => 'TROIS'],
//            'table' => $table,
            'table' => (new Table(['col1', 'col2'], ['UN', 'DEUX', 'TROIS']))->affiche(),
            'titre' => 'Test affichage tableau',
            'styles' => ['ecran.css'],

        ];
        $templates = [
            'template/base_avant_body.phtml',
            $cheminProjet . 'template/menu_gauche.phtml',
            $cheminProjet . 'template/index.phtml',
            'template/base_apres_body.phtml'
        ];
        (new Vue($templates, $donnees))->affiche();
    }
}