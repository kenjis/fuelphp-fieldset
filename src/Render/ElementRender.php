<?php
/**
 * @package   Fuel\Fieldset
 * @version   2.0
 * @author    Fuel Development Team
 * @license   MIT License
 * @copyright 2010 - 2013 Fuel Development Team
 * @link      http://fuelphp.com
 */

namespace Fuel\Fieldset\Render;

use Fuel\Fieldset\Render;
use Fuel\Common\Table;
use Fuel\Fieldset\Security\CSRFProvider;
use Fuel\Fieldset\InputContainer;

/**
 * Renders an element in a form
 *
 * @package Fuel\Fieldset\Render
 * @since   2.0
 * @author  Fuel Development Team
 */
class ElementRender extends BasicRender
{

	protected $table;

	protected $container;
	
	/**
	 * @param CSRFProvider $csrf
	 *
	 * @since 2.0
	 */
	public function __construct(CSRFProvider $csrf = null)
	{
		parent::__construct($csrf);

		$this->table = new Table;
	}

	/**
	 * @param InputContainer $container
	 */
	public function setForm(InputContainer $container)
	{
		$this->container = $container;
	}

	/**
	 * Should return a html string of one emement
	 * 
	 * @param string $name
	 * @return string
	 */
	public function getHtml($name)
	{
		$element = $this->container->get($name);

		if ($element === null)
		{
			throw new \InvalidArgumentException('No such element: '.$name);
		}

		return $element->render($this)."\n";
	}

	/**
	 * Should return label text of one emement
	 * 
	 * @param string $name
	 * @return string
	 */
	public function getLabel($name)
	{
		$element = $this->container->get($name);

		if ($element === null)
		{
			throw new \InvalidArgumentException('No such element: '.$name);
		}

		return $this->container->get($name)->getLabel()."\n";
	}

}
