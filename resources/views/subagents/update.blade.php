@extends('main.app')
@section('content')

<div class="form-container">
    <form method="POST" action="{{route('subagents.update', $subagent->Assigned_AgentID)}}">
        @method('PATCH')
        @csrf
        <div class="create-sub-agent-container">
            <div class="title-container">
                <h1>Sub Agent Reassignment</h1>
            </div>
            <div class="alert-container">
                @if(session()->get('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div><br /> 
                @endif
            </div>
            <div class="image-container">
                <img src="/assets/images/subagent.png">
            </div>

            <div class="inputs-container">
                    <div class="form-group select-agent">
                        <select class="form-select" aria-label="select example" name="Assigned_AgentID">
                            <option selected hidden>Reassign to Agent</option>
                                @foreach ($agent as $agents)
                                    <option value="{{$agents->AgentID}}" name ="Assigned_AgentID">{{$agents->AgentFName}}&nbsp;{{$agents->AgentLName}}</option>
                                @endforeach
                        </select>
                    </div>
                    <div class="form-group first-name">
                        <label for="AgentFName">First Name</label>
                        <input type="text" class="form-control" name="SubAgentFName" id="AgentFName" value="{{$subagent->SubAgentFName}}">
                        <p class="error" id="fname-error"></p>
                    </div>
                    <div class="form-group last-name">
                        <label for="AgentLName">Last Name</label>
                        <input type="text" class="form-control" name="SubAgentLName" id="AgentLName" value="{{$subagent->SubAgentLName}}">
                        <p class="error" id="lname-error"></p>
                    </div>
                    <div class="button-group">
                        <button type="submit" class="btn btn-primary" id="create-button">Update</button><br><br>
                        <a href="{{route('main.index')}}">
                            <button type="button" class="btn btn-secondary">Return to Main</button>
                        </a>

                    </div>
            </div>
        </div>
    </form>
</div>

@endsection