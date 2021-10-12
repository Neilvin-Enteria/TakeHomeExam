<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subagents', function (Blueprint $table) {
            $table->increments('SubAgentID');
            $table->unsignedInteger('Assigned_AgentID');
            $table->string('SubAgentFName');
            $table->string('SubAgentLName');
            $table->timestamps();
            $table->foreign('Assigned_AgentID')
            ->references('AgentID')->on('agents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_agents');
    }
}
