@extends('main.app')
@section('content')


    <form method="POST" action="{{route('agents.store')}}">
        @csrf
        <div class="create-agent-container">
            <div class="title-container">
                <h1>Agent Registration</h1>
            </div>
            <div class="alert-container">
                @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div><br /> @endif
            </div>
            <div class="image-container">
                <img src="/assets/images/agent.png">
            </div>

            <div class="inputs-container">
                <div class="card-body">

                        <div class="form-group first-name">
                            <label for="AgentFName">First Name</label>
                            <input type="text" class="form-control" name="AgentFName" id="AgentFName">
                            <p class="error" id="fname-error"></p>
                        </div>
                        <div class="form-group last-name">
                            <label for="AgentLName">Last Name</label>
                            <input type="text" class="form-control" name="AgentLName" id="AgentLName">
                            <p class="error" id="lname-error"></p>
                        </div>
                        <div class="button-group">
                            <button type="submit" class="btn btn-primary" id="create-button" disabled>Register</button><br><br>
                            <a href="{{route('main.index')}}">
                                <button type="button" class="btn btn-secondary">Return to Main</button>
                            </a>

                        </div>

                </div>
            </div>

        </div>
    </form>
</div>
@endsection <div class="form-container">