<?php
namespace ResourceCatalog\Model;

interface ISearchableResourceCatalogData
{
    const DOUBLE_PUBLICITY = array(
        'NULL' => 0,
        'LICENSE' => 1,
        'SANCTION' => 2
    );

    const RED_BLACK_LIST = array(
        'NULL' => 0,
        'RED' => 1,
        'BLACK' => 2
    );
}