<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
	use SoftDeletes;

	/**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * All fields other than the id are mass assignable
     *
     * @var array
     */
    protected $guarded = ['id'];

    public function ticket()
    {
    	return $this->belongsTo(Ticket::class);
    }
}
