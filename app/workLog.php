<?php

namespace SmartWiki;

use Illuminate\Database\Eloquent\Model;


/**
 * @property array|string editorContent
 */
class workLog extends ModelBase
{
    protected $table = 'work_log';
    protected $primaryKey = 'id';
    protected $dateFormat = 'Y-m-d H:i:s';
    protected $guarded = ['id'];

    public $timestamps = false;


}
