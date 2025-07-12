<?php
/**
 * Yii bootstrap file.
 * @package system
 */

// 1) tell Yii where its “system” folder lives
defined('YII_PATH') or define('YII_PATH', __DIR__);

// 2) load the core class which registers the autoloader for all system.* aliases
require_once YII_PATH . '/YiiBase.php';

/**
 * Yii is a helper class serving common framework functionalities.
 * You can extend this class to customize functionality.
 *
 * @package system
 * @since 1.0
 */
class Yii extends YiiBase
{
}