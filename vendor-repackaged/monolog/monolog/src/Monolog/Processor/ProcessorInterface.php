<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Modified by dreitier on 09-December-2022 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Dreitier\WordPress\ContinuousDelivery\Vendor\Monolog\Processor;

/**
 * An optional interface to allow labelling Monolog processors.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
interface ProcessorInterface
{
    /**
     * @return array The processed records
     */
    public function __invoke(array $records);
}
