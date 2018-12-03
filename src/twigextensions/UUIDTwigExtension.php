<?php

/**
 * UUID plugin for Craft CMS 3.x
 *
 * UUID Twig extension.
 *
 * @link      https://www.crafted.systems
 * @copyright Copyright (c) 2018 Crafted Systems
 */

namespace craftedsystems\uuid\twigextensions;

use craftedsystems\uuid\UUID;
use craft\helpers\StringHelper;

use Craft;

/**
 * Twig can be extended in many ways; you can add extra tags, filters, tests, operators,
 * global variables, and functions. You can even extend the parser itself with
 * node visitors.
 *
 * http://twig.sensiolabs.org/doc/advanced.html
 *
 * @author    Crafted Systems
 * @package   UUID
 * @since     1.0.0
 */
class UUIDTwigExtension extends \Twig_Extension
{
  /**
   * Returns the name of the extension.
   *
   * @return string The extension name
   */
  public function getName()
  {
    return 'UUID';
  }

  /**
   * Returns an array of Twig functions, used in Twig templates via:
   *
   *      {% set this = someFunction('something') %}
   *      {% set uuid = getUUID() %}
   *
   * @return array
   */
  public function getFunctions()
  {
    return [
      new \Twig_SimpleFunction('getUUID', [$this, 'getUUID']),
    ];
  }

  /**
   * Get UUID
   *
   * @return string
   */
  public function getUUID()
  {
    return StringHelper::UUID();
  }
}
