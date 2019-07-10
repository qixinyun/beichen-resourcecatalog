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
        IUserGroup::ID['QFGW'] => array(
            self::TYPE['TEST'], 
            self::TYPE['JGJCDXZJL'], 
            self::TYPE['SJJXMXX']
        ),
        IUserGroup::ID['QWWXB'] => array(),
        IUserGroup::ID['RMTZX'] => array(), 
        IUserGroup::ID['SWJ'] => array(self::TYPE['ESCJDPGJGHZZS']),
        IUserGroup::ID['ZJW'] => array(self::TYPE['ZLJCQYXX']),
        IUserGroup::ID['WJW'] => array(self::TYPE['HSZYZGZXX']),
        IUserGroup::ID['NW'] => array(),
        IUserGroup::ID['GZW'] => array(self::TYPE['QYRYXX']),
        IUserGroup::ID['KJJ'] => array(self::TYPE['JXSZLJDW']),
        IUserGroup::ID['GXJ'] => array(self::TYPE['SJQYJSZXRDXX']),
        IUserGroup::ID['GAFJ'] => array(self::TYPE['JDCWFXX']),
        IUserGroup::ID['JCY'] => array(),
        IUserGroup::ID['FY'] => array(
            self::TYPE['SXBZXJGXX'], 
            self::TYPE['SXBZXRMD'], 
            self::TYPE['XSPJXX']
        ),
        IUserGroup::ID['CZJ'] => array(self::TYPE['ZFCGDLJGXX']), 
        IUserGroup::ID['SHUIWJ'] => array(
            self::TYPE['AJNSRXX'], 
            self::TYPE['QYDSXZCFXX'],
            self::TYPE['QYGSZXXX']
        ),
        IUserGroup::ID['WLJ'] => array(), 
        IUserGroup::ID['JRJ'] => array(), 
        IUserGroup::ID['SCJGJ'] => array(
            self::TYPE['QIYEJBXX'], 
            self::TYPE['JGRYXX'], 
            self::TYPE['SXQYHMD'], 
            self::TYPE['SPYPTSJBJLGR'], 
            self::TYPE['SPYPTSJBJLDW'],
            self::TYPE['JXMPCPXX']
        ),
        IUserGroup::ID['RSJ'] => array(
            self::TYPE['ZYJNZSXX'],
            self::TYPE['YZTQSBXXHMD'],
            self::TYPE['YLBXXX'], 
            self::TYPE['SYBXXX']
        ), 
        IUserGroup::ID['MZJ'] => array(
            self::TYPE['GRRYXXMZJ'], 
            self::TYPE['MBFQYML'], 
            self::TYPE['SHTTDJXX'],
            self::TYPE['SHZZNJXX']
        ),
        IUserGroup::ID['YGJ'] => array(),
        IUserGroup::ID['YJGLJ'] => array(), 
        IUserGroup::ID['JYJ'] => array(
            self::TYPE['GRRYXXJYJ'], 
            self::TYPE['JYJGXINXI'], 
            self::TYPE['JSZGXX'],
            self::TYPE['SJYXXS']
        ),
        IUserGroup::ID['SFJ'] => array(
            self::TYPE['SFJDJGCYRYZGXX'], 
            self::TYPE['JGRYXXSSFJ']
        ),
        IUserGroup::ID['ZFB'] => array(), 
        IUserGroup::ID['QWXCB'] => array(
            self::TYPE['HRBXX'], 
            self::TYPE['ZYZXX']
        ),
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}
