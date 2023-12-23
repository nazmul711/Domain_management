<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    protected $table ='domains';
    protected $primarykey = 'id';
    protected $fillable = ['domain_name','buy_form','Expire_date','notification'];
    use HasFactory;
}
