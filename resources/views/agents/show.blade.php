@extends('main.app')
@section('content')
    


<style>
    .push-top {
      margin-top: 50px;
    }
    .container{
        width: 70%;
    }
  </style>
  <div class="container">
    <div class="push-top">
        @if(session()->get('success'))
          <div class="alert alert-success">
            {{ session()->get('success') }}  
          </div><br />
        @endif
        <table class="table">
          <thead>
              <tr class="table-warning">
                <td>Sub Agent ID</td>
                <td>Assigned Agent ID</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td class="text-center">Action</td>
              </tr>
          </thead>
          <tbody>
            @foreach($agent->subagents as $subagents)
              <tr>
                  <td>{{$subagents->SubAgentID}}</td>
                  <td>{{$subagents->Assigned_AgentID}}</td>
                  <td>{{$subagents->SubAgentFName}}</td>
                  <td>{{$subagents->SubAgentLName}}</td>
                  <td class="text-center">
                    <a href="{{route('subagents.edit', $subagents->SubAgentID)}}" class="btn btn-primary btn-sm" style="width:40%; margin-left:auto; margin-right:auto; margin-top: 0; padding-left:5px;">Reassign</a>
                    <a href="{{route('subagents.destroy', $subagents->SubAgentID)}}" class="btn btn-danger btn-sm">Delete</a>
                </td>
              </tr>
              @endforeach
          </tbody>
        </table>
    
        <div class="buttons" style="width:50%; margin-left:auto; margin-right:auto;">
          <a href="{{route('subagents.create')}}">
            <button type="button" class="btn btn-primary btn-sm btn-block"style="width:100%; margin-left:auto; margin-right:auto; margin-top: 0; margin-bottom: 10px; ">Create Sub Agent</button>
        </a>
        <a href="{{route('main.index')}}">
            <button type="button" class="btn btn-secondary btn-sm btn-block"style="width:100%; margin-left:auto; margin-right:auto;">Return to Main</button>
        </a>
      </div>    
    
    
      <div>
  </div>


@endsection