<?php
/**
 * Akeeba Engine
 *
 * @package   akeebaengine
 * @copyright Copyright (c)2006-2020 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license   GNU General Public License version 3, or later
 *
 * Modified by dreitier on 09-December-2022 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Dreitier\WordPress\ContinuousDelivery\Vendor\Akeeba\Engine\Postproc\Connector\S3v4\Exception;

// Protection against direct access
use Exception;

defined('AKEEBAENGINE') or die();

/**
 * Invalid response body type
 */
class InvalidBody extends \RuntimeException
{
	public function __construct($message = "", $code = 0, Exception $previous = null)
	{
		if (empty($message))
		{
			$message = 'Invalid response body type';
		}

		parent::__construct($message, $code, $previous);
	}

}
