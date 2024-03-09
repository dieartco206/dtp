<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendidikanModel extends Model
{
    protected $table = 'pendidikan';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function insertData($data)
    {
        return $this->insert($data);
    }
}
