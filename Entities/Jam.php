<?php

namespace Modules\Setting\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jam extends Model
{
    use HasFactory;

    protected $table = 'jamkerja';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'tanggal', 'jenis', 'jam_masuk', 'jam_pulang', 'jam_kerja'];
}
