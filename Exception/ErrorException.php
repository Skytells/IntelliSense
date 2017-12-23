<?php
/**
 * IntelliSense - php errors for cool kids
 * @package IntelliSense Debugger
 */

namespace IntelliSense\Exception;

use ErrorException as BaseErrorException;

/**
 * Wraps ErrorException; mostly used for typing (at least now)
 * to easily cleanup the stack trace of redundant info.
 */
class ErrorException extends BaseErrorException
{
}
