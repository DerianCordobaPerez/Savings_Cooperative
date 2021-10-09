<?php

namespace App\Helpers;

/**
 *
 */
class ModelsHelper
{
    /**
     * Returns model with key and value reference
     *
     * @param mixed $model
     * @param string $key
     * @param string $value
     * @return mixed
     */
    public static function getModel(mixed $model, string $key, string $value): mixed
    {
        return (new $model())->where($key, $value)->first();
    }

}
