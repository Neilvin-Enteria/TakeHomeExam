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
                <td>AgentID</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td class="text-center">Action</td>
              </tr>
          </thead>
          <tbody>
              @foreach($agent as $agents)
              <tr>
                  <td>{{$agents->AgentID}}</td>
                  <td>{{$agents->AgentFName}}</td>
                  <td>{{$agents->AgentLName}}</td>
                  <td class="text-center">
                      <a href="{{route('agents.show', $agents->AgentID)}}" class="btn btn-primary btn-sm" style="width:40%; margin-left:auto; margin-right:auto; margin-top: 0; padding-left:5px;">View Sub Agents</a>
                      <form action="{{route('agents.destroy', $agents->AgentID)}}" method="post" style="display: inline-block">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                        </form>
                  </td>
              </tr>
              @endforeach
          </tbody>
        </table>
    
        <div class="buttons" style="width:50%; margin-left:auto; margin-right:auto;">
          <a href="{{route('agents.create')}}">
            <button type="button" class="btn btn-primary btn-sm btn-block"style="width:100%; margin-left:auto; margin-right:auto; margin-top: 0; margin-bottom: 10px; ">Create Agent</button>
        </a>
        <a href="{{route('main.index')}}">
            <button type="button" class="btn btn-secondary btn-sm btn-block"style="width:100%; margin-left:auto; margin-right:auto;">Return to Main</button>
        </a>
      </div>    
    
      <div>
  </div>
  

@endsection