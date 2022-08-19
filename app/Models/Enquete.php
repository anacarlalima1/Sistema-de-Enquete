<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquete extends Model
{
    use HasFactory;
    protected $table = 'enquetes';
    protected $fillable = ['titulo','opcao1','opcao2','opcao3','expires_at', 'created_at'];
}
