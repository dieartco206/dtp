<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengalamanModel extends Model
{
    protected $table = 'pengalaman';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function insertData($data)
    {
        return $this->insert($data);
    }
}
