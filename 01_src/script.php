<?php
/**
 * @package     pkg_r3dcomments
 * @version     6.0.6
 * @date        2025-11-22
 * @copyright   Copyright (C) 2025. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Richard Dvořák, <dev@r3d.de> - https://r3d.de
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Installer\Adapter\PackageAdapter;
use Joomla\CMS\Installer\InstallerScript;

class R3dcommentsInstallerScript extends InstallerScript
{
    protected $minimumPhp = '8.2';
    protected $minimumJoomla = '5.0';

    /**
     * Preflight – läuft vor Installation/Update
     */
    public function preflight($type, $parent)
    {
        if (!parent::preflight($type, $parent)) {
            return false;
        }

        return true;
    }

    /**
     * Postflight – läuft nach Installation/Update
     */
    public function postflight($type, PackageAdapter $parent): bool
    {
        if ($type === 'uninstall') {
            return true;
        }

        // Optional: Success message
        Factory::getApplication()->enqueueMessage(
            'R3D Comments wurde erfolgreich installiert.',
            'success'
        );

        return true;
    }
}
