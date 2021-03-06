<?PHP
/* Copyright (C) 2006 Rodolphe Quiedeville <rodolphe@quiedeville.org>
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
 * $Id: search-line-reject-with-traffic.php,v 1.1 2009/10/20 16:19:21 eldy Exp $
 * $Source: /cvsroot/dolibarr/dolibarrmod/telephonie/htdocs/telephonie/script/tools/search-line-reject-with-traffic.php,v $
 *
 * Recherche des lignes rejet�es avec traffic
 *
 */
require ("../../../master.inc.php");
/*
 *
 */
$datetime = time();
$datemax = $datetime - (86400 * 90);

$sql  = "SELECT ligne";
$sql .= " FROM ".MAIN_DB_PREFIX."telephonie_societe_ligne";
$sql .= " WHERE statut = 7";

$re2sql = $db->query($sql) ;

if ( $re2sql )
{
  $nu2m = $db->num_rows($re2sql);
  print "$nu2m lignes\n";
  $j = 0;
  while ($j < $nu2m)
    {
      $row = $db->fetch_row($re2sql);

      $sqlc  = "SELECT count(*)";
      $sqlc .= " FROM ".MAIN_DB_PREFIX."telephonie_communications_details";
      $sqlc .= " WHERE ligne = '".$row[0]."'";

      $resqlc = $db->query($sqlc) ;
      if ( $resqlc )
	{
	  $rowc = $db->fetch_row($resqlc);

	  if ($rowc[0] > 0)
	    {
	      $sqlm  = "SELECT unix_timestamp(max(date)) as md";
	      $sqlm .= " FROM ".MAIN_DB_PREFIX."telephonie_communications_details";
	      $sqlm .= " WHERE ligne = '".$row[0]."'";
	      $sqlm .= " AND date > '2006-01-01';";
	      
	      $resqlm = $db->query($sqlm) ;
	      if ( $resqlm )
		{
		  $rowm = $db->fetch_row($resqlm);
		  
		  print $row[0]." ".strftime("%d/%m/%Y",$rowm[0])." ".$rowc[0]."\n";
		  
		}
	    }
	}
      $j++;
    }
}
else
{
  print $db->error();
}

/*
 * Lignes en commandes
 *
 *
 *
 */
print "Lignes en commande\n";

$sql  = "SELECT ligne";
$sql .= " FROM ".MAIN_DB_PREFIX."telephonie_societe_ligne";
$sql .= " WHERE statut = 2";

$re2sql = $db->query($sql) ;

if ( $re2sql )
{
  $nu2m = $db->num_rows($re2sql);
  print "$nu2m lignes\n";
  $j = 0;
  while ($j < $nu2m)
    {
      $row = $db->fetch_row($re2sql);

      $sqlc  = "SELECT count(*)";
      $sqlc .= " FROM ".MAIN_DB_PREFIX."telephonie_communications_details";
      $sqlc .= " WHERE ligne = '".$row[0]."'";

      $resqlc = $db->query($sqlc) ;
      if ( $resqlc )
	{
	  $rowc = $db->fetch_row($resqlc);

	  if ($rowc[0] > 0)
	    {
	      $sqlm  = "SELECT unix_timestamp(max(date)) as md";
	      $sqlm .= " FROM ".MAIN_DB_PREFIX."telephonie_communications_details";
	      $sqlm .= " WHERE ligne = '".$row[0]."'";
	      $sqlm .= " AND date > '2006-01-01';";
	      
	      $resqlm = $db->query($sqlm) ;
	      if ( $resqlm )
		{
		  $rowm = $db->fetch_row($resqlm);
		  
		  print $row[0]." ".strftime("%d/%m/%Y",$rowm[0])." ".$rowc[0]."\n";
		  
		}
	    }
	}
      $j++;
    }
}
else
{
  print $db->error();
}


$db->close();
?>
