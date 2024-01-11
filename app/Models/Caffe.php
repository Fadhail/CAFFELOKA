<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caffe extends Model
{
    use HasFactory;

    protected $table = 'caffes';
    protected $primaryKey = 'id'; // Corrected property name
    protected $fillable = ['namacaffe', 'alamat', 'foto'];
}
