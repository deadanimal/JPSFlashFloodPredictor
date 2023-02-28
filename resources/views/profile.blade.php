@extends('layout')

@section('content')
    <main class="content">
        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                    Welcome back, {{ $user->name }}!
                </h1>
                {{-- <p class="header-subtitle">You have 24 new messages and 5 new notifications.</p> --}}
            </div>

            <div class="row">

                <div class="col-12 col-xl-6">
     

                    <div class="card">

                        <div class="card-body">

                            <form action="/profile-password" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label class="form-label w-100">Old Password</label>
                                    <input type="password" name="old_password" class="form-control">                                    
                                </div>

                                <div class="mb-3">
                                    <label class="form-label w-100">Password</label>
                                    <input type="password" name="password" class="form-control">                                    
                                </div>   
                                
                                <div class="mb-3">
                                    <label class="form-label w-100">Password Confirmation</label>
                                    <input type="password" name="password_confirmation" class="form-control">                                    
                                </div>                                          

                                <button type="submit" class="btn btn-primary">Change Password</button>

                            </form>

                        </div>
                    </div>                    
                </div>



            </div>

        </div>
    </main>
@endsection
