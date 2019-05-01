<nav class="navbar">
	<ul class="nav navbar-nav">

		<li class="nav-item <?php if ($file === 'about-us') echo 'active' ?>">
			<a href="about.php">About Us</a>
		</li>

		<li class="nav-item <?php if ($file === 'home') echo 'active' ?>">
			<a href="home.php">Home</a>
		</li>

		<li class="nav-item <?php if ($file === 'login') echo 'active' ?>">
			<a href="login.php">Login</a>
		</li>
	<ul>
</nav>