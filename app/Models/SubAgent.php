<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubAgent extends Model
{
    use HasFactory;
    protected $table = 'subagents';
    protected $fillable = ['Assigned_AgentID', 'SubAgentFName', 'SubAgentLName'];
    protected $primaryKey = 'SubAgentID';

    public function agent(){
        return $this->belongsTo(Agent::class);
    }
}
