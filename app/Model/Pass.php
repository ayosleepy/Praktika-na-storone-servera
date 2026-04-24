<?php
namespace Model;
use Illuminate\Database\Eloquent\Model;

class Pass extends Model
{
    public $timestamps = false;
    protected $fillable = ['employee_id', 'card_number', 'type', 'expires_at', 'is_blocked'];

    public function employee() { return $this->belongsTo(Employee::class); }
    public function events() { return $this->hasMany(Event::class); }
}