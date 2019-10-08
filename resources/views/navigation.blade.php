<div class="navigation">
	<ul>
		<label>PAGES</label>
		<li><a href="{{ url('register') }}">Register</a></li>
		<li><a href="{{ url('login') }}">Login</a></li>
		<li><a href="{{ url('home') }}">User Dashboard</a></li>
		<li><a href="{{ url('members/create') }}">Add Member</a></li>
		<li><a href="{{ url('files/create') }}">Add File</a></li>
	</ul>
</div>

<style>
	@import url('https://fonts.googleapis.com/css?family=Karla&display=swap');

	body {
		margin: 0;
	}

	.navigation {
		display: flex;
		justify-content: center;
		align-items: center;
		height: 100%;
		background-color: #eff0f2;
	}

	.navigation ul {
		display: flex;
		justify-content: center;
		align-items: center;
		flex-wrap: wrap;
	}

	.navigation li a, .navigation li a:visited, .navigation li a:hover {
		text-decoration: none;
	    color: white;
	    text-transform: uppercase;
	    font-size: 12px;
	    font-family: 'Karla', sans-serif;
	    font-weight: bold;
	}

	.navigation li {
		display: block;
	}

	.navigation li a {
	    background: #f6903d;
	    margin: 10px;
	    border-radius: 40px;
	    height: 50px;
	    width: 150px;
	    display: flex;
	    justify-content: center;
	    align-items: center;
	    box-shadow: 0 11px 22px rgba(34, 34, 34, 0.2);
	}

	.navigation label {
		flex-basis: 100%;
		margin: 30px;
		margin-top: 0;
		font-family: 'Karla', sans-serif;
		font-size: 30px;
		text-align: center;
	}
</style>