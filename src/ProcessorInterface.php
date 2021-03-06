<?php

namespace R2L;

/**
 * Interface ProcessorInterface
 *
 * @package R2L
 */
interface ProcessorInterface
{
    /**
     * Process the giving contents
     *
     * @param string $contents
     * @return string
     */
    public function process(string $contents): string;
}