<!-- profile.blade.php -->
@extends('layout.layout')

@section('mainContent')

<br>
<br>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    My Account
                </div>
                <div class="card-body">
                    <h5 class="card-title">Profile Information</h5>
                    <p class="card-text">
                        Welcome, <strong>{{ Auth::user()->name }}</strong>!<br>
                        Profile information:
                    </p>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Name:</strong> {{ Auth::user()->name }}</li>
                        <li class="list-group-item"><strong>Email:</strong> {{ Auth::user()->email }}</li>
                    </ul>
                    <hr>
                    <div class="text-center">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>

@endsection
