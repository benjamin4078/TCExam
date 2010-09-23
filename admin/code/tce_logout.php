<?php
//============================================================+
// File name   : tce_logout.php
// Begin       : 2001-09-28
// Last Update : 2010-09-23
//
// Description : Destroy user's session (logout).
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com S.r.l.
//               Via della Pace, 11
//               09044 Quartucciu (CA)
//               ITALY
//               www.tecnick.com
//               info@tecnick.com
//
// License:
//    Copyright (C) 2004-2010  Nicola Asuni - Tecnick.com S.r.l.
//
//    This program is free software: you can redistribute it and/or modify
//    it under the terms of the GNU Affero General Public License as
//    published by the Free Software Foundation, either version 3 of the
//    License, or (at your option) any later version.
//
//    This program is distributed in the hope that it will be useful,
//    but WITHOUT ANY WARRANTY; without even the implied warranty of
//    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//    GNU Affero General Public License for more details.
//
//    You should have received a copy of the GNU Affero General Public License
//    along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
//    Additionally, you can't remove, move or hide the original TCExam logo,
//    copyrights statements and links to Tecnick.com and TCExam websites.
//
//    See LICENSE.TXT file for more information.
//============================================================+

/**
 * Destroy user's session (logout).
 * @package com.tecnick.tcexam.admin
 * @author Nicola Asuni
 * @copyright Copyright © 2004-2010, Nicola Asuni - Tecnick.com S.r.l. - ITALY - www.tecnick.com - info@tecnick.com
 * @license http://www.fsf.org/licensing/licenses/agpl-3.0.html GNU Affero General Public License
 * @link www.tecnick.com
 * @since 2001-09-28
 * @uses tce_functions_session.php
 */

/**
 */

require_once('../config/tce_config.php');
require_once('../../shared/code/tce_functions_session.php');

// Destroys all user's session data
session_unset();
session_destroy();

if(!isset($current_page)) {
	$current_page = '../code/index.php?logout=1';
} elseif (strpos($current_page, '?') === false) {
	$current_page .= '?logout=1';
} else {
	$current_page .= '&amp;logout=1';
}

echo '<'.'?xml version="1.0" encoding="'.$l['a_meta_charset'].'"?'.'>'.K_NEWLINE;
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">'.K_NEWLINE;
echo '<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="'.$l['a_meta_language'].'" lang="'.$l['a_meta_language'].'" dir="'.$l['a_meta_dir'].'">'.K_NEWLINE;
echo '<head>'.K_NEWLINE;
echo '<title>LOGOUT</title>'.K_NEWLINE;
echo '<meta http-equiv="refresh" content="0;url='.$current_page.'" />'.K_NEWLINE; //reload page
echo '</head>'.K_NEWLINE;
echo '<body>'.K_NEWLINE;
echo '<a href="'.$current_page.'">LOGOUT...</a>'.K_NEWLINE;
echo '</body>'.K_NEWLINE;
echo '</html>'.K_NEWLINE;

//============================================================+
// END OF FILE
//============================================================+
