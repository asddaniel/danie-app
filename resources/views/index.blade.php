<!doctype html>
<html lang="en">
  <head>
    <title>Petite Blog Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" defer src="js/laravel.js"></script>
  </head>
  <body>
    


    <header role="banner">
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-9 social">
              <a href="#"><span class="fa fa-twitter"></span></a>
              <a href="#"><span class="fa fa-facebook"></span></a>
              <a href="#"><span class="fa fa-instagram"></span></a>
              <a href="#"><span class="fa fa-youtube-play"></span></a>
              <a href="#"><span class="fa fa-vimeo"></span></a>
              <a href="#"><span class="fa fa-snapchat"></span></a>
            </div>
            <div class="col-3 search-top">
              <!-- <a href="#"><span class="fa fa-search"></span></a> -->
              <form action="#" class="search-top-form">
                <span class="icon fa fa-search"></span>
                <input type="text" id="s" placeholder="rechercher quelques choses">
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="container logo-wrap">
        <div class="row pt-5">
          <div class="col-12 text-center">
            <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
            <h1 class="site-logo"><a href="index.html">{{$appname}}</a></h1>
          </div>
        </div>
      </div>
      
      <nav class="navbar navbar-expand-md  navbar-light bg-light">
        <div class="container">
          
         
          <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" href="/">Accueil</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="login" >Connexion</a>
              </li>

            
              <li class="nav-item">
                <a class="nav-link" href="/post">Poster</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact">Contact</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    <section class="site-section pt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <div class="owl-carousel owl-theme home-slider">
              <div>
                <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('images/img_1.jpg'); ">
                  <div class="text half-to-full">
                    <div class="post-meta">
                      <span class="category">Daniel Assani</span>
                      <span class="mr-2">28 avril, 2022 </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h3>La beauté de l'univers</h3>
                    <p>la nature et l'espace sont immense et enormément excellent</p>
                  </div>
                </a>
              </div>
              <div>
                <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('images/img_2.jpg'); ">
                  <div class="text half-to-full">
                    <div class="post-meta">
                      <span class="category">Daniel Assani</span>
                      <span class="mr-2">28 avril, 2022 </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                      <h3>La beauté de l'univers</h3>
                    <p>la nature et l'espace sont immense et enormément excellent</p>
                  </div>
                </a>
              </div>
              <div>
                <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('images/img_3.jpg'); ">
                  <div class="text half-to-full">
                   <div class="post-meta">
                      <span class="category">Daniel Assani</span>
                      <span class="mr-2">28 avril, 2022 </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h3>La beauté de l'univers</h3>
                    <p>la nature et l'espace sont immense et enormément excellent</p>
                  </div>
                </a>
              </div>
            </div>
            
          </div>
        </div>
   
      </div>


    </section>
    <!-- END section -->

    <section class="site-section py-sm">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="mb-4">Categorie</h2>
          </div>
        </div>
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">
            <div class="row">
              <div class="col-md-12 text-center">
                <nav aria-label="Page navigation" class="text-center">
                  <ul class="pagination">
                    <li class="page-item  active"><a class="page-link" href="#">Précédent</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Suivant</a></li>
                  </ul>
                </nav>
              </div>
            </div>
              </div>
        
              <div class="col-md-12">
  @foreach ($data as $article)
                <div class="post-entry-horzontal">
                  <a href="blog-single.html">
                    <div class="image element-animate"  data-animate-effect="fadeIn" style="background-image: url(images/img_10.jpg);"></div>
                    <span class="text">
                      <div class="post-meta">
                        <span class="category">{{substr($article->authors_id, 0, 15)}}</span>
                        <span class="mr-2">{{$article->created_at}} </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                      </div>
                      <h2>{{substr($article->slug, 0, 50)}}</h2>
                    </span>
                  </a>
                </div>
                <!-- END post -->

               @endforeach

                

              </div>
            </div>

            

          </div>

          <!-- END main-content -->

          <div class="col-md-12 col-lg-4 sidebar">
            <div class="sidebar-box search-form-wrap">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control" id="s" placeholder="Taper une recherche">
                </div>
              </form>
            </div>
            <!-- END sidebar-box -->
            <div class="sidebar-box">
              <div class="bio text-center">
                <img src="images/person_1.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="bio-body">
                  <h2>Daniel Assani</h2>
                  <p>Developper web Backend</p>
                  <p><a href="#" class="btn btn-primary btn-sm">my bio</a></p>
                  <p class="social">
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- END sidebar -->

        </div>
      </div>
    </section>
  
    <footer class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h3>Paragraph</h3>
            <p>
              <img src="images/img_1.jpg" alt="Image placeholder" class="img-fluid">
            </p>

            <p>la programmation Web, le mobile, le desktop, les systèmes embarqué ainsi que le machine learning sont ma passion</p>
          </div>
          <div class="col-md-6 ml-auto">
            <div class="row">
              <div class="col-md-7">
                <h3>Dernière Post</h3>
                <div class="post-entry-sidebar">
                  <ul>
         @foreach ($data as $article)
                    
                    <li>
                      <a href="#">
                        <img src="images/img_4.jpg" alt="Image placeholder" class="mr-4">
                        <div class="text">
                          <h4>{{$article->title}}</h4>
                          <div class="post-meta">
                            <span class="mr-2">{{$article->created_at}} </span> &bullet;
                            <span class="ml-2"><span class="fa fa-comments"></span> 3k</span>
                          </div>
                        </div>
                      </a>
                    </li>
               @endforeach
                  </ul>
                </div>
              </div>
              <div class="col-md-1"></div>
              
              <div class="col-md-4">

                <div class="mb-5">
                  <h3>Quick Links</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Travel</a></li>
                    <li><a href="#">Adventure</a></li>
                    <li><a href="#">Courses</a></li>
                    <li><a href="#">Categories</a></li>
                  </ul>
                </div>
                
                <div class="mb-5">
                  <h3>Social</h3>
                  <ul class="list-unstyled footer-social">
                    <li><a href="#"><span class="fa fa-twitter"></span> Twitter</a></li>
                    <li><a href="#"><span class="fa fa-facebook"></span> Facebook</a></li>
                    <li><a href="#"><span class="fa fa-instagram"></span> Instagram</a></li>
                    <li><a href="#"><span class="fa fa-vimeo"></span> Vimeo</a></li>
                    <li><a href="#"><span class="fa fa-youtube-play"></span> Youtube</a></li>
                    <li><a href="#"><span class="fa fa-snapchat"></span> Snapshot</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>

    
    <script src="js/main.js"></script>
  </body>
</html>