
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Project</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="script.js"></script>
  <script src="app.js"></script>
</head>
<body>
	<section class="header">
		<div class="header-top">
			<div class="topnav">
				<a href="javascript:void(0);" onclick="myFunction()">
					<div class="top-menu">Menu</div></a>
				<div id="myLinks">
					<a href="#">Create New Entry</a>
					<a href="#">My Topic Boxes</a>
    					<a href="#">Friends</a>
    					<a href="#">Invite New Friend</a>
    					<a href="#">Video Tutorial</a>
    					<a href="#">Search</a>
    					<a href="#">Setting</a>
    					<a href="#">Log Out</a>
				</div>	
			</div>
		</div>
		<div class="container ">
			<div class="row header-container">
				<div class="col-md-7">
					<div class="search-box">
						<form action="#">
      							<input type="text" placeholder="Search by Teams ,Member Or Entry Title" name="search"><input type="reset" value="✗" id="clear">
      							<button type="submit">Search</button>
    						</form>
  					</div>
				</div>
				<div class="col-md-5 section-profile">
					<div class="col-sm-12">
						<span class="profile-section">Joe Burros</span>
					</div>
					<div class="nav">
						<ul class="profile-details">
							<li class="profile">Home </li>
							<li class="profile">Setting</li>
							<li class="profile">Logout</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="description">
		<div class="header-below-content">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 header-content-column">
						<ul class="header-content">
							<li class="header-content-list">Create New Entry </li>
							<li class="header-content-list">My Topic Boxes </li>
							<li class="header-content-list">Friends</li>
							<li class="header-content-list">Invite New Friends</li>
						</ul>
					</div>
					<div class="col-sm-2 second-box">
						<div class="topic-boxes">
							<i class="fas fa-file icon1"></i>
							<span class="ml-2 topic-boxes-invite" style="">Topic Boxes Invite - </span>
							<span>1</span>
						</div>
					</div>
					<div class="col-sm-2 first-box">
						<div class="friend-request">
							<i class="fas fa-file"></i>
							<span class="ml-2">Friend Request - </span>
							<span>0</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row boby-section" style="margin-top:30px;">
				<div class="col-md-2 col-sm-2 left-sidebar">
					<div class="recent-searches">
						<div class="right-sidebar-content" >
							<p style="color:white;font-size:16px;">Recent Serches</p>

						</div>
						<div class="row" style="padding:10px 10px 1px;">
							<div class="col-md-10 col-sm-10">
								<p style="font-size:12px;font-weight:bold;">Recent Serches</p>

							</div>
							<div class="col-md-2 col-sm-2" style="right:0">
								<i class="fas fa-cloud"></i>
							</div>
						</div>
						<div class="row" style="padding:5px 10px 1px;">
							<div class="col-md-10 col-sm-10">
								<p style="font-size:12px;font-weight:bold;">Recent Serches</p>

							</div>
							<div class="col-md-2 col-sm-2" style="right:0">
								<i class="fas fa-cloud"></i>
							</div>
						</div>
					</div>
					<div class="recent-searches">
						<div class="right-sidebar-content" >
							<p style="color:white;font-size:16px;">Recent Serches</p>
						</div>
						<div class="row" style="padding:10px 10px 1px;">
							<div class="col-md-10 col-sm-10">
								<p style="font-size:12px;font-weight:bold;">Recent Serches</p>
							</div>
							<div class="col-md-2 col-sm-2" style="right:0">
								<i class="fas fa-cloud"></i>
							</div>
						</div>
						<div class="row" style="padding:5px 10px 1px;">
							<div class="col-md-10 col-sm-10">
								<p style="font-size:12px;font-weight:bold;">Recent Serches</p>
							</div>
							<div class="col-md-2 col-sm-2" style="right:0">
								<i class="fas fa-cloud"></i>
							</div>
						</div>
						<div class="row" style="padding:5px 10px 1px;">
							<div class="col-md-10 col-sm-10">
								<p style="font-size:12px;font-weight:bold;">Recent Serches</p>

							</div>
							<div class="col-md-2" style="right:0">
								<i class="fas fa-cloud"></i>
							</div>
						</div>
						<div class="row" style="padding:5px 10px 1px;">
							<div class="col-md-10">
								<p style="font-size:12px;font-weight:bold;">Recent Serches</p>

							</div>
							<div class="col-md-2" style="right:0">
								<i class="fas fa-cloud"></i>
							</div>
						</div>
						<div class="row" style="padding:5px 10px 1px;">
							<div class="col-md-10">
								<p style="font-size:12px;font-weight:bold;">Recent Serches</p>

							</div>
							<div class="col-md-2" style="right:0">
								<i class="fas fa-cloud"></i>
							</div>
						</div>
						<div class="row" style="padding:5px 10px 1px;">
							<div class="col-md-10">
								<p style="font-size:12px;font-weight:bold;">Recent Serches</p>

							</div>
							<div class="col-md-2" style="right:0">
								<i class="fas fa-cloud"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="entries-section" style="margin:0 20px;">
						<h2 style="font-size:32px;">Entries</h2>
					<div class="row">
						<div class="col-sm-6 entries-section-all">
							<span style="font-size:18px;">All Entries</span>
						</div>
						<div class="col-sm-6 entries-section-subbsribed" >
							<span style="font-size:18px;margin-left:1px;">Subscribed</span>
						</div>
					</div>
					<!--
					<div class="row" style="background-color:#f2f2f2;margin-top:30px;">
						<div class="active" style="width:25%;text-align:center;" >
							<div style="margin:50px;background-color:#dddddd;padding:10px; border-radius:20px 20px 0 0;">
								<span style="font-size:18px;">All Members</span>
							</div>
						</div>
						<div class="" style="width:25%;text-align:center;">
							<div style="margin:50px;background-color:#dddddd;padding:10px;border-radius:20px 20px 0 0;">
								<span style="font-size:18px;">Friends</span>
							</div>
						</div>
						<div class="" style="width:25%;text-align:center;">
							<div style="margin:50px;background-color:#dddddd;padding:10px;border-radius:20px 20px 0 0">
								<span style="font-size:18px;">New Entry</span>
							</div>
						</div>
						<div class="" style="width:25%;text-align:center;">
							<div style="margin:50px;background-color:#dddddd;padding:10px;border-radius:20px 20px 0 0">
								<span style="font-size:18px;">New Comment</span>
							</div>	
						</div>
					</div>	
					-->
					<div class="row main-entries-section">
						<ul class="all-entries-list">
							<li class="ram active">All Members </li>
							<li class="ram">Friends</li>
							<li class="ram">New Entry</li>
							<li class="ram">New Comment</li>
						</ul>
					</div>
					<div class="">
					<div class="image-box-section">
						<div class="row">
						<div class="col-sm-2 image-box">
							<img src="ram.jpg" alt="Ram">
						</div>
						<div class="col-sm-10">
							<div style="font-size:18px;font-weight:bold;">Subscribed</div>
							<div class="profile-name">
							<div style="font-size:12px;">by 
								<span><a href="#">Name </a>l</span>
								<span>February 10,2022 </span>l
								<span style="color:green;">Subscribed </span>
							</div>
							<div style="font-size:12px;"> 
								<span>From Topic Box:</span>
								<span><a href="#">My Faviorate Movie </a> </span>
							</div>
							</div>
						</div>
					</div>
					</div><div class="image-box-section">
						<div class="row">
						<div class="col-sm-2 image-box">
							<img src="ram.jpg" alt="Ram">
						</div>
						<div class="col-sm-10">
								<div id="type"><a href="#">NEW ENTRY </a></div>
							<div style="font-size:18px;font-weight:bold;">Subscribed</div>
							<div class="profile-name">
							<div style="font-size:12px;">by 
								<span><a href="#">Name </a>l</span>
								<span>February 10,2022 </span>l
								<span style="color:green;">Subscribed </span>
							</div>
							<div style="font-size:12px;"> 
								<span>From Topic Box:</span>
								<span><a href="#">My Faviorate Movie </a> </span>
							</div>
							</div>
						</div>
					</div>
					</div><div class="image-box-section">
						<div class="row">
						<div class="col-sm-2 image-box">
							<img src="ram.jpg" alt="Ram">
						</div>
						<div class="col-sm-10">
							<div id="type"><a href="#">NEW COMMENT </a></div>
							<div style="font-size:18px;font-weight:bold;">Subscribed</div>
							<div class="profile-name">
							<div style="font-size:12px;">by 
								<span><a href="#">Name </a>l</span>
								<span>February 10,2022 </span>l
								<span style="color:green;">Subscribed </span>
							</div>
							<div style="font-size:12px;"> 
								<span>From Topic Box:</span>
								<span><a href="#">My Faviorate Movie </a> </span>
							</div>
							</div>
						</div>
					</div>
					</div><div class="image-box-section">
						<div class="row">
						<div class="col-sm-2 image-box">
							<img src="ram.jpg" alt="Ram">
						</div>
						<div class="col-sm-10">
							<div style="font-size:18px;font-weight:bold;">Subscribed</div>
							<div class="profile-name">
							<div style="font-size:12px;">by 
								<span><a href="#">Name </a>l</span>
								<span>February 10,2022 </span>l
								<span style="color:green;">Subscribed </span>
							</div>
							<div style="font-size:12px;"> 
								<span>From Topic Box:</span>
								<span><a href="#">My Faviorate Movie </a> </span>
							</div>
							</div>
						</div>
					</div>
					</div>
					<div class="image-box-section">
						<div class="row">
						<div class="col-sm-2 image-box">
							<img src="ram.jpg" alt="Ram">
						</div>
						<div class="col-sm-10 image-section-box-content">
							<div style="font-size:18px;font-weight:bold;">Subscribed</div>
							<div class="profile-name">
							<div style="font-size:12px;">by 
								<span><a href="#">Name </a>l</span>
								<span>February 10,2022 </span>l
								<span style="color:green;">Subscribed </span>
							</div>
							<div style="font-size:12px;"> 
								<span>From Topic Box:</span>
								<span><a href="#">My Faviorate Movie </a> </span>
							</div>
							</div>
						</div>
					</div>
					</div>
				</div>
					</div>
					
					

				</div>
				<div class="col-sm-2 right-sidebar">
					<div class="right-sidebar-content" style="background-color:#2ec0db; padding:5px 10px 1px;align-items:center;">
					<p style="color:white;font-size:16px;">Video Tutorial</p>

				</div>
				<ul class="right-sidebar-content">
						<li class="right-sidebar-content-list">Create New Entry </li>
						<li class="right-sidebar-content-list">My Topic Boxes </li>
						<li class="right-sidebar-content-list">Friends</li>
						<li class="right-sidebar-content-list">Invite New Friends</li>
						<li class="right-sidebar-content-list">Invite New Friends</li>
						<li class="right-sidebar-content-list">Invite New Friends</li>
						<li class="right-sidebar-content-list">Invite New Friends</li>
						<li class="right-sidebar-content-list">Invite New Friends</li>
						<li class="right-sidebar-content-list">Invite New Friends</li>
						<li class="right-sidebar-content-list">Invite New Friends</li>
						<li class="right-sidebar-content-list">Invite New Friends</li>
						<li class="right-sidebar-content-list">Invite New Friends</li>
						<li class="right-sidebar-content-list">Invite New Friends</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 footer-first-column">
					<ul class="nav-menu">
						<li class="nav-menu-list">About Us </li>
						<li class="nav-menu-list">Contact Us</li>
						<li class="nav-menu-list">Terms of Use</li>
						<li class="nav-menu-list">Privacy Policy</li>
						<li class="nav-menu-list">Feedback</li>
					</ul>
				</div>
				<div class="col-sm-2 footer-second-column">
					<span class="copywrite">©2022</span>
				</div>
			</div>
		</div>
	</section>
</body>
</html>
