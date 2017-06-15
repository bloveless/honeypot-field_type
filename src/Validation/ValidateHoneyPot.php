<?php namespace Fritzandandre\HoneypotFieldType\Validation;

use Fritzandandre\HoneypotFieldType\HoneypotFieldType;

/**
 * Class ValidateHoneyPot
 *
 * @link    http://fritzandandre.com
 * @author  Brennon Loveless <brennon@fritzandandre.com>
 * @package Fritzandandre\HoneypotFieldType\Validation
 */
class ValidateHoneyPot
{
    /**
     * The honey pot field is invalid if any value is submitted for it.
     *
     * @param HoneypotFieldType $fieldType
     * @param null              $value
     * @return bool
     */
    public function handle(HoneypotFieldType $fieldType, $value = null)
    {
        if($value) {
            return false;
        }

        return true;
    }
}