@extends('layout')

@section('content')
    <main class="content">
        <div class="container-fluid">

            <div class="header">
                <h1 class="header-title">
                    Welcome back, {{Auth::user()->name}}!
                </h1>
                {{-- <p class="header-subtitle">You have 24 new messages and 5 new notifications.</p> --}}
            </div>

            <div class="row">

                <div class="col-12 col-xl-6">
     

                    <div class="card">

                        <div class="card-body">
                            <h3>List down every single item to put in dashboard</h3>
                        </div>
                    </div>
                </div>

        </div>

    </main>
@endsection
