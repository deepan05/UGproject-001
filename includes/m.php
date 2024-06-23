<div class="navigation">
<ul>
	<li class="list active">
		<a href="#">
			<span class="icon"><ion-icon name="person-outline"></ion-icon></span>
			<span class="text">edit</span>
		</a>
	</li>
	<li class="list">
		<a href="#">
			<span class="icon"><ion-icon name="reorder-four-outline"></ion-icon></span>
			<span class="text">orders</span>
		</a>
	</li>
	<li class="list">
		<a href="#">
			<span class="icon"><ion-icon name="create-outline"></ion-icon></span>
			<span class="text">compline</span>
		</a>
	</li>
	<li class="list">
		<a href="#">
			<span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
			<span class="text">customer</span>
		</a>
	</li>
	<li class="list">
		<a href="#">
			<span class="icon"><ion-icon name="bicycle-outline"></ion-icon></span>
			<span class="text">supply</span>
		</a>
	</li>
	<div class="indicator"></div>
</ul>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<style type="text/css">
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: 'poppins',sans-serif;
	}
	:root
	{
		--clr: #222327;
	}
	body{
		display: flex;
		justify-content: center;
		align-items: center;
		min-height: 100vh;
		background: var(--clr);
	}
	.navigation{
		width: 400px;
		height: 70px;
		background: white;
		position: relative;
		display: flex;
		justify-content: center;
		align-items: center;
		border-radius: 10px;
	}
	.navigation ul
	{
		display: flex;
		width: 350px;
	}
	.navigation ul li
	{
		position: relative;
		list-style: none;
		width: 70px;
		height: 70px;
		z-index: 1;
	}
	.navigation ul li a
	{
		position: relative;
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: column;
		width: 100%;
		text-align: center;
		font-weight: 500;
	}
	.navigation ul li a .icon
	{
		position: relative;
		display: block;
		line-height: 75px;
		font-size: 1,5em;
		text-align: center;
		transition: 0.5s;
		color: var(--clr);
	}
	.navigation ul li.active a .icon
	{
		transform: translatey(-28px);
	}
	.navigation ul li a .text
	{
		position: absolute;
		color: var(--clr);
		font-weight: 400;
		font-size: 0.75em;
		letter-spacing: 0.05em;
		transition: 0.5s;
		opacity: 0a;
		transform: translateY(20px);
	}
	.navigation ul li.active a .text
	{
		opacity: 1;
		transform: translatey(10px);
	}
	.indicator
	{
		position: absolute;
		top: -50px;
		width: 70px;
		height: 70px;
		background: #29fd53;
		border-radius: 50%;
		border: 6px solid var(--clr);
		transition: 0.5s;
	}
	.indicator::before
	{
		content: '';
		position: absolute;
		top: 50%;
		left: -23px;
		width: 20px;
		height: 20px;
		background: transparent;
		border-top-right-radius: 20px;
		box-shadow: 0px -10px 0 0 var(--clr);
	}
	.indicator::after
	{
		content: '';
		position: absolute;
		top: 50%;
		right: -23px;
		width: 20px;
		height: 20px;
		background: transparent;
		border-top-left-radius: 20px;
		box-shadow: 0px -10px 0 0 var(--clr);
	}
</style>