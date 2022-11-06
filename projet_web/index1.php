<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
   
    <title>AJAD</title>
    <link href="assert/css/bootstrap.min.css" rel="stylesheet"/>

	<style>
      
		.redressed {
			font-family: 'Redressed', cursive;
		}
		
		.merriweather {
			font-family: 'Merriweather', serif;
		}
		
		.cc-navbar {
			background-color: rgba(0, 0, 0, 0.55);
			font-family: 'Merriweather', serif;
			box-shadow: 1px 1px 3px #2011f38a;
			z-index: 99;
		}
		
		.cc-navbar .nav-link {
			border-bottom: 1px solid transparent;
			transition: padding-bottom 0.4s ease-in-out, border-color 0.3s ease;
		}
		
		.cc-navbar .nav-link:hover {
			padding-bottom: 20px;
			border-bottom-color: var(--bs-teal);
		}
		
		.banner,
		.order-form {
			background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('assert/image/ABDI3.jpg') center center fixed no-repeat;
			background-size: cover;
			height: 800px;
		}
		
		.order-form {
			height: 500px;
		}
		
		.banner .banner-desc h1 {
			font-size: 48px;
			font-weight: 400;
			color: #fff;
		}
		
		.cc-menu {
			background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('assert/image/banniere5.jpg') center center fixed no-repeat;
			background-size: cover;
			height: 1200px;
		}
		
		.btn-order {
			color: var(--bs-teal);
			border-color: var(--bs-teal);
			transition: 0.5s;
		}
		
		.btn-order:hover,
		.btn-order:focus,
		.btn-order:active {
			color: #fff;
			background-color: var(--bs-teal);
		}
		
		
		
			 </style>
    
  </head>
  <body>
    <nav class="cc-navbar navbar navbar-expand-lg navbar-dark position-fixed w-100">
			<div class="container-fluid">
				<a class="navbar-brand text-uppercase mx-4 py-3 fw-bolder" href="#">ajad</a>
				<button
					class="navbar-toggler"
					type="button"
					data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent"
					aria-expanded="false"
					aria-label="Toggle navigation"
				>
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					
						<li class="nav-item pe-4">
							<a class="nav-link" href="index4.html" target="_blank">Contact</a>
						</li>
						
						<li class="nav-item pe-4">
							<a class="nav-link" href="formulaire_inscription.html" target="_blank">S'inscrire</a>
						</li>
						
						<li class="nav-item pe-4">
							<a class="nav-link" href="form.php" target="_blank"  >Admin</a>
							
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<section class="banner d-flex justify-content-center align-items-center pt-5">
			<div class="container my-5 py-5">
				<div class="row">
					<div class="col-md-6"></div>
					<div class="col-md-6 banner-desc lh-lg">
						<h1 class="text-capitalize py-3 redressed">
							Association des Jeunes d'Avenir pour le Développement
						</h1>
						<ul> 
							<li>
								<a href="index3.html" target="_blank" style="color: black;">
									 s'avoir plus
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<section class="available merriweather py-5">
			<div class="container">
				<div class="row">
					<div class="card mb-3 border-0 rounded-0">
						<div class="row">
							<div class="col-md-6">
								<img src="assert/image/tamkin.jpg" class="img-fluid" alt="..." />
							</div>
							<div class="col-md-6">
								<div class="card-body px-0">
									<h3 class="card-title">Entreprenariat</h3>
									<p class="card-text">
									Un espace «Moubadara» a été inauguré jeudi à Tataouine en présence de la secrétaire d’Etat à la Formation professionnelle et à l’initiative privée et  en présence du représentant résident-adjoint, en concrétisation des mesures gouvernementales en faveur de la région dans le cadre de la campagne nationale pour l’initiative privée qui prévoit notamment la généralisation de ces espaces dans toutes les régions.
								</p>
									<p class="card-text"><a href="#" class="btn text-muted">Découvrir </a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="card my-5 border-0 rounded-0">
						<div class="row">
							<div class="col-md-6">
								<div class="card-body px-0">
									<h3 class="card-title">Robotique</h3>
									<p class="card-text">
									La robotique est l'ensemble des techniques permettant la conception et la réalisation de machines automatiques ou de robots.
									Extrait du programme Makid lors de la tournée régionale organisée par AJAD “KAFILAT ROBOTIQUE”.
									</p>
									<p class="card-text"><a href="#" class="btn text-muted">Découvrir </a></p>
								</div>
							</div>
							<div class="col-md-6">
								<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
									<div class="carousel-inner">
										<div class="carousel-item active">
											<img src="assert/image/robo2.jpeg" class="d-block w-100" alt="..." />
										</div>
										
										<div class="carousel-item">
											<img src="assert/image/robo3.jpeg" class="d-block w-100" alt="..." />
										</div>
									</div>
									<button
										class="carousel-control-prev"
										type="button"
										data-bs-target="#carouselExampleControls"
										data-bs-slide="prev"
									>
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="visually-hidden">Previous</span>
									</button>
									<button
										class="carousel-control-next"
										type="button"
										data-bs-target="#carouselExampleControls"
										data-bs-slide="next"
									>
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="visually-hidden">Next</span>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="card mb-3 border-0 rounded-0">
						<div class="row">
							<div class="col-md-6">
								<img src="img/coding.jpg" class="img-fluid" alt="..." />
							</div>
							<div class="col-md-6">
								<div class="card-body px-0">
									<h3 class="card-title">Programmation</h3>
									<p class="card-text">
									La programmation, appelée aussi codage dans le domaine informatique, désigne l'ensemble des activités qui permettent l'écriture des programmes informatiques. C'est une étape importante du développement de logiciels (voire de matériel).
									</p>
									<p class="card-text"><a href="#" class="btn text-muted">Découvrir </a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="cc-menu merriweather py-5">
			<div class="container">
				<div class="row">
					<h3 class="text-center text-light merriweather">Nos evenements</h3>
					<div class="card bg-transparent text-center mb-4">
						<div class="card-header redressed fs-4">
							<ul class="nav nav-tabs justify-content-center card-header-tabs">
								<li class="nav-item">
									<a class="nav-link active" href="#">Robotique</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-light" href="#">jeux de Memoire</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-light" href="#">energie renouvelable</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-light" href="#">programmation</a>
								</li>
							</ul>
						</div>
						
					</div>
				</div>
				<div class="row row-cols-1 row-cols-md-2 g-4">
					<div class="col">
						<div class="card">
							<img src="assert/image/programmation.png" class="card-img-top" alt="..." />
							<div class="card-body">
								<h5 class="card-title">programmation</h5>
								<p class="card-text">
									This is a longer card with supporting text below as a natural lead-in to additional content. This
									content is a little bit longer.
								</p>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<img src="assert/image/jeuxmemoire.png" class="card-img-top" alt="..." />
							<div class="card-body">
								<h5 class="card-title">jeux de memoire</h5>
								<p class="card-text">
									This is a longer card with supporting text below as a natural lead-in to additional content. This
									content is a little bit longer.hhhijsqwerrtyyuioopppp[llkjhhgff]
								</p>
							</div>
						</div>
					</div>
					<div class="col d-sm-none d-md-block">
						<div class="card">
							<img src="img/e-commerce.jpg" class="card-img-top" alt="..." />
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">
							    This is a longer card with supporting text below as a natural lead-in to additional content.
								</p>
							</div>
						</div>
					</div>
					<div class="col d-sm-none d-md-block">
						<div class="card">
							<img src="img/coding.jpg" class="card-img-top" alt="..." />
							<div class="card-body">
								<h5 class="card-title">Card title</h5>
								<p class="card-text">
									This is a longer card with supporting text below as a natural lead-in to additional content.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="cc-carousel merriweather bg-dark text-light text-center py-5">
			<div class="container">
				<div class="row">
					<h1 class="text-uppercase">ajad</h1>
					<div class="col pb-4">
					Depuis sa création en 2014 l'association des jeunes d'avenir pour le développement reste un effort pour accélérer le développement durable tout en puisant dans la créativité des jeunes.En effet,l'association s'est engagée fortement dans le soutien à l'innovation
              et à l'emploi des jeunes dans la région khouribga.
					</div>
				</div>
				<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="assert/image/energie_renouvlable.png" class="d-block w-100" alt="..." />
							<div class="carousel-caption d-none d-md-block">
								<h5>l'energie renouvelable</h5>
								<p>info sur l'energie</p>
							</div>
						</div>
						<div class="carousel-item">
							<img src="assert/image/programmation.png" class="d-block w-100" alt="..." />
							<div class="carousel-caption d-none d-md-block">
								<h5>programmation</h5>
								<p>info sur programmation</p>
							</div>
						</div>
						<div class="carousel-item">
							<img src="assert/image/jeuxmemoire.png" class="d-block w-100" alt="..." />
							<div class="carousel-caption d-none d-md-block">
								<h5>jeux de memoire</h5>
								<p>info sur le jeux de memoire</p>
							</div>
						</div>
						<div class="carousel-item">
							<img src="assert/image/ajadcadeaux.jpg" class="d-block w-100" alt="..." />
							<div class="carousel-caption d-none d-md-block">
								<h5>cadeux</h5>
								<p>cadeaux</p>
							</div>
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>
		</section>
		<section class="order-form py-5">
			<div class="container">
				<h2 class="merriweather text-center text-light mb-4">s'inscrire</h2>
				<form>
					<div class="row">
						<div class="col-md-6 col-sm">
							<div class="input-group mb-3">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
								<input type="text" class="form-control" placeholder="Votre nom complet" />
							</div>
							
							<div class="input-group mb-3">
								<label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-sort-numeric-up-alt"></i></label>
								<select class="form-select" id="inputGroupSelect01">
									<option class="text-muted"></option>
									<option value="1">M</option>
									<option value="2"></option>
									<option value="3"></option>
									<option value="3"></option>
								</select>
							</div>
						</div>
						<div class="col-md-6 col-sm">
							<div class="input-group mb-3">
								<input type="email" class="form-control" placeholder="Votre adresse email" />
								<span class="input-group-text"><i class="fas fa-at"></i></span>
							</div>
							<div class="input-group mb-3">
								<input type="number" class="form-control" placeholder="Numéro de téléphone" />
								<span class="input-group-text"><i class="fas fa-phone"></i></span>
							</div>
							
						</div>
					</div>
					
				</form>
			</div>
		</section>

		<section class="cc-footer py-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 mb-4 col-sm">
						<h6 class="redressed ps-3 fs-5">localisation</h6>
						<nav class="nav flex-column">
							<a class="nav-link py-1 merriweather fs-6 text-secondary active" aria-current="page" href="#">Active</a>
							<a class="nav-link py-1 merriweather fs-6 text-secondary" href="#">Link</a>
							<a class="nav-link py-1 merriweather fs-6 text-secondary" href="#">Link</a>
							<a class="nav-link py-1 merriweather fs-6 text-secondary disabled" href="#" tabindex="-1" aria-disabled="true"
								>Disabled</a
							>
						</nav>
					</div>
					<div class="col-lg-3 col-md-6 mb-4 col-sm">
						<h6 class="redressed ps-3 fs-5">Nos Partenaire</h6>
						<nav class="nav flex-column">
							<a class="nav-link py-1 merriweather fs-6 text-secondary active" aria-current="page" href="#">Active</a>
							<a class="nav-link py-1 merriweather fs-6 text-secondary" href="#">Link</a>
							<a class="nav-link py-1 merriweather fs-6 text-secondary" href="#">Link</a>
							<a class="nav-link py-1 merriweather fs-6 text-secondary disabled" href="#" tabindex="-1" aria-disabled="true"
								>Disabled</a
							>
						</nav>
					</div>
					<div class="col-lg-3 col-md-6 mb-4 col-sm">
						<h6 class="redressed ps-3 fs-5">Liens utiles</h6>
						<nav class="nav flex-column">
							<a class="nav-link py-1 merriweather fs-6 text-secondary active" aria-current="page" href="#">Active</a>
							<a class="nav-link py-1 merriweather fs-6 text-secondary" href="#">Link</a>
							<a class="nav-link py-1 merriweather fs-6 text-secondary" href="#">Link</a>
							<a class="nav-link py-1 merriweather fs-6 text-secondary disabled" href="#" tabindex="-1" aria-disabled="true"
								>Disabled</a
							>
						</nav>
					</div>
					<div class="col-lg-3 col-md-6 mb-4 col-sm">
						<h6 class="redressed ps-3 fs-5">Nos activites</h6>
						<nav class="nav flex-column">
							<a class="nav-link py-1 merriweather fs-6 text-secondary active" aria-current="page" href="#">Active</a>
							<a class="nav-link py-1 merriweather fs-6 text-secondary" href="#">Link</a>
							<a class="nav-link py-1 merriweather fs-6 text-secondary" href="#">Link</a>
							<a class="nav-link py-1 merriweather fs-6 text-secondary disabled" href="#" tabindex="-1" aria-disabled="true"
								>Disabled</a
							>
						</nav>
					</div>
					<div class="col-12 text-center py-4 text-muted">
						&copy; AJAD
						<script>
							document.write(new Date().getFullYear());
						</script>
						Copyright
					</div>
				</div>
			</div>
		</section>
	<script>
	
	</script>
    <script src="assert/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>