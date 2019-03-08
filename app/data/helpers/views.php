<?php

    if (!function_exists('view')) {
        function view($view = null, $data = []) {
            echo $GLOBALS['blade']->make($view)->with($data)->render();
        }
    }