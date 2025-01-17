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
defined('AKEEBAENGINE') or die();

use Exception;

/**
 * Invalid Amazon S3 region
 */
class InvalidRegion extends ConfigurationError
{
	public function __construct($message = "", $code = 0, Exception $previous = null)
	{
		if (empty($message))
		{
			$message = 'The Amazon S3 region provided is invalid.';
		}

		parent::__construct($message, $code, $previous);
	}

}
