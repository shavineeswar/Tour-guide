<html>
	<head>
		<title></title>
		<style>
			body{
					margin:0;
					padding:0;
					font-family:arial;
				}
			.container{
					position:absolute;
					left:0;
					top:0;
					width:100%;
					height:100vh;
					animation:animate 16s ease-in-out infinite;
					background-size:cover;
				}
			.outer{
					position:absolute;
					left:0;
					top:0;
					width:100%;
					height:100vh;
					
				}
			.details{
					position:absolute;
					left:50%;
					top:50%;
					transform:translate(-50%,-50%);
					text-align:center;
				}
			.details h1{
					font-size:4em;
					color:#fff;
				}
			
			
				
			@keyframes animate{
					0%,100%{
						background-image:url(1.jpeg);
					}
					25%{
						background-image:url(2.jpeg);
					}
					45%{
						background-image:url(3.jpeg);
					}
					100%{
						background-image:url(4.jpeg);
					}
				}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="outer">
				<div class="details">
					<h1>WELCOME TO EXCITO</h1>
						<span><button><a href="../login/login.php"><h3> Log In</h3></a></button></span>
				</div>
			</div>
		</div>
	</body>
</html>