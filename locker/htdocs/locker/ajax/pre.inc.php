<?php
//Start of user code copyright htdocs/product/stock/ajax/pre.inc.php

	
	
	
	
/* Copyright (C) 2003      Rodolphe Quiedeville <rodolphe@quiedeville.org>
 * Copyright (C) 2004-2008 Laurent Destailleur  <eldy@users.sourceforge.net>
 * Copyright (C) 2008 Samuel  Bouchet <samuel.bouchet@auguria.net>
 * Copyright (C) 2008 Patrick Raguin  <patrick.raguin@auguria.net>
 * Copyright (C) 2008   < > 
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
 */

/**     \defgroup   product/stock     Module product/stock
        \brief       
*/

/**
        \file       htdocs/product/stock/ajax/pre.inc.php
        \ingroup    product/stock
        \brief      Description and activation file for Module product/stock
		\version	2.4
		\author		 
*/
//End of user code
require("../../../main.inc.php");
require("../lib.php");

//Inclusion des DAO et des Services n?cessaires
require("../dao_locker.class.php");
require("../service_locker.class.php");

//Start of user code UserCode htdocs/product/stock/ajax/pre.inc.php
function llxHeader($langs, $head = "", $title="", $help_url='')
{

 	top_menu($head, $title);
	
	$menu = new Menu();
	
	left_menu($menu->liste, $help_url);
}
//End of user code
?>
