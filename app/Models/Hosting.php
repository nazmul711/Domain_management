<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hosting extends Model
{

    protected $table = 'hostings';
    protected $primarykey = 'id';
    protected $fillable = ['hosting_name', 'buy_form', 'Expire_date', 'notification'];
    use HasFactory;
}
