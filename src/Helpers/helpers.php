<?php

/**
 * Helper functions.
 *
 * @version 0.0.1
 *
 * @since 0.0.1
 */
if (!function_exists('emoji')) :

    /**
     * [emoji description].
     *
     * @param $key
     *
     * @return mixed
     */
    function emoji($key = null)
    {
        $emoji = app('emoji');

        if (is_null($key)) {
            return $emoji;
        }

        return $emoji->get($key);
    }

endif;
