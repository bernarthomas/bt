<?php

namespace App\controlleur;

use App\Configuration;
use Cadre\Vue;
use Exception;

class Page1
{
    /**
     * @throws Exception
     */
    public function __invoke()
    {
        $cheminProjet = Configuration::getCheminProjet();
        $donnees = [
            'donnees' => ['test' => 'TEST'],
            'titre' => 'Page 1',
            'styles' => ['ecran.css']
        ];
        $templates = [
            'template/base_avant_body.phtml',
            $cheminProjet . 'template/menu_gauche.phtml',
            $cheminProjet . 'template/page1.phtml',
            'template/base_apres_body.phtml'
        ];
        (new Vue($templates, $donnees))->affiche();
    }
}