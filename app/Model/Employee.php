<?php
namespace Model;
use Illuminate\Database\Eloquent\Model;
class Employee extends Model
{
    protected $table = 'employees';
    protected $fillable = ['full_name', 'position'];
    public $timestamps = true;
}