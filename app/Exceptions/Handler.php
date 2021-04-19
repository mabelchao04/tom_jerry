<?php

namespace App\Exceptions;

Use Throwable;
use App\Traits\ApiResponseTrait; //引用特徵
use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\Access\AuthorizationExceptoin;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

class Handler extends ExceptionHandler
{
    use ApiResponseTrait; //使用特徵，類似將Trait撰寫的方法貼到這個類別中

    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        \Illuminate\Auth\AuthenticationException::class,
        \Illuminate\Auth\Access\AuthorizationException::class,
        \Symfony\Component\HttpKernel\Exception\HttpException::class,
        \Illuminate\Database\Eloquent\ModelNotFoundException::class,
        \Illuminate\Session\TokenMismatchException::class,
        \Illuminate\Validation\ValidationException::class,
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
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Throwable  $exception
     * @return void
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Throwable $exception)
    {
        //dd($exception);
        
        if ($request->expectsJson()){
            // 1.Model 找不到資源
            if ($exception instanceof ModelNotFoundException){
                // 呼叫特徵的方法 errorResponse
                return $this->errorResponse(
                    '找不到資源',
                    Response::HTTP_NOT_FOUND
                );
            }
            // 2.網址輸入錯誤
            if ($exception instanceof NotFoundHttpException) {
                return $this->errorResponse(
                    '無法找到此網址',
                    Response::HTTP_NOT_FOUND
                );
            }
            // 3.網址不允許該請求動詞
            if ($exception instanceof MethodNotAllowedHttpException) {
                return $this->errorResponse(
                    $exception->getMessage(), //回傳例外內的訊息
                    Response::HTTP_METHOD_NOT_ALLOWED
                );
            }
            // 4.passport憑證異常
            if ($exception instanceof AuthorizationException) {
                return $this->errorResponse(
                    $exception->getMessage(), //回傳例外內的訊息
                    Response::HTTP_FORBIDDEN
                );
            }
        }

        return parent::render($request, $exception);
    }

    /**
     * Convert an authentication exception into an unauthenticated response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Auth\AuthenticationException  $exception
     * @return \Illuminate\Http\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            //return response()->json(['error' => 'Unauthenticated.'], 401);
            return $this->errorResponse(
                $exception->getMessage(),
                Response::HTTP_UNAUTHORIZED
            );
        }
        else {
            //客戶端非請求JSON格式轉回登入畫面
            return redirect()->guest($exception->redirectTo() ?? route('login'));
        }
        
    }
}
