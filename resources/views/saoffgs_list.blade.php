@extends('layout')

@section('content')
    <main class="content">
        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                    SAOFFGS Management
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
                        

                            <table class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>Timestamp</th>
                                        <th>Basin</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($datas as $data)
                                        <tr>
                                            <td><a href="/saoffgs/{{$data->id}}">{{$data->created_at}}</a></td>
                                            <td><a href="/saoffgs/{{$data->id}}">{{$data->id}}</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>


                        
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
