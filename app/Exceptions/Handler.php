<?php

namespace App\Exceptions;

use CloudCreativity\LaravelJsonApi\Exceptions\HandlesErrors;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Neomerx\JsonApi\Exceptions\JsonApiException;

class Handler extends ExceptionHandler
{

    use HandlesErrors;

    protected $dontReport = [
      // ... other exception classes
      JsonApiException::class,
    ];

    // ...

  public function render($request, Exception $e)
  {
    if ($this->isJsonApi($request, $e)) {
      return $this->renderJsonApi($request, $e);
    }

    // do standard exception rendering here...
  }

  protected function prepareException(Exception $e)
  {
      if ($e instanceof JsonApiException) {
        return $this->prepareJsonApiException($e);
      }

      return parent::prepareException($e);
  }
}
