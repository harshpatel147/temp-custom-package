<?php
namespace Smiley\UserCrud;

use Exception;
use Illuminate\Support\Facades\Log;

class UserCrud
{
    /**
     * get instance of Model Class. 
     *
     * @param string $attr // model attribute name which is defined in package config file
     * @return object|null 
     * 
     * if model attribute not match in config file then it return null, otherwise it will return object of model class 
     */
    public static function getModel($attr)
    {
        try { 
            $classname = config('usercrud.models.' . $attr);
            if($classname){
                return new $classname();
            }else{
                throw new \Exception('Class name must be a valid object or a string. Model Class not found');
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }
    }
}