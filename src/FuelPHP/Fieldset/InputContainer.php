<?php

/**
 * Part of the FuelPHP framework.
 *
 * @package   FuelPHP\Fieldset
 * @version   2.0
 * @license   MIT License
 * @copyright 2010 - 2013 Fuel Development Team
 */

namespace FuelPHP\Fieldset;

use FuelPHP\Common\DataContainer;
use FuelPHP\Fieldset\Render\Renderable;

/**
 * Defines a common interface for objects that can handle input data
 * 
 * @package FuelPHP\Fieldset
 * @since   2.0.0
 * @author  Fuel Development Team
 */
abstract class InputContainer extends DataContainer implements Renderable
{
	
}