<?php
/**
 * @copyright  Copyright (C) 2014 - 2015 LYRASOFT Source Matters. All rights reserved.
 * @license    GNU Lesser General Public License version 3 or later..txt
 */

namespace Windwalker\Event\Test\Stub;

use Windwalker\Event\Event;

/**
 * A listener used to test the triggerEvent method in the dispatcher.
 * It will be added in third position.
 *
 * @since  1.0
 */
class ThirdListener
{
	/**
	 * Listen to onSomething.
	 *
	 * @param   Event  $event  The event.
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function onSomething(Event $event)
	{
		$listeners = $event->getArgument('listeners');

		$listeners[] = 'third';

		$event->setArgument('listeners', $listeners);
	}
}
