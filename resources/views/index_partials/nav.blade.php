<nav class="fh5co-nav" role="navigation">
		<div class="container-wrap">
			<div class="top-menu">
				<div class="row">
					<div class="col-md-12 col-offset-0 text-center">
						<div id="fh5co-logo"><a href="{{ '/' }}">Motivate Yourself</a></div>
					</div>
					<div class="col-md-12 col-md-offset-0 text-center menu-1">
						<ul>
							<li class="{{ Request::is('/') ? 'active' : ''}}"><a href="{{ '/' }}">Home</a></li>
							<li><a href="sermons.html">Authors</a></li>
							<li class="{{ Request::is('ContactUs') ? 'active' : ''}}"><a href="{{ 'ContactUs' }}">Contact</a></li>
							<li><a href="{{ 'register' }}">Registration</a></li>
							<li><a href="{{ 'login' }}">Login</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>