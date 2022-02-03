<nav class="navbar-default navbar-static-top" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<b style="margin-left: 20px;margin-right:65px;">Files</b> <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-upload"></i> Upload</button>       
	</div>
	<div class=" border-bottom">
		<div class="full-left">
			<section class="full-top">
				<button id="toggle"><i class="fa fa-arrows-alt"></i></button>	
			</section>
			<form class=" navbar-left-right">
				<input type="text"  value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
				<input type="submit" value="" class="fa fa-search">
			</form>
			<div class="clearfix"> </div>
		</div>


		<!-- Brand and toggle get grouped for better mobile display -->

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="drop-men" >
			<ul class=" nav_1">

				<li class="dropdown at-drop">
					<a href="#" class="dropdown-toggle dropdown-at " data-toggle="dropdown"><i class="fa fa-globe"></i> <span class="number">5</span></a>
					<ul class="dropdown-menu menu1 " role="menu">
						<li><a href="#">

							<div class="user-new">
								<p>New user registered</p>
								<span>40 seconds ago</span>
							</div>
							<div class="user-new-left">

								<i class="fa fa-user-plus"></i>
							</div>
							<div class="clearfix"> </div>
						</a></li>
						<li><a href="#">
							<div class="user-new">
								<p>Someone special liked this</p>
								<span>3 minutes ago</span>
							</div>
							<div class="user-new-left">

								<i class="fa fa-heart"></i>
							</div>
							<div class="clearfix"> </div>
						</a></li>
						<li><a href="#">
							<div class="user-new">
								<p>John cancelled the event</p>
								<span>4 hours ago</span>
							</div>
							<div class="user-new-left">

								<i class="fa fa-times"></i>
							</div>
							<div class="clearfix"> </div>
						</a></li>
						<li><a href="#">
							<div class="user-new">
								<p>The server is status is stable</p>
								<span>yesterday at 08:30am</span>
							</div>
							<div class="user-new-left">

								<i class="fa fa-info"></i>
							</div>
							<div class="clearfix"> </div>
						</a></li>
						<li><a href="#">
							<div class="user-new">
								<p>New comments waiting approval</p>
								<span>Last Week</span>
							</div>
							<div class="user-new-left">

								<i class="fa fa-rss"></i>
							</div>
							<div class="clearfix"> </div>
						</a></li>
						<li><a href="#" class="view">View all messages</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret">Rackham<i class="caret"></i></span><img src="images/wo.jpg"></a>
					<ul class="dropdown-menu " role="menu">
						<li><a href="profile.html"><i class="fa fa-user"></i>Edit Profile</a></li>
						<li><a href="inbox.html"><i class="fa fa-envelope"></i>Inbox</a></li>
						<li><a href="calendar.html"><i class="fa fa-calendar"></i>Calender</a></li>
						<li><a href="inbox.html"><i class="fa fa-clipboard"></i>Tasks</a></li>
					</ul>
				</li>

			</ul>
		</div><!-- /.navbar-collapse -->
		<div class="clearfix">

		</div>

		<div class="navbar-default sidebar" role="navigation">
			<div class="sidebar-nav navbar-collapse">
				<ul class="nav" id="side-menu">
					@foreach ($res as $fres)
					<li>
						<a href="{{url('document/'.$fres->id)}}" class=" hvr-bounce-to-right">
							<i class="fa fa-file nav_icon "></i>
							<span class="nav-label">{{$fres['title']}}</span>
						</a>
					</li>
					@endforeach

				</ul>
			</div>
		</div>
	</nav>