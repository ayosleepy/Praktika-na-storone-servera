<?php
namespace Model;
use Illuminate\Database\Eloquent\Model;

class Turnstile extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'location'];
    public function events() { return $this->hasMany(Event::class); }
}