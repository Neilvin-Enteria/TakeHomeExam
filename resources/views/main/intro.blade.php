@extends('main.app')
@section('content')
    <div class="nav-container">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="{{route('main.index')}}">Main</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('agents.create')}}">Register Agent</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('subagents.create')}}">Register Sub Agent</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('agents.index')}}">Agents</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"href="{{route('subagents.index')}}">Sub Agents</a>
            </li>
        </ul>
    </div>
    <div class="intro-container">
        <div class="intro">
            <h1>Agent Viewer</h1>
            <p class="description">The agent management system that gets the job done.</p>
        </div>
        <div class="intro-image-container">
            <img src="{{asset('assets/images/intro.png')}}">
        </div>
    </div>
@endsection