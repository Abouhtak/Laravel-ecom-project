<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addcard extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'produit_id_card','nom_p_card','prix_card','q_card','imge','totale', 'user_id_card'];
}
