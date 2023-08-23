<?php
namespace App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TienNghiChinhSach extends Model
{
    use HasFactory;
    protected $table = 'tiennghi_chinhsach';
    protected $fillable = [
        'id_restaurant',
        'id_tiennghi',
    ];
}

?>