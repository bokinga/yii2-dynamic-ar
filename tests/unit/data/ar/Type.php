<?php

namespace tests\unit\data\ar;

use tests\unit\data\BaseRecord;

/**
 * Model representing type table
 *
 * @property integer $int_col
 * @property integer $int_col2 DEFAULT 1
 * @property integer $smallint_col DEFAULT 1
 * @property string $char_col
 * @property string $char_col2 DEFAULT 'something'
 * @property string $char_col3
 * @property float $float_col
 * @property float $float_col2 DEFAULT '1.23'
 * @property string $blob_col
 * @property float $numeric_col DEFAULT '33.22'
 * @property string $time DEFAULT '2002-01-01 00:00:00'
 * @property boolean $bool_col
 * @property boolean $bool_col2 DEFAULT 1
 */
class Type extends BaseRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'type';
    }
}
