<?php

/**
 * This file is part of the simple-svg libraries.
 *
 * (c) Vjacheslav Trushkin <cyberalien@gmail.com>
 *
 * @license MIT
 *
 * For the full copyright and license information, please view the license.txt
 * file that is available in this file's directory.
 */

namespace SimpleSVG\Icons;

use \Iconify\IconsJSON\Finder as Data;

class Finder
{
    /**
     * Get root directory of this package
     *
     * @return string
     */
    public static function rootDir()
    {
        return Data::rootDir();
    }

    /**
     * Return path to json file
     *
     * @param string $name Collection name
     * @return string Path to collection json file
     */
    public static function locate($name)
    {
        return Data::locate($name);
    }

    /**
     * Get list of collections
     *
     * @return array|null
     */
    public static function collections()
    {
        return Data::collections();
    }
}
