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

/**
 * Class Version
 * Implements two methods to give the information about mybox and PHP version
 */
class Version {
    const MB_MAJOR_VERSION = '0';
    const MB_MINOR_VERSION = '0';
    const MB_EXTRA_VERSION = 'alpha';
    
    /**
     * 
     * @return string
     */
    public static function getVersion(){
        return self::MB_MAJOR_VERSION.".".self::MB_MINOR_VERSION. "_".self::MB_EXTRA_VERSION;
    }
    /**
     * checkPHPVersion() method checks which version of the PHP version currently used
     * by the server. It informs the admin to upgrade if necessary
     * @return string
     */
    public static function checkPHPVersion(){
        $output = "";
        if(version_compare(PHP_VERSION, '5.6.16', '<')){
            $output .= print '<h2> This '. self::__toString() .' requires atleast PHP 5.6.16 version </h2>';
            $output .= print '<h4> Your using the PHP ' . \PHP_VERSION . ' version </h3>';
            $output .= print '<h4> Please upgrade your PHP version to use mybox </h3>';
        }
        return $output;
    }
    
    /**
     * __toString() String version of the mybox 
     * @return string
     */
    public function __toString() {
        return "mybox-".self::getVersion();
    }
}
 ?>   