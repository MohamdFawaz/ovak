<?php
use Illuminate\Contracts\View\Factory as ViewFactory;

if (! function_exists('view_front')) {
    /**
     * Get the evaluated view contents for the given view.
     *
     * @param  string|null  $view
     * @param  \Illuminate\Contracts\Support\Arrayable|array  $data
     * @param  array  $mergeData
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    function view_front($view = null, $data = [], $mergeData = [])
    {
        $factory = app(ViewFactory::class);

        if (func_num_args() === 0) {
            return $factory;
        }

        $view = substr($view, 0, 4) . app()->getLocale() . "." . substr($view, 4);
        return $factory->make($view, $data, $mergeData);
    }
}
