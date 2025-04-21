<?php

/*
 * This file is part of the EPHPIC package.
 *
 * (c) Sina Kuhestani <sinakuhestani@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EPHPIC\Foundation;

/**
 * Class Task
 *
 * This abstract class serves as a blueprint for creating task-related functionalities
 * within the EPHPIC package. It defines a single method, `execute()`, which must be
 * implemented by any concrete subclass. This design allows for a consistent interface
 * for executing tasks while enabling flexibility for specific implementations.
 */

abstract class Task
{
    abstract public function execute();
}