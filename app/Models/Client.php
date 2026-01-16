<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use App\Models\Address;
use DateTimeInterface;
class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('d/m/Y');
    }

    protected $fillable = [
        'name',
        'cpf',
        'email',
        'phone',
        'cep',
        'street',
        'neighborhood',
        'number',
        'complement',
        'city',
        'state',
        'status'
    ];


}
