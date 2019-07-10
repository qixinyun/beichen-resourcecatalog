<?php
namespace ResourceCatalog\Model;

trait ResourceCatalogTrait
{

    /**
     * @var $id 资源目录id
     */
    protected $id;
    /**
     * @var int $type 资源目录类型
     */
    protected $type;


    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setType(int $type) : void
    {
        $this->type = in_array(
            $type, self::TYPE
        ) ? $type : self::TYPE['NULL'];
    }

    public function getType() : int
    {
        return $this->type;
    }
}