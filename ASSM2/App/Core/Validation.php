<?php

namespace App\Core;

class Validation
{

    public static function email($value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL) !== false;
    }

    public static function required($value)
    {
        return empty($value);
    }

    public static function minLength($value, $minLength)
    {
        $length = mb_strlen($value, 'UTF-8');
        return $length >= $minLength;
    }

    public static function maxLength($value, $maxLength)
    {
        $length = mb_strlen($value);
        return $length <= $maxLength;
    }

    // public static function username($value){
    //     $pattern = '/^[a-zA-Z0-9_]   $/';
    //     return
    // }

    public static function date($value)
    {
        // Chuyển đổi ngày thành dạng timestamp Unix
        $timestamp = strtotime($value);

        // Kiểm tra xem ngày có chuyển đổi thành timestamp không
        if ($timestamp === false) {
            return false; 
        }

        // Lấy ngày hiện tại
        $currentDate = date('Y-m-d');

        // Kiểm tra xem ngày là ngày trong tương lai và không phải là ngày trong quá khứ
        return $value >= $currentDate;

    }

}