<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Ticket extends Model
{
    //

protected $fillable = [
    'title',
    'description',
    'priority',
    'status',
    'category_id',
];

public function category()
{
    return $this->belongsTo(Category::class);
}

}
