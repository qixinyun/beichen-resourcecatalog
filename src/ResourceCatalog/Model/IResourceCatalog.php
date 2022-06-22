<?php
namespace ResourceCatalog\Model;

interface IResourceCatalog extends IResourceCatalogTypeName, IResourceCatalogTypeIdentify, IResourceCatalogTypeEnName, IResourceCatalogTypeDoublePublicity, IResourceCatalogTypeRedBlackList, IResourceCatalogIsConfirm
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
        'TJQYFRGGXYZHPJJG' => 42,
        'QYYCMLXX' => 43,
        'QYHYSJ' => 44,
        'ZDJGQYMD'=>47,
        'XZCJXX'=>48,
        'XZJDJCXX'=>49,
        'XZJLXX'=>50,
        'XZQRXX'=>51,
        'XZQZXX'=>52,
        //@position_type_48
        'TEST' => 500
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(
            self::TYPE['NULL'],
            self::TYPE['XBXZCF'],
            self::TYPE['XBXZXK'],
            self::TYPE['QYHYSJ'],
        ),
        IUserGroup::ID['QFGW'] => array(
            self::TYPE['TEST'],
            self::TYPE['JGJCDXZJL'],
            self::TYPE['SJJXMXX'],
            self::TYPE['TJQYFRGGXYZHPJJG'],
            self::TYPE['XZJLXX'],
            self::TYPE['XZQZXX'],
            self::TYPE['ZDJGQYMD']
        ),
        IUserGroup::ID['QWWXB'] => array(),
        IUserGroup::ID['RMTZX'] => array(),
        IUserGroup::ID['SWJ'] => array(
            self::TYPE['ESCJDPGJGHZZS'],
        ),
        IUserGroup::ID['ZJW'] => array(
            self::TYPE['ZLJCQYXX'],
            self::TYPE['XZQZXX'],
            self::TYPE['XZQRXX'],
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['WJW'] => array(
            self::TYPE['HSZYZGZXX'],
            self::TYPE['XZQZXX'],
            self::TYPE['XZQRXX'],
            self::TYPE['XZJLXX'],
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['NW'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZJLXX'],
            self::TYPE['XZQRXX'],
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['GZW'] => array(
            self::TYPE['QYRYXX'],
        ),
        IUserGroup::ID['KJJ'] => array(
            self::TYPE['JXSZLJDW'],
        ),
        IUserGroup::ID['GXJ'] => array(
            self::TYPE['SJQYJSZXRDXX'],
        ),
        IUserGroup::ID['GAFJ'] => array(
            self::TYPE['JDCWFXX'],
            self::TYPE['XZJLXX']
        ),
        IUserGroup::ID['JCY'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZCJXX']
        ),
        IUserGroup::ID['FY'] => array(
            self::TYPE['SXBZXJGXX'],
            self::TYPE['SXBZXRMD'],
            self::TYPE['XSPJXX'],
            self::TYPE['XZQZXX'],
            self::TYPE['XZCJXX']
        ),
        IUserGroup::ID['CZJ'] => array(
            self::TYPE['ZFCGDLJGXX'],
            self::TYPE['XZQZXX'],
            self::TYPE['XZCJXX'],
            self::TYPE['XZQRXX'],
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['SHUIWJ'] => array(
            self::TYPE['AJNSRXX'],
            self::TYPE['QYDSXZCFXX'],
            self::TYPE['QYGSZXXX'],
            self::TYPE['XZQZXX'],
            self::TYPE['XZCJXX']
        ),
        IUserGroup::ID['WLJ'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZCJXX'],
            self::TYPE['XZQRXX'],
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['JRJ'] => array(
            self::TYPE['XZCJXX']
        ),
        IUserGroup::ID['SCJGJ'] => array(
            self::TYPE['QIYEJBXX'],
            self::TYPE['JGRYXX'],
            self::TYPE['SXQYHMD'],
            self::TYPE['SPYPTSJBJLGR'],
            self::TYPE['SPYPTSJBJLDW'],
            self::TYPE['JXMPCPXX'],
            self::TYPE['QYYCMLXX'],
            self::TYPE['XZQZXX'],
            self::TYPE['XZQRXX'],
            self::TYPE['XZJLXX'],
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['RSJ'] => array(
            self::TYPE['ZYJNZSXX'],
            self::TYPE['YZTQSBXXHMD'],
            self::TYPE['YLBXXX'],
            self::TYPE['SYBXXX'],
            self::TYPE['XZCJXX'],
            self::TYPE['XZQRXX'],
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['MZJ'] => array(
            self::TYPE['GRRYXXMZJ'],
            self::TYPE['MBFQYML'],
            self::TYPE['SHTTDJXX'],
            self::TYPE['SHZZNJXX'],
            self::TYPE['XZQZXX'],
            self::TYPE['XZCJXX'],
            self::TYPE['XZQRXX'],
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['YGJ'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZJLXX'],
            self::TYPE['XZQRXX'],
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['YJGLJ'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZJLXX'],
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['JYJ'] => array(
            self::TYPE['GRRYXXJYJ'],
            self::TYPE['JYJGXINXI'],
            self::TYPE['JSZGXX'],
            self::TYPE['SJYXXS'],
            self::TYPE['XZJLXX'],
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['SFJ'] => array(
            self::TYPE['SFJDJGCYRYZGXX'],
            self::TYPE['JGRYXXSSFJ'],
            self::TYPE['XZQZXX'],
            self::TYPE['XZJLXX'],
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['ZFB'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZCJXX']
        ),
        IUserGroup::ID['QWXCB'] => array(
            self::TYPE['HRBXX'],
            self::TYPE['ZYZXX'],
            self::TYPE['XZQZXX'],
            self::TYPE['XZCJXX']
        ),
        IUserGroup::ID['XFBCZD'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['BCZ'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZCJXX'],
            self::TYPE['XZJLXX'],
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['YXFZ'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZCJXX'],
            self::TYPE['XZJLXX'],
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['XDZ'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZCJXX'],
            self::TYPE['XZJLXX'],
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['DZZZ'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZCJXX'],
            self::TYPE['XZJLXX'],
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['SKZ'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZCJXX'],
            self::TYPE['XZJLXX'],
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['XTTZ'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZCJXX'],
            self::TYPE['XZJLXX'],
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['QGZ'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['QGHZRZYJ'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZCJXX'],
            self::TYPE['XZJLXX']
        ),
        IUserGroup::ID['TJJ'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZJLXX'],
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['DAJ'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZJLXX'],
            self::TYPE['XZQRXX'],
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['RFB'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZJLXX'],
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['CGW'] => array(
            self::TYPE['XZJLXX'],
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['BMJ'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZQRXX'],
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['QSWJ'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZQRXX'],
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['QWTZB'] => array(
            self::TYPE['XZQRXX'],
        ),
        IUserGroup::ID['XCJ'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZQRXX'],
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['PDJ'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZQRXX'],
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['JXL'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZQRXX'],
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['RJJ'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZQRXX'],
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['JRL'] => array(
            self::TYPE['XZQRXX'],
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['QYJ'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZQRXX'],
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['SHCJ'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['TMZ'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZQRXX'],
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['SJZ'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['STHJJ'] => array(
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['YBJ'] => array(
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['KFQ'] => array(
            self::TYPE['XZJDJCXX'],
        ),
        IUserGroup::ID['SJJ'] => array(
            self::TYPE['XZQZXX'],
            self::TYPE['XZJDJCXX'],
        ),
        //@position_usergroup
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}
