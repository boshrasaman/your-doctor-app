<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Faq extends Model
{
    use HasFactory;

    protected $fillable = ['question', 'answer', 'category', 'created_by_admin_id'];

    public function admin()
    {
        return $this->belongsTo(User::class, 'created_by_admin_id');
    }
}
