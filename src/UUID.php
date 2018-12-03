<?php

/**
 * UUID plugin for Craft CMS 3.x
 *
 * UUID Twig extension.
 *
 * @link      https://www.crafted.systems
 * @copyright Copyright (c) 2018 Crafted Systems
 */

namespace craftedsystems\uuid;

use craftedsystems\uuid\twigextensions\UUIDTwigExtension;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;

use yii\base\Event;

/**
 * UUID
 *
 * @author    Crafted Systems
 * @package   UUID
 * @since     1.0.0
 *
 */
class UUID extends Plugin
{
  /**
   * Static property that is an instance of this plugin class so that it can be accessed via
   * UUID::$plugin
   *
   * @var UUID
   */
  public static $plugin;

  /**
   * To execute your plugin’s migrations, you’ll need to increase its schema version.
   *
   * @var string
   */
  public $schemaVersion = '1.0.0';

  /**
   * Set our $plugin static property to this class so that it can be accessed via
   * UUID::$plugin
   *
   * Called after the plugin class is instantiated; do any one-time initialization
   * here such as hooks and events.
   *
   * If you have a '/vendor/autoload.php' file, it will be loaded for you automatically;
   * you do not need to load it in your init() method.
   *
   */
  public function init()
  {
    parent::init();
    self::$plugin = $this;

    Craft::$app->view->registerTwigExtension(new UUIDTwigExtension());

    Event::on(
      Plugins::class,
      Plugins::EVENT_AFTER_INSTALL_PLUGIN,
      function (PluginEvent $event) {
        if ($event->plugin === $this) {
          // We were just installed
        }
      }
    );

    /**
     * Logging in Craft involves using one of the following methods:
     *
     * Craft::trace(): record a message to trace how a piece of code runs. This is mainly for development use.
     * Craft::info(): record a message that conveys some useful information.
     * Craft::warning(): record a warning message that indicates something unexpected has happened.
     * Craft::error(): record a fatal error that should be investigated as soon as possible.
     *
     * Unless `devMode` is on, only Craft::warning() & Craft::error() will log to `craft/storage/logs/web.log`
     *
     * It's recommended that you pass in the magic constant `__METHOD__` as the second parameter, which sets
     * the category to the method (prefixed with the fully qualified class name) where the constant appears.
     *
     * To enable the Yii debug toolbar, go to your user account in the AdminCP and check the
     * [] Show the debug toolbar on the front end & [] Show the debug toolbar on the Control Panel
     *
     * http://www.yiiframework.com/doc-2.0/guide-runtime-logging.html
     */
    Craft::info(
      Craft::t(
        'uuid',
        '{name} plugin loaded',
        ['name' => $this->name]
      ),
      __METHOD__
    );
  }
}
