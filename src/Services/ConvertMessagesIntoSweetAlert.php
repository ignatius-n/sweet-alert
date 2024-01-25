<?php

namespace Ignatiusn\SweetAlert\Services;

use Closure;

class ConvertMessagesIntoSweetAlert
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->session()->has('success')) {
            swal()->success($request->session()->get('success'))->persistent();
        }

        if ($request->session()->has('warning')) {
            swal()->warning($request->session()->get('warning'))->persistent();
        }

        if ($request->session()->has('info')) {
            swal()->info($request->session()->get('info'))->persistent();
        }

        if ($request->session()->has('message')) {
            swal()->message($request->session()->get('message'))->persistent();
        }

        if ($request->session()->has('basic')) {
            swal()->basic($request->session()->get('basic'));
        }

        if ($request->session()->has('errors')) {
            $message = $request->session()->get('errors');

            if (! is_string($message)) {
                $message = $this->prepareErrors($message->getMessages());
            }

            swal()->error($message)->html()->persistent();
        }

        return $next($request);
    }

    /**
     * Retrieve the errors from ViewErrorBag.
     *
     *
     * @return string
     */
    private function prepareErrors($errors)
    {
        $errors = collect($errors);

        return $errors->flatten()->implode('<br />');
    }
}
