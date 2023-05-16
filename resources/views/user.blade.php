@extends('layout')

@section('content')
    <main class="content">
        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                    User {{$user->name}}
                </h1>
                {{-- <p class="header-subtitle">You have 24 new messages and 5 new notifications.</p> --}}

            </div>

            <div class="row">


                <div class="col-12 col-xl-9">
                    <div class="card">
                        {{-- <div class="card-header">
                            <h5 class="card-title">Profile Picture</h5>
                            <h6 class="card-subtitle text-muted">Default Bootstrap form layout.</h6>
                        </div> --}}

                        <div class="card-body">
                        

                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Type</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td><a href="/users/{{$user->id}}">{{$user->name}}</a></td>
                                            <td>{{$user->email}}</td>
                                            <td>{{ucfirst($user->user_type)}}</td>
                                        </tr>
                                </tbody>
                            </table>

                            <form action='/users/{{$user->id}}/name' method='POST'>
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label class="form-label w-100">Name</label>
                                    <input type="text" value="{{$user->name}}" name="name" class="form-control">
                                </div>   
                                                                                              

                                <button type="submit" class="btn btn-primary">Update User</button>                                
                            </form>

                            <form action='/users/{{$user->id}}/password' method='POST'>
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label class="form-label w-100">Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>   
                                                                                              

                                <button type="submit" class="btn btn-primary">Update User</button>                                
                            </form>    

                            <table>
                                @foreach($activities as $activity)
                                <tr>
                                    {{$activity}}
                                </tr>
                                @endforeach
                            </table>
                        

                        </div>                      


                        
                    </div>
                </div>



            </div>
        </div>
    </main>

    <script>
        function updateLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.watchPosition(showPosition);
            } else {
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        function showPosition(position) {
            document.getElementById("latitude").value = position.coords.latitude;
            document.getElementById("longitude").value = position.coords.longitude;
            document.getElementById("latitude1").value = position.coords.latitude;
            document.getElementById("longitude1").value = position.coords.longitude;
        }
    </script>
@endsection
