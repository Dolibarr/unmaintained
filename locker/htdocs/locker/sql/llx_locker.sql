

-- ============================================================================
-- Copyright (C) 2008 Laurent Destailleur <eldy@users.sourceforge.net>
-- Copyright (C) 2008   < > 
--
-- This program is free software; you can redistribute it and/or modify
-- it under the terms of the GNU General Public License as published by
-- the Free Software Foundation; either version 2 of the License, or
-- (at your option) any later version.
--
-- This program is distributed in the hope that it will be useful,
-- but WITHOUT ANY WARRANTY; without even the implied warranty of
-- MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
-- GNU General Public License for more details.
--
-- You should have received a copy of the GNU General Public License
-- along with this program; if not, write to the Free Software
-- Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
--
-- $Id: llx_product/stock_Locker.sql,v 2.4 2007/12/02 21:51:12   Exp $
-- ============================================================================

CREATE TABLE llx_locker
(
	rowid INTEGER AUTO_INCREMENT PRIMARY KEY,
	code VARCHAR(20),
	libelle TEXT, 	
	fk_entrepot INTEGER

)type=innodb;













