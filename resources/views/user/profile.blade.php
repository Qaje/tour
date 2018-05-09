@extends('admin.profile_layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            My Profile
                <div class="card-header">User Profile</div>

                <div class="card-body">                            
                    @component('components.who')

                    @endcomponent
                </div>
            
        </div>
    </div>
</div>
@endsection