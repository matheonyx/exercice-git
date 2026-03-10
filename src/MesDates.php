<?php

/**
 * Fichier MesDates pour l'exercice PHPCS
 *
 * PHP version 7.4
 *
 * @category Library
 * @package   UPJV
 * @author    Mathe <mathe@etudiant.upjv.fr>
 * @license   http://opensource.org/licenses/gpl-license.php GNU
 * @link      http://localhost
 */

namespace UPJV;

use DateTime;

/**
 * Classe MesDates
 *
 * @category Library
 * @package   UPJV
 * @author    Mathe <mathe@etudiant.upjv.fr>
 * @license   http://opensource.org/licenses/gpl-license.php GNU
 * @link      http://localhost
 */
class MesDates
{
    /**
     * Renvoie la date de demain en JSON
     *
     * @return string
     */
    public function demain()
    {
        $date = new DateTime('tomorrow');
        $data = array('demain' => $date->format('d-m-Y'));
        return (string)json_encode($data);
    }
}
