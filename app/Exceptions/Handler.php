<?php
namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use Throwable;

class Handler extends ExceptionHandler
{
    public function render($request, Throwable $exception)
{
    if ($request->expectsJson()) {
        if ($exception instanceof \Illuminate\Validation\ValidationException) {
            return response()->json([
                'status' => 'error',
                'message' => 'اعتبارسنجی ناموفق بود',
                'errors' => $exception->errors(),
            ], 422);
        }

        // می‌توانید خطاهای دیگر را هم مدیریت کنید (مثلاً خطاهای 404 یا خطاهای سرور)
        if ($exception instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
            return response()->json([
                'status' => 'error',
                'message' => 'منبع مورد نظر یافت نشد',
            ], 404);
        }

        // خطاهای پیش‌بینی نشده
        return response()->json([
            'status' => 'error',
            'message' => 'خطای سرور رخ داده است، لطفاً بعداً تلاش کنید',
        ], 500);
    }

    return parent::render($request, $exception);
}


    protected function invalidJson($request, ValidationException $exception)
    {
        return response()->json([
            'status' => 'error',
            'message' => 'Validation failed',
            'errors' => $exception->errors(),
        ], $exception->status);
    }

    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
