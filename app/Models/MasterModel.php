<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterModel extends Model
{
    use HasFactory;
    protected $table = "master";
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_hunter', // Foreign key da tabela hunter
        'nome_master',
        'tipo_nen'
    ];
}