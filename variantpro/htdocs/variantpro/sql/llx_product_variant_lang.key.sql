-- ============================================================================
-- Copyright (C) 2010 Regis Houssin  <regis@dolibarr.fr>
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
-- $Id: llx_product_variant_lang.key.sql,v 1.1 2010/02/23 14:16:05 hregis Exp $
-- ============================================================================


ALTER TABLE llx_product_variant_lang ADD UNIQUE INDEX uk_product_variant_lang (fk_product_variant, lang);


ALTER TABLE llx_product_variant_lang ADD CONSTRAINT fk_product_variant_lang_fk_product_variant 	FOREIGN KEY (fk_product_variant) REFERENCES llx_product_variant (rowid);
