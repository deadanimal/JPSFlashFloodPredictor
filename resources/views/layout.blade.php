<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="The prototype maker">
	<meta name="author" content="Prototype">

	<title>Flash Flood Predictor</title>

	<link href="/spark/css/modern.css" rel="stylesheet"> 
	<style>
		body {
			opacity: 0;
		}
	</style>
	<script src="/spark/js/settings.js"></script>
</head>

<body>
	<div class="splash active">
		<div class="splash-icon"></div>
	</div>

	<div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<a class="sidebar-brand" href="/dashboard">
				Predictor
			</a>
			<div class="sidebar-content">
				<div class="sidebar-user">
					<div class="fw-bold">{{ Auth::user()->name }}</div>
					<small>{{ ucfirst(Auth::user()->user_type) }}</small>
				</div>

				<ul class="sidebar-nav">

					<li class="sidebar-item">
						<a class="sidebar-link" href="/procedures"> <span class="align-middle">Model Builder</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="/thresholds"> <span class="align-middle">Nilai Ambang @ Threshold</span>
						</a>
					</li>		
				
					
					<li class="sidebar-item">
						<a class="sidebar-link" href="/weightages"> <span class="align-middle">Pemberat Kriteria @ Weightage</span>
						</a>
					</li>					

					<li class="sidebar-item">
						<a class="sidebar-link" href="/shapefiles"> <span class="align-middle">Geo Database</span>
						</a>
					</li>		
                    
					<li class="sidebar-item">
						<a class="sidebar-link" href="/integrations"> <span class="align-middle">Integration</span>
						</a>
					</li>		                    
					
					@if(Auth::user()->user_type == 'admin')
					<li class="sidebar-item">
						<a class="sidebar-link" href="/users">
							<span class="align-middle">User</span>
						</a>
					</li>								
					@endif			

				</ul>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-theme">
				<a class="sidebar-toggle d-flex me-2">
					<i class="hamburger align-self-center"></i>
				</a>

				{{-- <form class="d-none d-sm-inline-block">
					<input class="form-control form-control-lite" type="text" placeholder="Search projects...">
				</form> --}}

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav ms-auto">
	
						<li class="nav-item dropdown ms-lg-2">
							<a class="nav-link dropdown-toggle position-relative" href="/spark/#" id="userDropdown" data-bs-toggle="dropdown">
								<i class="align-middle fas fa-cog"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="/profile"><i class="align-middle me-1 fas fa-fw fa-user"></i> Profile</a>
								<div class="dropdown-divider"></div>
								<form action="/logout" method="POST">
									@csrf
									<button class="dropdown-item" type="submit"><i class="align-middle me-1 fas fa-fw fa-arrow-alt-circle-right"></i> Sign out</button>
								</form>
								
							</div>
						</li>
					</ul>
				</div>
			</nav>

			@yield('content')


		</div>
        
	</div>

	
	<script src="/spark/js/app.js"></script>

</body>

</html>