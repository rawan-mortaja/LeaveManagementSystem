<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'role'];

    public function leaveRequests()
    {
        return $this->hasMany(LeaveRequest::class);
    }
}
