<?php
/* Copyright (C) 2003 Rodolphe Quiedeville <rodolphe@quiedeville.org>
 * Copyright (C) 2006 Laurent Destailleur  <eldy@users.sourceforge.net>
 * Copyright (C) 2006 Jean Heimburger  <jean@tiaris.info>
 * Copyright (C) 2009      Jean-Francois FERRY    <jfefe@aternatik.fr>
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
 *
 * $Id: pre.inc.php,v 1.2 2010/01/01 19:18:34 jfefe Exp $
 */
 
/**
        \file       htdocs/thelia_ws/clients/pre.inc.php
		\brief      Fichier gestionnaire du menu de gauche
		\version    $Revision: 1.2 $
*/

require("../../main.inc.php");
require("./thelia_customer.class.php");

function llxHeader($head = "", $urlp = "")
{
	global $user, $conf, $langs;
	$langs->load("shop");
	
	top_menu($head);
	
	$menu = new Menu();
   
   $menu->add(DOL_URL_ROOT."/thelia_ws/index.php", $langs->trans("TheliaShop"));
   $menu->add_submenu(DOL_URL_ROOT."/thelia_ws/produits/index.php", $langs->trans("Products"));
   $menu->add_submenu(DOL_URL_ROOT."/thelia_ws/produits/OSCvente.php", $langs->trans("AddProd"));
   $menu->add_submenu(DOL_URL_ROOT."/thelia_ws/produits/categories.php", $langs->trans("Categories"));
   $menu->add_submenu(DOL_URL_ROOT."/thelia_ws/clients/index.php", $langs->trans("Clients"));
   $menu->add_submenu(DOL_URL_ROOT."/thelia_ws/commandes/index.php", $langs->trans("Commandes"));
	
	left_menu($menu->liste);
}

?>