<?php
/* Copyright (C) 2007 Patrick Raguin <patrick.raguin@gmail.com>
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

/**
	    \file       htdocs/compta/droitpret/pre.inc.php
        \ingroup    pret
		\brief      Fichier gestionnaire du menu de gauche de l'espace droitpret
		\version    $Id: pre.inc.php,v 1.1 2010/03/16 18:26:05 eldy Exp $
*/

require("../../main.inc.php");

function llxHeader($head = "", $title="", $help_url='')
{
	global $user, $conf, $langs;

	top_menu($head, $title);

	$menu = new Menu();


	// Produit specifique
	$dir = DOL_DOCUMENT_ROOT . "/droitpret/templates/";
	if(is_dir($dir) && ! empty($conf->droitpret->enabled))
	{
		if ($handle = opendir($dir))
		{
			while (($file = readdir($handle))!==false)
			{
				if (substr($file, strlen($file) -10) == '.class.php' && substr($file,0,8) == 'product.')
				{
					$parts = explode('.',$file);
					$classname = 'Product'.ucfirst($parts[1]);
					require_once($dir.$file);
					$module = new $classname();

					if ($module->active === '1' && $module->menu_add === 1)
					{
						$module->PersonnalizeMenu($menu);
						$langs->load("products_".$module->canvas);
						for ($j = 0 ; $j < sizeof($module->menus) ; $j++)
						{
							$menu->add_submenu($module->menus[$j][0], $langs->trans($module->menus[$j][1]));
						}
					}
				}
			}
			closedir($handle);
		}
	}

	left_menu($menu->liste, $help_url);
}

?>