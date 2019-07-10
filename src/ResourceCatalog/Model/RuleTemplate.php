<?php
namespace ResourceCatalog\Model;

class RuleTemplate
{
    const IS_READONLY = array(
        'YES' => 0,
        'NO' => -2
    );

    const IS_NECESSARY = array(
        'YES' => 0,
        'NO' => -2
    );

    const VALIDATION_RULE_TEMPLATE = array(
        'isReadOnly' => array(self::IS_READONLY['YES'], self::IS_READONLY['NO']),
        'isNecessary' => array(self::IS_NECESSARY['YES'], self::IS_NECESSARY['NO']),
        'rule' => array(
            array(
                'code' => Rule::CODE['TEXT'], 
                'name' => Rule::NAME[Rule::CODE['TEXT']], 
                'options' => array()
            ),
            array(
                'code' => Rule::CODE['DATE'], 
                'name' => Rule::NAME[Rule::CODE['DATE']], 
                'options' => array()
            ),
            array(
                'code' => Rule::CODE['SINGLE_CHOOSE'], 
                'name' => Rule::NAME[Rule::CODE['SINGLE_CHOOSE']], 
                'options' => array()
            ),
            array(
                'code' => Rule::CODE['MULTIPLE_CHOOSE'], 
                'name' => Rule::NAME[Rule::CODE['MULTIPLE_CHOOSE']], 
                'options' => array()
            )
        )
    );

    public function validateIsNecessary(int $isNecessary, $value) : bool
    {
        if ($isNecessary == self::IS_NECESSARY['YES']) {
            return !empty($value);
        }
        return true;
    }
}