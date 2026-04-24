<?php
namespace Model;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'position', 'department', 'phone'];
    public function pass() { return $this->hasOne(Pass::class); }
}