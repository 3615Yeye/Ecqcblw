<?php

/* * *************************************************************
 *  Copyright notice
 *
 *  (C) 2015 Mittwald CM Service GmbH & Co. KG <opensource@mittwald.de>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 * ************************************************************* */

namespace Yeye\Ecqcblw\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Controller pour passer la configuration TypoScript en front
 *
 * @author Ronan Le Pivaingt r.lepivaingt@gmail.com
 * @package Yeye
 */
class EcqcblwController extends ActionController {

    /**
     * Method provides link generation
     *
     */
    public function weekendAction() {
        $this->view->assign('settings', $this->settings);
    }

    /**
     * Méthode pour faire l'appel à l'API
     * @return array
     */
    public function ecqcblwAction() {
        return ["test"];
    }
}
