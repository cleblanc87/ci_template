  <!-- BEGIN TOP NAVIGATION --> 
  <ul id="top-navigation"> 
    <li><a href="<?=base_url()?>">Home</a></li> 
    <li><a href="<?=base_url()?>signup">Register</a></li> 
    <li><a href="<?=base_url()?>login">Login</a></li> 
    <li><a href="<?=base_url()?>logout">Logout</a></li>				
    <li><a href="#">Drop Down</a> 
      <ul> 
        <li><a href="#">Link 1</a></li> 
        <li><a href="#">Link 2</a></li> 
        <li><a href="#">Link 3</a></li> 
        <li><a href="#">Link 4</a></li> 
      </ul> 
    </li> 
    <li>Hello<?=Current_User::user() ? ", ".Current_User::user()->username : ''?>! </li>
  </ul> 
<!-- END TOP NAVIGATION --> 
 
<!-- BEGIN SOCIAL MEDIA --> 
 
			<div id="social-media"> 
				<a href="#"><img src="<?=base_url()?>images/facebook.png" alt="" /></a> 
				<a href="#"><img src="<?=base_url()?>images/twitter.png" alt="" /></a> 
				<a href="#"><img src="<?=base_url()?>images/rss.png" alt="" /></a> 
			</div> 
<!-- END SOCIAL MEDIA --> 
 
<!-- BEGIN LOGO --> 
			<div id="logo"> 
				<a href="index.php"><img src="<?=base_url()?>images/logo.png" alt="LeetPress" /></a> 
			</div> 
<!-- END LOGO --> 
			
<!-- BEGIN HEADER BANNER --> 
			<div id="header-banner"> 
				<img src="<?=base_url()?>images/header-banner.png" alt="" /> 
			</div> 
<!-- END HEADER BANNER --> 
		<!-- BEGIN NAVIGATION --> 
			<div id="navigation-wrapper"> 
				<ul id="navigation"> 
					<li><a href="index.php">Home</a></li> 
					<li><a href="#">News</a> 
						<ul> 
							<li><a href="#">Archive</a></li> 
							<li><a href="news_post.php">News post</a></li> 
							<li><a href="#">PC</a></li> 
							<li><a href="#">PS3</a></li> 
							<li><a href="#">Xbox 360</a></li> 
						</ul> 
					</li> 
					<li><a href="#">Reviews</a> 
						<ul> 
							<li><a href="#">Reviews archive</a></li> 
							<li><a href="#">Review post</a></li> 
						</ul> 
					</li> 
					<li><a href="#">Videos</a> 
						<ul> 
							<li><a href="#">Videos archive</a></li> 
							<li><a href="#">Video post</a></li> 
						</ul> 
					</li> 
					<li><a href="#">Screenshots</a> 
						<ul> 
							<li><a href="#">Screenshots archive</a></li> 
							<li><a href="#">Screenshot post</a></li> 
						</ul> 
					</li> 
					<li><a href="#">Flash Games</a> 
						<ul> 
							<li><a href="#">Top 100</a></li> 
							<li><a href="#">Action</a></li> 
							<li><a href="#">Adventure</a></li> 
						</ul> 
					 </li> 
					<li><a href="#">Dropdown</a> 
						<ul> 
							<li><a href="#">Dropdown test</a></li> 
							<li><a href="#">Dropdown test</a> 
								<ul> 
									<li><a href="#">Dropdown test</a></li> 
								</ul> 
							</li> 
						</ul> 
					</li> 
				</ul> 
				
				<!-- BEGIN SEARCH --> 
				<div id="search"> 
					<form action="#"> 
						<input type="text" name="search" value="search here..." /> 
					</form> 
				</div> 
				<!-- END SEARCH --> 
				
			</div> 
