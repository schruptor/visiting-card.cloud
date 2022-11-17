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

if (! function_exists('getInformationTypes')) {
    /**
     * @throws Exception
     */
    function getInformationTypes(): Array
    {
        $result = [];

        foreach (config('card.information.type') as $name => $type) {
            $result[$name] = trans('information.type.'.$name);
        }

        return $result;
    }
}
