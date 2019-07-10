<?php
namespace ResourceCatalog\Model;

interface IResourceCatalog extends IResourceCatalogTypeName, IResourceCatalogTypeIdentify, IResourceCatalogTypeEnName, IResourceCatalogTypeDoublePublicity, IResourceCatalogTypeRedBlackList
{   
    const TYPE = array(
        'NULL' => 0,
        'XBXZCF' => 1,
        'XBXZXK' => 2,
        'QIYEJBXX' => 3,
        'HRBXX' => 4,
        'ZFCGDLJGXX' => 5,
        'AJNSRXX' => 6,
        'QYDSXZCFXX' => 7,
        'YSCRJZJJJZGRDXX' => 8,
        'SFJDJGCYRYZGXX' => 9,
        'JGRYXXSSFJ' => 10,
        'HSZYZGZXX' => 11,
        'JGJCDXZJL' => 12,
        'JXSZLJDW' => 13,
        'ESCJDPGJGHZZS' => 14,
        'ZYJNZSXX' => 15,
        'GRRYXXMZJ' => 16,
        'MBFQYML' => 17,
        'SHTTDJXX' => 18,
        'SXBZXJGXX' => 19,
        'SXBZXRMD' => 20,
        'YZTQSBXXHMD' => 21,
        'JGRYXX' => 22,
        'SXQYHMD' => 23,
        'SPYPTSJBJLGR' => 24,
        'SPYPTSJBJLDW' => 25,
        'JXMPCPXX' => 26,
        'ZYZXX' => 27,
        'GRRYXXJYJ' => 28,
        'ZLJCQYXX' => 29,
        'SJQYJSZXRDXX' => 30,
        'XSPJXX' => 31,
        'QYGSZXXX' => 32,
        'QYRYXX' => 33,
        'SHZZNJXX' => 34,
        'YLBXXX' => 35,
        'SYBXXX' => 36,
        'JYJGXINXI' => 37,
        'JSZGXX' => 38,
        'SJYXXS' => 39,
        'JDCWFXX' => 40,
        'SJJXMXX' => 41,
        'TEST' => 500
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(
            self::TYPE['NULL'],
            self::TYPE['XBXZCF'],
            self::TYPE['XBXZXK']
        ),
        IUserGroup::ID['QFGW'] => array(self::TYPE['TEST']),
        IUserGroup::ID['QWWXB'] => array(),
        IUserGroup::ID['RMTZX'] => array(),
        IUserGroup::ID['SWJ'] => array(),
        IUserGroup::ID['ZJW'] => array(),
        IUserGroup::ID['WJW'] => array(),
        IUserGroup::ID['NW'] => array(),
        IUserGroup::ID['GZW'] => array(),
        IUserGroup::ID['KJJ'] => array(),
        IUserGroup::ID['GXJ'] => array(),
        IUserGroup::ID['GAFJ'] => array(),
        IUserGroup::ID['JCY'] => array(),
        IUserGroup::ID['FY'] => array(),
        IUserGroup::ID['CZJ'] => array(),
        IUserGroup::ID['SHUIWJ'] => array(),
        IUserGroup::ID['WLJ'] => array(),
        IUserGroup::ID['JRJ'] => array(),
        IUserGroup::ID['SCJGJ'] => array(),
        IUserGroup::ID['RSJ'] => array(),
        IUserGroup::ID['MZJ'] => array(),
        IUserGroup::ID['YGJ'] => array(),
        IUserGroup::ID['YJGLJ'] => array(),
        IUserGroup::ID['JYJ'] => array(),
        IUserGroup::ID['SFJ'] => array(),
        IUserGroup::ID['ZFB'] => array(),
        IUserGroup::ID['QWXCB'] => array()
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}
