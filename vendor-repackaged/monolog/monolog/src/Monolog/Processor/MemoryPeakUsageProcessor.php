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
 * Injects memory_get_peak_usage in all records
 *
 * @see Dreitier\WordPress\ContinuousDelivery\Vendor\Monolog\Processor\MemoryProcessor::__construct() for options
 * @author Rob Jensen
 */
class MemoryPeakUsageProcessor extends MemoryProcessor
{
    /**
     * @param  array $record
     * @return array
     */
    public function __invoke(array $record)
    {
        $bytes = memory_get_peak_usage($this->realUsage);
        $formatted = $this->formatBytes($bytes);

        $record['extra']['memory_peak_usage'] = $formatted;

        return $record;
    }
}
