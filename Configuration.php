<?php

namespace App;

class Configuration
{
    /**
     * Le chemin du répertoire absolu du projet
     *
     * @return string
     */
    public static function getCheminProjet()
    {
        return dirname(__FILE__) . '/';
    }
}