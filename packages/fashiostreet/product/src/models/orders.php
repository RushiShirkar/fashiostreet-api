<?php
namespace fashiostreet\product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class orders extends Model
{
    use SoftDeletes;
    protected $table = 'orders';
    protected $dates = ['deleted_at'];
}