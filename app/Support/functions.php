<?php

if (! function_exists('getCardTypes')) {
    /**
     * @throws Exception
     */
    function getCardTypes(): Array
    {
        $result = [];

        foreach (config('card.type') as $name => $type) {
            $result[$name] = trans('card.'.$name);
        }

        return $result;
    }
}
