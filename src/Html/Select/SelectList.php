<?php
/**
 * Part of Windwalker project. 
 *
 * @copyright  Copyright (C) 2014 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later;
 */

namespace Windwalker\Html\Select;

use Windwalker\Dom\HtmlElement;
use Windwalker\Html\Option;

/**
 * The SelectList class.
 * 
 * @since  {DEPLOY_VERSION}
 */
class SelectList extends HtmlElement
{
	/**
	 * Property selected.
	 *
	 * @var  mixed
	 */
	protected $selected = null;

	/**
	 * Element content.
	 *
	 * @var  Option[]
	 */
	protected $content;

	/**
	 * Constructor
	 *
	 * @param string     $name
	 * @param mixed|null $options
	 * @param array      $attribs
	 * @param mixed      $selected
	 *
	 * @throws \InvalidArgumentException
	 */
	public function __construct($name, $options, $attribs = array(), $selected = null)
	{
		$attribs['name'] = $name;
		$attribs['selected'] = $selected ? 'selected' : '';

		parent::__construct('select', $options, $attribs);
	}

	/**
	 * toString
	 *
	 * @param bool $forcePair
	 *
	 * @return  string
	 */
	public function toString($forcePair = false)
	{
		$this->prepareOptions();

		return parent::toString($forcePair);
	}

	/**
	 * prepareOptions
	 *
	 * @return  void
	 */
	protected function prepareOptions()
	{
		foreach ($this->content as $option)
		{
			if ($option->getValue() == $this->getSelected())
			{
				$option['selected'] = 'selected';

				break;
			}
		}
	}

	/**
	 * Method to get property Selected
	 *
	 * @return  mixed
	 */
	public function getSelected()
	{
		return $this->selected;
	}

	/**
	 * Method to set property selected
	 *
	 * @param   mixed $selected
	 *
	 * @return  static  Return self to support chaining.
	 */
	public function setSelected($selected)
	{
		$this->selected = $selected;

		return $this;
	}
}
 