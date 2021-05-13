
<!DOCTYPE html>
<html>
<head>
	<title>eLibrary</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="home.css">
	<link rel="stylesheet" type="text/css" href="books.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="lib.ico" type="image/gif" sizes="30x30"> 

	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

	<!-- rating js -->
	<link rel="stylesheet" type="css/txt" href="style.css">
	<script type="text/javascript" src="rating.js"></script> 


	<script>
		function on() {
			document.getElementById("overlay").style.display = "block";
		}

		function off() {
			document.getElementById("overlay").style.display = "none";
		}
	</script>

</head>
<body>

	<!-- loghin form  -->

	<div id="overlay" >
		
		<div class="login-container">	

			<form action=" " method="post">

				<div class="img-container">
					<img src="log.png" alt="" class="login-img">
				</div>

				<div class="form-container">
					<label><b>Username</b></label>
					<input type="text" placeholder="Enter Username" name="uname">

					<label><b>Password</b></label>
					<input type="password" placeholder="Enter Password" name="psw">

					<button type="submit" class="log-btn">Login</button>
					<label>
						<input type="checkbox" checked="checked" name="remember"> Remember me
					</label>
				</div>

				<div class="form-container" style="background-color:#f1f1f1">
					<button type="button" onclick="off()" class="cancel-btn">Cancel</button>
					<span class="password">Forgot<a href="#">password?</a></span>
				</div>

			</form>

		</div>

	</div>

	<!-- loghin form -->
	
	<div style="background-color: white; height: 1560px;">

		<!-- start === Bangla book container -->

		<div id = "main-box">
			
			<div>
				<h3 style="letter-spacing: 6px;text-align: center;font-family: verdana;">Read Books Online</h3>
				<h4 style="text-align: center;font-family: courier;"><q>the more you read, the more you will learn</q></h4>
			</div>

			<p class="elib"><b>eLibrary</b></p>

			<div class="navbar-top" >

				<ul class="navtop">

					<li style="padding-left: 30px;"><a href="index.html"><i class="fa fa-home"><b> Home</b></i></a></li>
					<li class="selected"><a href="#books" class="selected"><b>Books</b></a></li>
					<li><a href="magazine.html"><b>Magazines<b></a></li>
						<li><a href="#newspaper"><b>Newspapers</b></a></li>

						<li class="nav-context2"><input type="text" name="search" placeholder="search book here..." class="text-field"></li>

						<li><button class="nav-btn"><i class="fa fa-search"></i></button></li>
						<li class="notification"><a href="#notification"><i class="fa fa-bell"></i></a></li>
						<li><button onclick="on()" class="login-btn"><i class="far fa-user"></i></button></li>

					</ul>

				</div>

				<div id = "left-box">
					<p class="bangla-book">Bangla Novel Books</p>
					<div class="bangla-novel-book-container" >

						<!-- container 1 -->

						<div class="book-container">

							<div class="book-writer-name">
								<span class="writer-font-size"><b>&nbsp;Book Name: </b><i>Noboni</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Author: </b><i>Humayon Ahmed</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Category: </b><i>Novel</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Published: </b><i>2003</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Total Pages: </b><i>124</i></span><br><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star writer-font-size"></span><br>
								<span class="writer-font-size">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8 Ratings</span>
								<span class="writer-font-size"> / 255 Reviews.</span>
								<br><br>
								<a href="home/noboni.pdf" class="book-read-pdf-btn">Read This Book</a>
							</div>

							<img src="home/noboni.jpg" alt="" height="200px"  width="169px" class="image">

							<div style="padding-left: 7px;padding-top: 5px;" class="book-rated">
								&nbsp;&nbsp;&nbsp;<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
							</div>


						</div>

						<!-- container 2 -->

						<div class="book-container">

							<div class="book-writer-name">
								<span class="writer-font-size"><b>&nbsp;Book Name: </b><i>Ghumer Ghorey</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Author: </b><i>Kazi N. Islam</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Category: </b><i>Novel</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Published: </b><i>2000</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Total Pages: </b><i>120</i></span><br><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star writer-font-size"></span><br>
								<span class="writer-font-size">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8 Ratings</span>
								<span class="writer-font-size"> / 255 Reviews.</span>
								<br><br>
								<a href="" class="book-read-pdf-btn">Read This Book</a>
							</div>

							<img src="home/ghumer ghorey.jpg" alt="" height="200px"  width="169px" class="image">

							<div style="padding-left: 7px;padding-top: 5px;display: block;" class="book-rated">
								&nbsp;&nbsp;&nbsp;<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
							</div>


						</div>

						<!-- container 3 -->

						<div class="book-container">

							<div class="book-writer-name">
								<span class="writer-font-size"><b>&nbsp;Book Name: </b><i>Kalbela</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Author: </b><i>S. muzumdar</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Category: </b><i>Novel</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Published: </b><i>2010</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Total Pages: </b><i>220</i></span><br><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star writer-font-size"></span><br>
								<span class="writer-font-size">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8 Ratings</span>
								<span class="writer-font-size"> / 255 Reviews.</span>
								<br><br>
								<a href="" class="book-read-pdf-btn">Read This Book</a>
							</div>

							<img src="home/kalbela.jpg" alt="" height="200px"  width="169px" class="image">

							<div style="padding-left: 7px;padding-top: 5px;display: block;" class="book-rated">
								&nbsp;&nbsp;&nbsp;<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
							</div>


						</div>

						<!-- container 4 -->

						<div class="book-container">

							<div class="book-writer-name">
								<span class="writer-font-size"><b>&nbsp;Book Name: </b><i>Himu</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Author: </b><i>Humayon Ahmed</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Category: </b><i>Drama</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Published: </b><i>2005</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Total Pages: </b><i>724</i></span><br><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star writer-font-size"></span><br>
								<span class="writer-font-size">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8 Ratings</span>
								<span class="writer-font-size"> / 255 Reviews.</span>
								<br><br>
								<a href="" class="book-read-pdf-btn">Read This Book</a>
							</div>

							<img src="home/himu.jpg" alt="" height="200px"  width="169px" class="image">

							<div style="padding-left: 7px;padding-top: 5px;display: block;" class="book-rated">
								&nbsp;&nbsp;&nbsp;<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
							</div>


						</div>

						<!-- container 5 -->
						<div class="book-container">

							<div class="book-writer-name">
								<span class="writer-font-size"><b>&nbsp;Book Name: </b><i>Himu</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Author: </b><i>Humayon Ahmed</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Category: </b><i>Drama</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Published: </b><i>2005</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Total Pages: </b><i>724</i></span><br><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star writer-font-size"></span><br>
								<span class="writer-font-size">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8 Ratings</span>
								<span class="writer-font-size"> / 255 Reviews.</span>
								<br><br>
								<a href="" class="book-read-pdf-btn">Read This Book</a>
							</div>

							<img src="home/himu.jpg" alt="" height="200px"  width="169px" class="image">

							<div style="padding-left: 7px;padding-top: 5px;display: block;" class="book-rated">
								&nbsp;&nbsp;&nbsp;<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
							</div>


						</div>

						<!-- container 6 -->

						<div class="book-container">

							<div class="book-writer-name">
								<span class="writer-font-size"><b>&nbsp;Book Name: </b><i>Noboni</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Author: </b><i>Humayon Ahmed</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Category: </b><i>Novel</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Published: </b><i>2003</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Total Pages: </b><i>124</i></span><br><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star writer-font-size"></span><br>
								<span class="writer-font-size">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8 Ratings</span>
								<span class="writer-font-size"> / 255 Reviews.</span>
								<br><br>
								<a href="home/noboni.pdf" class="book-read-pdf-btn">Read This Book</a>
							</div>

							<img src="home/noboni.jpg" alt="" height="200px"  width="169px" class="image">

							<div style="padding-left: 7px;padding-top: 5px;display: block;" class="book-rated">
								&nbsp;&nbsp;&nbsp;<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
							</div>


						</div>

						<!-- container 7 -->

						<div class="book-container">

							<div class="book-writer-name">
								<span class="writer-font-size"><b>&nbsp;Book Name: </b><i>Ghumer Ghorey</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Author: </b><i>Kazi N. Islam</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Category: </b><i>Novel</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Published: </b><i>2000</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Total Pages: </b><i>120</i></span><br><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star writer-font-size"></span><br>
								<span class="writer-font-size">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8 Ratings</span>
								<span class="writer-font-size"> / 255 Reviews.</span>
								<br><br>
								<a href="" class="book-read-pdf-btn">Read This Book</a>
							</div>

							<img src="home/ghumer ghorey.jpg" alt="" height="200px"  width="169px" class="image">

							<div style="padding-left: 7px;padding-top: 5px;display: block;" class="book-rated">
								&nbsp;&nbsp;&nbsp;<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
							</div>


						</div>

						<!-- container 8 -->

						<div class="book-container">

							<div class="book-writer-name">
								<span class="writer-font-size"><b>&nbsp;Book Name: </b><i>Kalbela</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Author: </b><i>S. muzumdar</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Category: </b><i>Novel</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Published: </b><i>2010</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Total Pages: </b><i>220</i></span><br><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star writer-font-size"></span><br>
								<span class="writer-font-size">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8 Ratings</span>
								<span class="writer-font-size"> / 255 Reviews.</span>
								<br><br>
								<a href="" class="book-read-pdf-btn">Read This Book</a>
							</div>

							<img src="home/kalbela.jpg" alt="" height="200px"  width="169px" class="image">

							<div style="padding-left: 7px;padding-top: 5px;display: block;" class="book-rated">
								&nbsp;&nbsp;&nbsp;<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
							</div>


						</div>
					</div>

					<button class="next-btn">1</button>
					<button class="next-btn">2</button>
					<button class="next-btn">3</button>
					<button class="next-btn">4</button>


					<!-- stop === Bangla book container -->
					<!-- start === English book container -->

					<p class="bangla-book">English Novel Books</p>

					<div class="bangla-novel-book-container" >

						<!-- container 1 -->

						<div class="book-container">

							<div class="book-writer-name">
								<span class="writer-font-size"><b>&nbsp;Book Name: </b><i>The Book Thief</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Author: </b><i>Markus Zusak</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Category: </b><i>Novel</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Published: </b><i>2013</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Total Pages: </b><i>104</i></span><br><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star writer-font-size"></span><br>
								<span class="writer-font-size">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8 Ratings</span>
								<span class="writer-font-size"> / 255 Reviews.</span>
								<br><br>
								<a href="home/noboni.pdf" class="book-read-pdf-btn">Read This Book</a>
							</div>

							<img src="book/the book thief.jpg" alt="" height="200px"  width="169px" class="image">

							<div style="padding-left: 7px;padding-top: 5px;display: block;" class="book-rated">
								&nbsp;&nbsp;&nbsp;<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
							</div>


						</div>

						<!-- container 2 -->

						<div class="book-container">

							<div class="book-writer-name">
								<span class="writer-font-size"><b>&nbsp;Book Name: </b><i>The Alchemist</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Author: </b><i>Paulo Choelho</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Category: </b><i>Novel</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Published: </b><i>2003</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Total Pages: </b><i>124</i></span><br><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star writer-font-size"></span><br>
								<span class="writer-font-size">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8 Ratings</span>
								<span class="writer-font-size"> / 255 Reviews.</span>
								<br><br>
								<a href="" class="book-read-pdf-btn">Read This Book</a>
							</div>

							<img src="book/the alchemist.jpg" alt="" height="200px"  width="169px" class="image">

							<div style="padding-left: 7px;padding-top: 5px;display: block;" class="book-rated">
								&nbsp;&nbsp;&nbsp;<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
							</div>


						</div>

						<!-- container 3 -->

						<div class="book-container">

							<div class="book-writer-name">
								<span class="writer-font-size"><b>&nbsp;Book Name: </b><i>Sherlock Holmes</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Author: </b><i>A.C. Doyle</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Category: </b><i>Stories</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Published: </b><i>2007</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Total Pages: </b><i>104</i></span><br><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star writer-font-size"></span><br>
								<span class="writer-font-size">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8 Ratings</span>
								<span class="writer-font-size"> / 255 Reviews.</span>
								<br><br>
								<a href="" class="book-read-pdf-btn">Read This Book</a>
							</div>

							<img src="book/sherlock holmes.jpg" alt="" height="200px"  width="169px" class="image">

							<div style="padding-left: 7px;padding-top: 5px;display: block;" class="book-rated">
								&nbsp;&nbsp;&nbsp;<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
							</div>


						</div>

						<!-- container 4 -->

						<div class="book-container">

							<div class="book-writer-name">
								<span class="writer-font-size"><b>&nbsp;Book Name: </b><i>Harry Potter</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Author: </b><i>J.K. Rowling</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Category: </b><i>Sci-Fi</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Published: </b><i>2004</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Total Pages: </b><i>324</i></span><br><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star writer-font-size"></span><br>
								<span class="writer-font-size">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8 Ratings</span>
								<span class="writer-font-size"> / 255 Reviews.</span>
								<br><br>
								<a href="" class="book-read-pdf-btn">Read This Book</a>
							</div>

							<img src="book/harry potter.jpg" alt="" height="200px"  width="169px" class="image">

							<div style="padding-left: 7px;padding-top: 5px;display: block;" class="book-rated">
								&nbsp;&nbsp;&nbsp;<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
							</div>


						</div>

						<!-- container 5 -->
						<div class="book-container">

							<div class="book-writer-name">
								<span class="writer-font-size"><b>&nbsp;Book Name: </b><i>Harry Potter</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Author: </b><i>J.K. Rowling</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Category: </b><i>Sci-Fi</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Published: </b><i>2004</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Total Pages: </b><i>324</i></span><br><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star writer-font-size"></span><br>
								<span class="writer-font-size">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8 Ratings</span>
								<span class="writer-font-size"> / 255 Reviews.</span>
								<br><br>
								<a href="" class="book-read-pdf-btn">Read This Book</a>
							</div>

							<img src="book/harry potter.jpg" alt="" height="200px"  width="169px" class="image">

							<div style="padding-left: 7px;padding-top: 5px;display: block;" class="book-rated">
								&nbsp;&nbsp;&nbsp;<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
							</div>


						</div>

						<!-- container 6 -->

						<div class="book-container">

							<div class="book-writer-name">
								<span class="writer-font-size"><b>&nbsp;Book Name: </b><i>The Book Thief</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Author: </b><i>Markus Zusak</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Category: </b><i>Novel</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Published: </b><i>2013</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Total Pages: </b><i>104</i></span><br><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star writer-font-size"></span><br>
								<span class="writer-font-size">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8 Ratings</span>
								<span class="writer-font-size"> / 255 Reviews.</span>
								<br><br>
								<a href="home/noboni.pdf" class="book-read-pdf-btn">Read This Book</a>
							</div>

							<img src="book/the book thief.jpg" alt="" height="200px"  width="169px" class="image">

							<div style="padding-left: 7px;padding-top: 5px;display: block;" class="book-rated">
								&nbsp;&nbsp;&nbsp;<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
							</div>


						</div>

						<!-- container 7 -->

						<div class="book-container">

							<div class="book-writer-name">
								<span class="writer-font-size"><b>&nbsp;Book Name: </b><i>Sherlock Holmes</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Author: </b><i>A.C. Doyle</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Category: </b><i>Stories</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Published: </b><i>2007</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Total Pages: </b><i>104</i></span><br><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star writer-font-size"></span><br>
								<span class="writer-font-size">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8 Ratings</span>
								<span class="writer-font-size"> / 255 Reviews.</span>
								<br><br>
								<a href="" class="book-read-pdf-btn">Read This Book</a>
							</div>

							<img src="book/sherlock holmes.jpg" alt="" height="200px"  width="169px" class="image">

							<div style="padding-left: 7px;padding-top: 5px;display: block;" class="book-rated">
								&nbsp;&nbsp;&nbsp;<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
							</div>


						</div>

						<!-- container 8 -->

						<div class="book-container">

							<div class="book-writer-name">
								<span class="writer-font-size"><b>&nbsp;Book Name: </b><i>The Alchemist</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Author: </b><i>Paulo Choelho</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Category: </b><i>Novel</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Published: </b><i>2003</i></span><br>
								<span class="writer-font-size"><b>&nbsp;Total Pages: </b><i>124</i></span><br><br>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star checked writer-font-size"></span>
								<span class="fa fa-star writer-font-size"></span><br>
								<span class="writer-font-size">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8 Ratings</span>
								<span class="writer-font-size"> / 255 Reviews.</span>
								<br><br>
								<a href="" class="book-read-pdf-btn">Read This Book</a>
							</div>

							<img src="book/the alchemist.jpg" alt="" height="200px"  width="169px" class="image">

							<div style="padding-left: 7px;padding-top: 5px;display: block;" class="book-rated">
								&nbsp;&nbsp;&nbsp;<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
								<span class="rateMe">☆</span>
							</div>


						</div>
					</div>
					<button class="next-btn">1</button>
					<button class="next-btn">2</button>
					<button class="next-btn">3</button>
					<button class="next-btn">4</button>

					<!-- stop === English book container -->

				</div>

			</div>


			<div id = "right-box">
				<span class="all-books">All Books</span>

				<div class="side-navbar">
					<ul class="side-navbar-ul">
						<li style="background-color:rgb(89, 235, 128);" class="underline-li"><a href="#" class="li-font">&nbsp;&nbsp;&nbsp;&nbsp;<img src="books.png" alt="" height="14px" width="25px" > Book Category</a></li><br>
						<li class="underline-li li-selected"><a href="#novel"  class="li-font "><img src="study.png" alt="" height="13px" width="14px"> Novels</a></li><br>
						<li class="underline-li"><a href="#bbc" class="li-font"><img src="study.png" alt="" height="13px" width="14px"> Poem</a></li><br>
						<li class="underline-li"><a href="#story books" class="li-font"><img src="study.png" alt="" height="13px" width="14px"> Story Books</a></li><br>
						<li class="underline-li"><a href="#short stories" class="li-font"><img src="study.png" alt="" height="13px" width="14px"> Science Fiction</a></li><br>
						<li class="underline-li"><a href="#bbc" class="li-font"><img src="study.png" alt="" height="13px" width="14px"> Computer Science</a></li>
					</ul>

					<ul class="side-navbar-ul">
						<li style="background-color:rgb(89, 235, 128);" class="underline-li"><a href="#" class="li-font">&nbsp;&nbsp;&nbsp;&nbsp;<img src="books.png" alt="" height="14px" width="25px" > Bangla Writer</a></li><br>
						<li class="underline-li"><a href="#novel" class="li-font"><img src="study.png" alt="" height="13px" width="14px"> Ahsan Habib</a></li><br>
						<li class="underline-li"><a href="#bbc" class="li-font"><img src="study.png" alt="" height="13px" width="14px"> Al Mahmud</a></li><br>
						<li class="underline-li"><a href="#story books" class="li-font"><img src="study.png" alt="" height="13px" width="14px"> Begum Rokeya</a></li><br>
						<li class="underline-li"><a href="#short stories" class="li-font"><img src="study.png" alt="" height="13px" width="14px"> Humayun Ahmed</a></li><br>
						<li class="underline-li"><a href="#bbc" class="li-font"><img src="study.png" alt="" height="13px" width="14px"> Jahanara Imam</a></li>
						<li class="underline-li"><a href="#bbc" class="li-font"><img src="study.png" alt="" height="13px" width="14px"> Jasimuddin</a></li>
						<li class="underline-li"><a href="#bbc" class="li-font"><img src="study.png" alt="" height="13px" width="14px"> Kazi Nazrul Islam</a></li>
						<li class="underline-li"><a href="#bbc" class="li-font"><img src="study.png" alt="" height="13px" width="14px"> M. Madhusudan Dutta</a></li>
						<li class="underline-li"><a href="#bbc" class="li-font"><img src="study.png" alt="" height="13px" width="14px"> Muhammed Zafar Iqbal</a></li>
						<li class="underline-li"><a href="#bbc" class="li-font"><img src="study.png" alt="" height="13px" width="14px"> Munier Choudhury</a></li>
					</ul>

					<ul class="side-navbar-ul">
						<li style="background-color:rgb(89, 235, 128);" class="underline-li"><a href="#" class="li-font">&nbsp;&nbsp;&nbsp;&nbsp;<img src="books.png" alt="" height="14px" width="25px" > English Writer</a></li><br>
						<li class="underline-li"><a href="#novel" class="li-font"><img src="study.png" alt="" height="13px" width="14px"> Miguel de Cervantes</a></li><br>
						<li class="underline-li"><a href="#bbc" class="li-font"><img src="study.png" alt="" height="13px" width="14px"> Charles Dickens</a></li><br>
						<li class="underline-li"><a href="#story books" class="li-font"><img src="study.png" alt="" height="13px" width="14px"> J.R.R. Tolkien</a></li><br>
						<li class="underline-li"><a href="#bbc" class="li-font"><img src="study.png" alt="" height="13px" width="14px"> Antoine de Saint-Exuper</a></li>
						<li class="underline-li"><a href="#bbc" class="li-font"><img src="study.png" alt="" height="13px" width="14px"> J.K. Rowling</a></li>
						<li class="underline-li"><a href="#bbc" class="li-font"><img src="study.png" alt="" height="13px" width="14px"> Agatha Christie</a></li>
						<li class="underline-li"><a href="#bbc" class="li-font"><img src="study.png" alt="" height="13px" width="14px"> Lewis Carroll</a></li>
						<li class="underline-li"><a href="#bbc" class="li-font"><img src="study.png" alt="" height="13px" width="14px"> Paulo Coelho</a></li>
						<li class="underline-li"><a href="#bbc" class="li-font"><img src="study.png" alt="" height="13px" width="14px"> Robert James Waller</a></li>
						<li class="underline-li"><a href="#bbc" class="li-font"><img src="study.png" alt="" height="13px" width="14px"> Arthur Conan Doyle</a></li>
					</ul>

					<ul class="side-navbar-ul">
						<li style="background-color:rgb(89, 235, 128);" class="underline-li"><a href="#" class="li-font">&nbsp;&nbsp;&nbsp;&nbsp;<img src="books.png" alt="" height="14px" width="25px" > Indian Writer</a></li><br>
						<li class="underline-li"><a href="#novel" class="li-font"><img src="study.png" alt="" height="13px" width="14px"> Rabindranath Tagore</a></li><br>
						<li class="underline-li"><a href="#bbc" class="li-font"><img src="study.png" alt="" height="13px" width="14px"> Samaresh Basu</a></li><br>
						<li class="underline-li"><a href="#story books" class="li-font"><img src="study.png" alt="" height="13px" width="14px"> Samaresh Majumdar</a></li><br>
						<li class="underline-li"><a href="#short stories" class="li-font"><img src="study.png" alt="" height="13px" width="14px"> Sukanta Bhattacharya</a></li><br>
						<li class="underline-li"><a href="#bbc" class="li-font"><img src="study.png" alt="" height="13px" width="14px"> Sarat Chandra Catto.p</a></li>
					</ul>

				</div>


			</div>

		</div>

		<!-- stop === side fixed nav bar -->

		<!-- start === Footer container -->

		<div class="footer-books">

			<div class="partition1">
				<h2>About Us</h2>
				<p style="text-align: justify;">eLibrary is online Bangla and English books, magazines and newspapers reading library. You can read all books, newspapers, magazines by pdf view. We've got a large Bengali and English ebook, emagazine collection for all of you. Visit our site regularly to read your desire Bangla and English Books, Magazines and Newspapers.</p>

			</div>

			<div class="partition2">
				<h2>Find Us</h2>
				<p style="text-align: justify;">
					<span><i class="fas fa-map-marker-alt" style="font-size: "></i>&nbsp;&nbsp;&nbsp;21 Revolution Street<br><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paris, France</b></span><br><br>
					<span><i class="fas fa-phone"></i>&nbsp;&nbsp;&nbsp;+1 555 123456</span><br><br>
					<span><i class="far fa-envelope"></i>&nbsp;&nbsp;&nbsp;support@eLibrary.com</span><br><br>
				</p>
			</div>

			<div class="partition3">
				<h2>Connect with Us</h2>
				<p style="text-align: justify;">
					<i class="fab fa-facebook-square" style="font-size: "></i><span>&nbsp;&nbsp;&nbsp;Like us on Facebook<br><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(eLibrary)</span><br><br>
						<i class="fab fa-twitter"></i><span>&nbsp;&nbsp;&nbsp;Follow us on Twitter</span><br><br>
						<i class="fab fa-instagram"></i><span>&nbsp;&nbsp;&nbsp;Follow us on Instagram</span><br><br>
					</p>
				</div>




			</div>
			<br><br>

		</div>
	</body>


	</html>	
