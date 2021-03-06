<?php
// Template for drawing the height-restricted blocks on the portal pages
//
// This template expects that the following variables will be set
// $id - the DOM id for the block div
// $title - the title of the block
// $class - the additional class of the block
// $content - the content of the block
//
// webtrees: Web based Family History software
// Copyright (C) 2014 webtrees development team.
//
// Derived from PhpGedView
// Copyright (C) 2010 PGV Development Team.  All rights reserved.
//
// This program is free software; you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation; either version 2 of the License, or
// (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with this program; if not, write to the Free Software
// Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA

if (!defined('WT_WEBTREES')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}

?>
<div id="<?php echo $id; ?>" class="block" >
	<table class="blockheader">
		<tr>
			<td class="blockh1" ></td>
			<td class="blockh2" >
				<div class="blockhc"><b><?php echo $title; ?></b></div>
			</td>
			<td class="blockh3"></td>
		</tr>
	</table>
	<div class="blockcontent <?php echo $class; ?>">
		<div class="small_inner_block">
		<?php echo $content; ?>
		</div>
	</div>
</div>
