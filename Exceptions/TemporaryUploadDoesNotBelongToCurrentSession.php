<?php

declare(strict_types=1);

namespace Modules\Media\Exceptions;

<<<<<<< HEAD
<<<<<<< HEAD
class TemporaryUploadDoesNotBelongToCurrentSession extends \Exception
=======
use Exception;

class TemporaryUploadDoesNotBelongToCurrentSession extends Exception
>>>>>>> 49d7c0c (first)
=======
use Exception;

class TemporaryUploadDoesNotBelongToCurrentSession extends Exception
>>>>>>> master
{
    public static function create(): self
    {
        return new static('The session id of the given temporary upload does not match the current session id.');
    }
}
