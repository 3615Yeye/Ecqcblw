<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Stefan Sprenger <stefan.sprenger@dkd.de>
 *  (c) 2012-2015 Ingo Renner <ingo@typo3.org>
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
 ***************************************************************/

// use TYPO3\CMS\Core\Utility\GeneralUtility;
// use TYPO3\CMS\Core\Utility\HttpUtility;

// header(HttpUtility::HTTP_STATUS_400);
header('Content-Type: application/json; charset=utf-8');

$response = file_get_contents('http://estcequecestbientotleweekend.fr/api');
$response = json_decode($response);

echo file_get_contents('http://estcequecestbientotleweekend.fr/api');

exit();
