<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    use HasFactory;

    protected $table = 'contas_a_pagar';

    protected $connection = 'mysql';

    protected $fillable = [
        'conta',
        'valor',
        'estabelecimento'
    ];

}
