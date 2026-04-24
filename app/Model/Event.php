<?php
namespace Model;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $timestamps = false;
    protected $fillable = ['pass_id', 'turnstile_id', 'event_time', 'status'];

    public function pass() { return $this->belongsTo(Pass::class); }
    public function turnstile() { return $this->belongsTo(Turnstile::class); }
}