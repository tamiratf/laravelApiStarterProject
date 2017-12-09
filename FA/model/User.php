<?php

namespace fa\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;

    protected $table = "users";

    protected $softDelete = true;

    public $timestamps = true;

    protected $primaryKey = "id";

    protected $fillable = [
        'name', 'email', 'password',
    ];

    public $validationRules = [
        'name'=> 'required',
        'email'=> 'required',
        'password'=> 'required'
    ];
}
