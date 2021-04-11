<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sort'
    ];

    public function animals() 
    {
        //hasMany(類別名稱, 欄位, 主鍵) 關聯另一個model
        return hasMany(Animal::class, 'type_id', 'id');
    }
}
