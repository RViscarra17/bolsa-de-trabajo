<?php

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
    /**
     * Mensaje personalizado al tratar de consultar un registro que no existe.
     *
     * @return array
     */
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof ModelNotFoundException) {
            $model = app($exception->getModel());
            return \response()->json([
                'message' => method_exists($model, 'sinResultados') ?
                    $model->sinResultados() : 'No se encontró el registro',
            ], 404);
        }

        if ($exception instanceof NotFoundHttpException) {
            return \response()->json(['message' => 'Ruta no encontrada',], 404);
        }

        return parent::render($request, $exception);
    }
}
