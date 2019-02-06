<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\CustomDirPlugin;

class Controller extends \Piwik\Plugin\Controller
{
    public function index()
    {
        return $this->renderTemplate('index', array(
            'answerToLife' => 42
        ));
    }
}