<?php

/**
 * Part of the FuelPHP framework.
 *
 * @package   Fuel\Fieldset\Input
 * @version   2.0
 * @license   MIT License
 * @copyright 2010 - 2013 Fuel Development Team
 */

namespace Fuel\Fieldset\Input;

use Fuel\Fieldset\Input;

/**
 * Defines a submit button
 *
 * @package Fuel\Fieldset\Input
 * @since   2.0.0
 * @author  Fuel Development Team
 */
class Submit extends Input
{

	public function __construct($name = '', array $attributes = [], $value = null)
	{
		$attributes['type'] = 'submit';
		parent::__construct($name, $attributes, $value);
	}

}
