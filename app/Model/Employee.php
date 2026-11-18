<?php
namespace Model;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $timestamps = false;
    protected $fillable = ['full_name', 'position', 'department', 'phone'];
    
    public function pass() { 
        return $this->hasOne(Pass::class); 
    }
}