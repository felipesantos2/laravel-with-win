<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debt extends Model
{
    use HasFactory;

    protected $table = 'contas';

    protected $connection = 'mysql';

    protected $fillable = [
        'conta',
        'valor',
        'dat_compra',
        'estabelecimento',
        'created_at',
    ];

}
