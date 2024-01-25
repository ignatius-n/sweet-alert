<?php

    if(! function_exists('swal'))
    {
        function swal($title = null, $message = null, $icon = null): mixed
        {
            // return view('components.swal', compact('title', 'text', 'icon'));
            $notifier = app('ignatius-n.sweet-alert');

            if (! is_null($message)) {
                return $notifier->message($message, $title);
            }

            return $notifier;
        }
    }
