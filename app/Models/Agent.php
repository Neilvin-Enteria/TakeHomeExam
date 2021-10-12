<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;
    protected $table = 'agents';
    protected $fillable = ['AgentFName', 'AgentLName'];
    protected $primaryKey = 'AgentID';

    public function subagents(){
        return $this->hasMany(SubAgent::class, 'Assigned_AgentID');
    }
}
