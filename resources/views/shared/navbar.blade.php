<nav class="navbar navbar-default">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed"
				data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span> <span
					class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Boom Bazaar - Beta Version</a>
		</div>

		<!-- Navbar Right -->
		<div class="collapse navbar-collapse"
			id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="/">Home</a></li>
				<li><a href="/tickets">Ticket List</a></li>
				<li><a href="/about">About</a></li>
				<li><a href="/contact">Contact</a></li>
				@if (Auth::check())
				<li class="dropdown"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown" role="button" aria-expanded="false">Hi, {!!Auth::user()->name;!!} <span
						class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="/profile">My Profile</a></li> 
						<li><a href="/logout">Logout</a></li> 
						@else
						<li class="dropdown"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown" role="button" aria-expanded="false">Member <span
						class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="/register">Register</a></li>
						<li><a href="/login">Login</a></li> 
						@endif
					</ul></li>
			</ul>
		</div>
	</div>
</nav>