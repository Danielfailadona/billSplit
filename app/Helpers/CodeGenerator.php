<?php

namespace App\Helpers;

class CodeGenerator
{
    /**
     * Generate a unique invitation code.
     *
     * @param int $length
     * @return string
     */
    public static function invitationCode($length = 10)
    {
        return strtoupper(substr(md5(uniqid()), 0, $length));
    }

    /**
     * Generate a random alphanumeric string.
     *
     * @param int $length
     * @return string
     */
    public static function randomString($length = 8)
    {
        return strtoupper(bin2hex(random_bytes($length / 2)));
    }

    /**
     * Generate a unique bill code.
     *
     * @return string
     */
    public static function billCode()
    {
        return 'BILL-' . self::randomString(6);
    }
}
