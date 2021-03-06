<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ModelTraits\HasModelTrait;

class Widget extends Model
{
    use HasModelTrait;

    protected $fillable = ['widget_name',
                           'slug',
                           'user_id'];

    /**
     * Get the user that owns the widget.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
