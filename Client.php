<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'comapny',
        'VAT',
        'address',
    ];
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
