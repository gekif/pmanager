@extends('layouts.app')

@section('content')

    <div class="col-md-9 col-lg-9 col-sm-9 pull-left">

        <!-- Example row of columns -->
        <div class="row col-md-12 col-lg-12 col-sm-12" style="background: white; margin: 10px;">

        </div>

    </div>


    <div class="col-sm-3 colmd-3 col-lg-3 pull-right">

        <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
                <li><a href="/companies/{{ $company->id }}/edit/">Edit</a></li>
                <li><a href="#">Delete</a></li>
                <li><a href="#">Add New Member</a></li>
            </ol>
        </div>

        <div class="sidebar-module">
            <h4>Members</h4>
            <ol class="list-unstyled">
                <li><a href="#">March 2014</a></li>
            </ol>
        </div>
    </div>

@endsection

