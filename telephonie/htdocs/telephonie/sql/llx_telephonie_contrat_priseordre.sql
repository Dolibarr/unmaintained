-- ========================================================================
-- Copyright (C) 2005-2007 Rodolphe Quiedeville <rodolphe@quiedeville.org>
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
-- $Id: llx_telephonie_contrat_priseordre.sql,v 1.1 2009/10/20 16:19:20 eldy Exp $
-- $Source: /cvsroot/dolibarr/dolibarrmod/telephonie/htdocs/telephonie/sql/llx_telephonie_contrat_priseordre.sql,v $
--
-- ========================================================================
--
--
create table llx_telephonie_contrat_priseordre (
  rowid            integer AUTO_INCREMENT PRIMARY KEY,
  fk_contrat       integer NOT NULL,
  datepo           datetime,
  montant          real NOT NULL,
  fk_commercial    integer,
  fk_distributeur  integer,
  fk_user          integer,

  avance_pourcent  real,
  avance_duree     smallint,
  rem_pour_prev    real,
  rem_pour_autr    real,
  mode_paiement    enum('vir','pre') default 'pre'
)type=innodb;


