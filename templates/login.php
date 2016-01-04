<?php

/**
 * @author Shiva Kumar Jakkani <shivakumarjakkani@gmail.com>
 *
 * @copyright Copyright (C) 2016 
 * @license GPL-3.0 
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

print <<<_LOGIN
	<!-- Login form -->
	<div class="outer">
		<div class="inner">
			<div class="group hgroup">
				<h4>Welcome to myBox Loign</h4>
				<h5>$adminStr</h5>
			</div>
			<form action="index.php" method="post">
				<div class="group input-form">
					<div class="input-icon user-icon"></div>
					<input type="text" placeholder="$user" name="uname">
				</div>
				<div class="group input-form">
					<div class="input-icon pass-icon"></div>
					<input type="password" placeholder="PASS WORD" name="pword">
				</div>
				<div class="group input-form btn">
					<input type="submit" value="CREATE" name="submit">
				</div>
			</form>
		</div>
	</div>
_LOGIN;
?>