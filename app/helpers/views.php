<?php

    function view($view = null, $data = []) {
        echo html($view, $data);
    }

    // if (!function_exists('php')) {
    function html($view = null, $data = []) {
        return $GLOBALS['blade']->view()->make($view)->with($data)->render();
    }
    // }