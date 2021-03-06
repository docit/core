<?php
/**
 * Part of the Sebwite PHP packages.
 *
 * License and copyright information bundled with this package in the LICENSE file
 */
namespace Docit\Core\Log;

use Docit\Core\Contracts\Log;
use Illuminate\Log\Writer as BaseWriter;

/**
 * This is the class Logger.
 *
 * @package        Docit\Core
 * @author         Sebwite
 * @copyright      Copyright (c) 2015, Sebwite. All rights reserved
 */
class Writer extends BaseWriter implements Log
{
    public function __construct(\Monolog\Logger $monolog, \Illuminate\Contracts\Events\Dispatcher $dispatcher)
    {
        parent::__construct($monolog, $dispatcher);

    }

}