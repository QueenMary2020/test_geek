<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>mon 1er article</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta
			name="description"
			content="Pushbar.js is a tiny javascript plugin for creating sliding drawers in web apps"
		/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:title" content="Pushbar.js" />
		<meta
			property="og:image"
			content="https://oncebot.github.io/pushbar.js/meta.png"
		/>
		<meta property="og:site_name" content="Pushbar.js" />
		<meta
			property="og:description"
			content="Pushbar.js is a tiny javascript plugin for creating sliding drawers in web apps"
		/>
		<link
			rel="stylesheet"
			href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic"
		/>
		<link
			rel="stylesheet"
			href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css"
		/>
		<link
			rel="stylesheet"
			href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="src/pushbar.css" />
		<link rel="stylesheet" type="text/css" href="demo.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="STYLES.css">
    <script src="JAVA.js"></script>

  </head>
    <body>
      <aside data-pushbar-id="left" data-pushbar-direction="left">
        <div class="title">
          <span data-pushbar-close class="close push_right"></span><img src="p3.png" alt="">
        </div>
        <ul class="menu">
          <li><a href="file:///C:/Users/hp/Desktop/MON%20ARTICLE/accueil.html">ACCUEIL</a></li>
          <li><a href="#SENSIBILISATION">SENSIBILISATION</a></li>
          <li><a href="#TEMOIGNAGE">TEMOIGNAGE</li>
          <li><a href="#blog">ACTUALITES</li>
          <li><a href="A vendre">A VENDRE</li>
          <li><a href="#contactez-nous">CONTACT</li>
        </ul>
      </aside>

      <main class="pushbar_main_content">
        <div class="wrapper">
          <div class="card">
            <div class="card_content">
              <div><button data-pushbar-target="left">voir le menu</button></div>
            </div>
          </div>
          <div style="text-align: center; font-size: 50px; margin-bottom: 90px;"></div>
        </div>
      </main>


<!-- carrousel -->
    <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="item">
                <img  class="imageviolence" img-responsive src="violence1.jpg" alt="">
            </div>
          </div>
          <div class="carousel-item">
              <div class="item">
                <img src="violence.png" alt="">
            </div>
          </div>
          <div class="carousel-item">
              <div class="item">
                <img src="image3.jpg"  alt="">
            </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  </div>


<!-- sensibilisation -->
  <div class="container">
    <section class="details-card">
        <div class="container" id="SENSIBILISATION">
          <h4 class="section-title h1" align-center="center">SENSIBILISATION</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="card-content">
                        <div class="card-img">
                            <img src="p12.jpg" alt="">
                        </div>
                        <div class="card-desc">
                            <p>Selon les estimations, 35 pour cent des femmes dans le monde <br>
                              ont subi des violences physiques et/ou sexuelles de la part d’un
                                partenaire intime ou des violences sexuelles de la part d’une autre personne
                               <br> (sans compter le harcèlement sexuel) à un moment donné dans leur vie.</p>
                                <a href="file:///C:/Users/hp/Desktop/MON%20ARTICLE/sensibilisation.html" class="btn-card">lire plus...</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-content">
                        <div class="card-img">
                            <img src="image0.jfif" alt="">
                        </div>
                        <div class="card-desc">
                            <p>Le sujet est encore tabou et très peu documenté. Pourtant, les mineurs<br>
                                sont les premières victimes des violences sexuelles.quelles sont les<br>
                                causes,les consequences et quelles actions depreventions pouvons nous<br>
                                mener.......</p>
                                <a href="file:///C:/Users/hp/Desktop/MON%20ARTICLE/sensilisation2.html" class="btn-card">lire plus...</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-content">
                        <div class="card-img">
                            <img src="p10.png" alt="">
                        </div>
                        <div class="card-desc">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                                voluptas totam Lorem  sit amet consectetur, adipisicing elit. Laboriosam, voluptatum! Dolor quo, perspiciatis
                                    voluptas totam</p>
                                <a href="file:///C:/Users/hp/Desktop/MON%20ARTICLE/sensibilisation3.html" class="btn-card">lire plus....</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<div class="container" id="TEMOIGNAGES">
  <h4 class="section-title h1" align-center="center">TEMOIGNAGES</h4>
<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-4">
    <div class="flip-card">
          <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img src="imagp3.jfif" alt="Avatar" style="width:300px;height:300px;">
                    </div>
                     <div class="flip-card-back">
                          <h3>sariana,35ans</h3>
                                 <p>ai été violée à 3 ans, par le fils adolescent de nos voisins.Cela se passait dans sa chambre,
                                    pendant que nos mères conversaient dans le salon juste à coté......</p>

                    </div>
         </div>
    </div>
  </div>


  <div class="col-xs-12 col-sm-6 col-md-4">
    <div class="flip-card">
          <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img src="téléchargement1.jfif" alt="Avatar" style="width:300px;height:300px;">
                    </div>
                     <div class="flip-card-back">
                          <h3>anne,20 ans</h3>
                                 <p>Mon beau-père a commencé à me violer dès son arrivée.
                                   j'avais 7 ans et je n'ai rien oublié. Cela a duré jusque à mes 14 ans.....</p>
                    </div>
         </div>
    </div>
  </div>


  <div class="col-xs-12 col-sm-6 col-md-4">
    <div class="flip-card">
          <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img src="téléchargement2.jfif" alt="Avatar" style="width:300px;height:300px;">
                    </div>
                     <div class="flip-card-back">
                          <h3>estelle,40ans</h3>
                                 <p>j'ai été violé par le mari de ma nourice a l'age de 7ans....</p>
                                 <p>j'ai été violé par le mari de ma nourice a l'age de 7ans....</p>
                                 <p>j'ai été violé par le mari de ma nourice a l'age de 7ans....</p>


                    </div>
         </div>
    </div>
  </div>
  </div>
</div>

<!-- partie actualités -->

    <section class="blog-me pt-100 pb-100" id="blog">
           <div class="container">
             <div class="row">
               <div class="col-xl-6 mx-auto text-center">
                  <div class="section-title mb-100">
                     <h4>ACTUALITES</h4>
                  </div>
               </div>
            </div>
              <div class="row">
                 <div class="col-lg-4 col-md-6">
                    <!-- Single Blog -->
                    <div class="single-blog">
                       <div class="blog-img">
                          <img src="arti2.jpg" alt="">
                       </div>
                       <div class="blog-content">
                          <div class="blog-title">
                             <h4>Corona:Etat des Lieux</h4>
                             <div class="meta">
                                <ul>
                                   <li>3 Mars 2020</li>
                                </ul>
                             </div>
                          </div>
                          <p>Le syndrome respiratoire du Moyen-Orient est due à un virus<br>
                             (le coronavirus du syndrome respiratoire MERS-CoV,) decouvert en 2012.</p>
                          <a href="file:///C:/Users/hp/Desktop/MON%20ARTICLE/corona.html" class="box_btn">en savoir plus....</a>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-4 col-md-6">
                    <!-- Single Blog -->
                    <div class="single-blog">
                       <div class="blog-img">
                          <img src="arti4.jpg" alt="">
                       </div>
                       <div class="blog-content">
                          <div class="blog-title">
                             <h4>Presidentielle en afrique</h4>
                             <div class="meta">
                                <ul>
                                   <li>3Mars 2020</li>
                                </ul>
                             </div>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque.
                          bchjdilylèrllllllllulflu-ihuilfrr-huoe-opuçtyè()</p>
                          <a href="file:///C:/Users/hp/Desktop/MON%20ARTICLE/election.html" class="box_btn">en savoir plus...</a>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-4 col-md-6">
                    <!-- Single Blog -->
                    <div class="single-blog">
                       <div class="blog-img">
                          <img src="arti1.jpg" alt="">
                       </div>
                       <div class="blog-content">
                          <div class="blog-title">
                             <h4>tout sur la 5G</h4>
                             <div class="meta">
                                <ul>
                                   <li>3 fevrier 2020</li>
                                </ul>
                             </div>
                          </div>
                          <p>En télécommunications, la 5G est la cinquième génération des standards pour la téléphonie
                            Elle succède à la quatrième génération, appelée 4G.</p>
                          <a href="file:///C:/Users/hp/Desktop/MON%20ARTICLE/5g.html" class="box_btn">en savoir plus...</a>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </section>

<!-- partie achat -->

      <div class="container" id="A vendre">
          <div class="row">
              <div class="col-xl-6 mx-auto text-center">
                  <div class="section-title mb-100">
                         <h4>A Vendre</h4>
                  </div>
              </div>
            </div>
        	<div class="row">
        	    <div class="col-md-4">
        		<!--Card-->
                    <div class="card">
                        <!--Card image-->
                        <img class="img-fluid" src="gaine.jpg" alt="Card image cap">

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">Gaine:description</h4>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="file:///C:/Users/hp/Desktop/MON%20ARTICLE/forms.html" class="btn btn-primary">Acheter</a>
                        </div>
                    </div>
                <!--/.Card-->
                </div>
                <div class="col-md-4">
        		<!--Card-->
                    <div class="card">
                        <!--Card image-->
                        <img class="img-fluid" src="apple.jpg" alt="Card image cap">

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">Pc Apple: description</h4>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="file:///C:/Users/hp/Desktop/MON%20ARTICLE/forms.html" class="btn btn-primary">Acheter</a>
                        </div>
                    </div>
                <!--/.Card-->
                </div>
                <div class="col-md-4">
        		<!--Card-->
                    <div class="card">
                        <!--Card image-->
                        <img class="img-fluid" src="montre5g.jpg" alt="Card image cap">

                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title">montre5G: description</h4>
                            <!--Text-->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="file:///C:/Users/hp/Desktop/MON%20ARTICLE/forms.html" class="btn btn-primary">acheter</a>
                        </div>
                    </div>
                <!--/.Card-->
                </div>
        	</div>
        </div>

<!-- contact -->
<section class="form-section" style="background-image:url(https://i.ibb.co/d2xFDtr/5257b6c12d89875.jpg);">
	  <div class="overlay"></div>
	   <div class="container">
	     <div class="row">
		   <div class="heading-title" id="contactez-nous"> contactez-nous</div>
		 </div>
	    <div class="row">
		 <div class="col-md-4">
		    <div class="contact-box">
              <ul class="list-inline">
			    <li>
                   <div class="contact">
				     <i class="fa fa-map-marker" aria-hidden="true"></i>
					 <p> Abidjan cocody riviera bonoumin<br> sacré coeur rue mimos </p>
				   </div>
 				</li>
				 <li>
                   <div class="contact">
				     <i class="fa fa-envelope" aria-hidden="true"></i>
					 <p> emrickyann@gmail.com </p>
				   </div>
 				</li>
				 <li>
                   <div class="contact">
				     <i class="fa fa-mobile" aria-hidden="true"></i>
					 <p> +225 09425033 <br> +225 08335863 </p>
				   </div>
 				</li>

			  </ul>
            </div>
		  </div>
		   <div class="col-md-4">
		     <div class="form-box-inner">
			    <form action="" method="">
				   <div class="form-group">
				     <input type="text" class="form-control" for="" name="" value="" placeholder="Your name">
				   </div>
				   <div class="form-group">
				     <input type="email" class="form-control" for="" name="" value="" placeholder="Your email">
				   </div>
				   <div class="form-group">
				     <input type="text" class="form-control" for="" name="" value="" placeholder="Your number">
				   </div>
				    <div class="form-group">
				    <textarea rows="4" cols="50" class="form-control" placeholder="Describe yourself here..."></textarea>
				   </div>
				   <button class="btn custom-button"> valider </button>
				</form>
			 </div>
		   </div>

		   <div class="col-md-4">
		     <div class="map-box">
			  <iframe src="localisation.png" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			 </div>
		   </div>

		</div>
	  </div>
	</section>

<div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
        <ul class="list-unstyled list-inline social text-center">
          <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
          <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
          <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
          <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
          <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
        </ul>
      </div>

    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
        <p> ensemble sauvons nos enfants ..</p>
        <p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>
      </div>

<script src="JAVA.js"></script>
<script type="text/javascript" src="src/pushbar.js"></script>
<script type="text/javascript">
  const pushbar = new Pushbar({
    blur: true,
    overlay: true
  });
</script>
  </body>
</html>
