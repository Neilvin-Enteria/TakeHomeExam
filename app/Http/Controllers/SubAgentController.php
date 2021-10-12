<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\SubAgent;
use Illuminate\Http\Request;

class SubAgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subagent = SubAgent::all();
        return view('subagents.index', compact('subagent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agent = Agent::all();
        return view('subagents.create', compact('agent'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newSubAgent = $request->validate([
            'Assigned_AgentID'=>'required',
            'SubAgentFName'=>'required',
            'SubAgentLName'=>'required'
        ]);
        SubAgent::create($newSubAgent);
        return redirect()->route('subagents.create')->with('success', 'Sub Agent has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subagent = SubAgent::findOrFail($id);
        $agent = Agent::all();
        return view('subagents.update', compact('subagent',  'agent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateRecord = $request->validate([
            'Assigned_AgentID'=>'required',
            'SubAgentFName'=>'required',
            'SubAgentLName'=>'required'
        ]);
        SubAgent::findOrFail($id)->update($updateRecord);
        return redirect()->route('subagents.index')->with('success', 'Sub Agent has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subagent = SubAgent::findOrFail($id);
        $subagent->delete();
        return redirect('/subagents')->with('success', 'Sub Agent  has been deleted');
    }
}
