<?php
namespace ResourceCatalog\Model;

abstract class Rule
{
	const CODE = array(
        'TEXT' => 1,
        'DATE' => 2,
        'SINGLE_CHOOSE' => 3,
        'MULTIPLE_CHOOSE' => 4
    );

	const NAME = array(
        self::CODE['TEXT'] => '文本',
        self::CODE['DATE'] => '日期',
        self::CODE['SINGLE_CHOOSE'] => '单选',
        self::CODE['MULTIPLE_CHOOSE'] => '多选'
    );

    protected $code;

    protected $name;

    protected $options;

    public function __construct(int $code, string $name, array $options = array())
    {
    	$this->code = $code;
    	$this->name = $name;
    	$this->options = $options;
    }

    public function __destruct()
    {
    	unset($this->code);
    	unset($this->name);
    	unset($this->options);
    }

    public function getCode() : int 
    {
    	return $this->code;
    }

    public function getName() : string  
    {
    	return $this->name;
    }

    public function getOptions() : array 
    {
    	return $this->options;
    }

    abstract public function validate($value) : bool;

}