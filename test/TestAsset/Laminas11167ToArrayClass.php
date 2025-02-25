<?php

namespace LaminasTest\Json\TestAsset;

/**
 * Serializable class exposing a toArray() method.
 */
class Laminas11167ToArrayClass
{
    // phpcs:disable WebimpressCodingStandard.NamingConventions.ValidVariableName.NotCamelCapsProperty,PSR2.Classes.PropertyDeclaration.Underscore

    /** @var string */
    private $_firstName = 'John';

    /** @var string */
    private $_lastName = 'Doe';

    /** @var string */
    private $_email = 'john@doe.com';

    // phpcs:enable

    /** @return array */
    public function toArray()
    {
        return [
            'firstName' => $this->_firstName,
            'lastName'  => $this->_lastName,
            'email'     => $this->_email,
        ];
    }
}
