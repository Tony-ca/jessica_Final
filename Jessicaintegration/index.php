<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://db.onlinewebfonts.com/c/4acf49f638295608865a0a0c949fdb7d?family=Mistress+Benedict+Brush" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style/style.css">
    <title>L'empreinte du peintre by Jessica</title>
</head>
<body>

    <!-- HEADER -->
    <header>
        <div class="encoche"></div>
        <div class="menu">
                <ul>
                    <li><a href="#qui">Accueil</a></li>
                    <li><a href="#suisje">Qui suis-je ?</a></li>
                </ul>   
                    <img class="logo" src="img/Logojessica.png" alt="logo jessica">
                    <img class="logo2" src="img/Logojessica.png" alt="logo jessica"> 
                <ul>   
                    <li><a href="#real">Réalisations</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>

        <div id class="dropdown_menu">
       
            <li><a href="#qui" class="menuAccueil">Accueil</a></li>
            <li><a href="#suisje" class="menuQui">Qui suis-je</a></li>
            <li><a href="#real" class="menuRea">Réalisations</a></li>
            <li><a href="#contact" class="menuContact">Contact</a></li>
        </div>
        <div id="qui"></div>
        <div id="suisje"></div>
        <div id="real"></div>
        <div id="contact"></div>
    </header>
    
   <!-- Button trigger modal -->
     <button type="button" class="btn1 btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
         DEVIS
         
     </button>

     <!-- DEVIS -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="mod modal-content">
        <div class="modal-header">
          <h1 class="modd modal-title fs-5" id="exampleModalLabel">Vos devis garantie sous 15 jours</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="formulaire">
                <p>DEVIS</p>
                <label for="">Nom</label>
                <br>
                <input type="text" placeholder="Veuillez indiquer nom"><br>
                <label for="">Prénom</label>
                <br>
                <input type="text" placeholder="Veuillez indiquer prénom"><br>
                <label for="">Email</label>
                <br>
                <input type="text" placeholder="Veuillez indiquer adresse email"><br>
                <label for="">Ville</label>
                <br>
                <input type="text" placeholder="Veuillez indiquer la ville du chantier"><br>
                <label for="">Quel type de travaux ?</label>
                <br>
                <input type="text" placeholder="Veuillez indiquer les travaux à effectuer"><br>
                <label for="">Date souhaitée des travaux</label>
                <br>
                <input type="date"><br>
                <label for="">Description précise de votre projet</label>
                <br>
                <input class="description" type="text"><br>
    
               
            </div>
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
          <button type="button" class="btn btn-primary">Envoyez</button>
        </div>
      </div>
    </div>
  </div>
   
     <!-- QUI SUIS JE -->
    <section class="quisuisje">
        <div class="contnr">
            <div class="H1">
                <h1>L'empreinte du peintre by Jessica</h1>
            </div>
            <div class="H3">
                <h3>Quand les couteaux et les rouleaux s'en mêlent</h3>
            </div>
            <p class="titreQuiSuisJe">Qui suis-je ?</p>
            <div class="wor">
              <div class="imgheader">
                <div class="image"><img src="img/IMG_20230831_091803.jpg" alt="image qui sui je"></div>
            </div>
              <div class="texteheader">
                  <p class="texte-qui" id="tabreal">Je suis une jeune entrepreneuse, une artisan peintre  spécialisée dans
                   la rénovation de murs. Je propose des services tels que la pose
                   d'enduit pour réparation de fissures, la mise en peinture, la pose de
                  revêtements muraux ainsi que l'installation de revêtements de sols en
                 intérieur. Mon activité est centrée à proximité de Dunkerque et
                s'étend sur une zone géographique d'environ 50 km autour de Dunkerque.
                Je m'engage à offrir des services de qualité pour transformer et
                embellir vos intérieurs.</p>
              
              </div>
            </div>
        </div>
    </section>
    

     <!-- REALISATIOONS -->
    <section class="RealisationContainer">
        
        <!-- H2 manipulait avec JS -->
        <h2 class="h2Realisation" onmouseover="base_rea('.h3Realisation')">Réalisation</h2>

        <h2 class="h2RealisationTab" onclick="base_rea('.h3Realisation')">Réalisation</h2>
        
        
        
        <div class="displayRealisation">

            <div class="titre_realisation">
                <div class="block_vide">
                    
                    <!-- All H3 manipulait avec JS -->
                    <h3 class="h3Realisation">Bienvenue <span class="color_rea_h3">sur mes réalisations</h3>
                    <h3 class="h3Realisation1">Osez Rafraîchir <span class="color_rea_h3">Vos Murs</span></h3>
                    <h3 class="h3Realisation2">Donnez de la Vie <span class="color_rea_h3">à Vos Murs avec des Couleurs</span></h3>
                    <h3 class="h3Realisation3">Aventurez-vous <span class="color_rea_h3">dans la Modernisation de Votre Intérieur</span></h3>
                    <h3 class="h3Realisation4">Osez le <span class="color_rea_h3">Changement de Sol</span></h3>
                </div>
                
                <!-- Base de toute la manipulation avec JS -->
                <p class="sousTitre1" onmouseover="showH3_1('h3Realisation1')">Rénovation des Murs ➜</p>
                <p class="sousTitre2" onmouseover="showH3_2('h3Realisation2')">Peinture intérieur ➜</p>
                <p class="sousTitre3" onmouseover="showH3_3('h3Realisation3')">Papier peint ➜</p>
                <p class="sousTitre4" onmouseover="showH3_4('h3Realisation4')">Revêtement des Sols ➜</p>
                
                
                <div class="test">
                <img class="tracePeintureTab" src="img/tracePeintureTAB.png" alt="">
                    <p class="sousTitreTab1" onclick="showH3_1('h3Realisation1')">Rénovation des Murs</p>
                    <p class="sousTitreTab2" onclick="showH3_2('h3Realisation2')">Peinture intérieur</p>
                    <p class="sousTitreTab3" onclick="showH3_3('h3Realisation3')">Papier peint</p>
                    <p class="sousTitreTab4" onclick="showH3_4('h3Realisation4')">Revêtement des Sols</p>
                    
                    
                </div>

                

                <p class="FlecheTab">↓↓↓</p>

                
            </div>

            <img class="tracePeinturePc" src="img/tracePeinture.png" alt="Trace de peinture">
            
            <div class="meilleurImage">

                <div class="test_phone">
                    <p class="sousTitreTel1" onclick="showPhone_1('best1ImgTel')">Rénovation des Murs</p>
                    <p class="">↓↓↓</p>
                    <img class="best1ImgTel" src="img/best1.jpg" alt="Photo">
                    <p class="sousTitreTel2" onclick="showPhone_2('best2ImgTel')">Peinture intérieur</p>
                    <p class="">↓↓↓</p>
                    <img class="best2ImgTel" src="img/best2.jpg" alt="Photo">
                    <p class="sousTitreTel3" onclick="showPhone_3('best3ImgTel')">Papier peint</p>
                    <p class="">↓↓↓</p>
                    <img class="best3ImgTel" src="img/best3.jpg" alt="Photo">
                    <p class="sousTitreTel4" onclick="showPhone_4('best4ImgTel')">Revêtement des Sols</p>
                    <p class="">↓↓↓</p>
                    <img class="best4ImgTel" src="img/best4.jpg" alt="Photo">
                </div>
                
                <!-- Toute les images en premier plan manipulait avec JS  -->
                <img class="bestImg" src="img/best.jpg" alt="Photo">
                <img class="best1Img" src="img/best1.jpg" alt="Photo">
                <img class="best2Img" src="img/best2.jpg" alt="Photo">
                <img class="best3Img" src="img/best3.jpg" alt="Photo">
                <img class="best4Img" src="img/best4.jpg" alt="Photo">
            
                <!-- Bouton & Modal 1 -->        
                <button type="button" id="modal_pos1" class="btn position-absolute bottom-0 start-50 translate-middle" data-bs-toggle="modal" data-bs-target="#modal1">
                    <strong>Voir plus sur mes rénovations ici</strong>
                </button>

                <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                        <div class="modal-content text-center text-white bg-dark p-3 rounded-4">

                            <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>

                            <div class="AvantApres">
                                
                                <p class="AvantApres_solo">Avant</p>
                                <p class="AvantApres_solo">Après</p>
                                <p class="AvantApres_soloTab1">Avant</p>
                                <p class="AvantApres_soloTab2">Après</p>
                            </div>

                            <div id="myCarousel1" class="carousel slide mb-6" data-bs-ride="carousel" id="exampleModalLabel1">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#myCarousel1" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
                                    <button type="button" data-bs-target="#myCarousel1" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                                    <button type="button" data-bs-target="#myCarousel1" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                                    <button type="button" data-bs-target="#myCarousel1" data-bs-slide-to="3" aria-label="Slide 4" class=""></button>
                                    <button type="button" data-bs-target="#myCarousel1" data-bs-slide-to="4" aria-label="Slide 5" class=""></button>
                                    <button type="button" data-bs-target="#myCarousel1" data-bs-slide-to="5" aria-label="Slide 6" class=""></button>
                                </div>

                                <div class="carousel-inner">

                                    <div class="carousel-item active">
                                        
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best2.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best4.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>


                                    <div class="carousel-item">
                                                    
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best3.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best1.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>

                                    
                                    <div class="carousel-item">
                                            
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best4.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>

                                    <div class="carousel-item">
                                                
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best2.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best4.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>

                                    <div class="carousel-item">
                                                
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best4.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best3.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>

                                    <div class="carousel-item">
                                                
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best3.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>
                                </div>
                                    
                                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel1" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon me-auto" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                    </button>
                                    
                                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel1" data-bs-slide="next">
                                    <span class="carousel-control-next-icon ms-auto" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                    </button>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bouton & Modal 2 -->
                <button type="button" id="modal_pos2" class="btn position-absolute bottom-0 start-50 translate-middle" data-bs-toggle="modal" data-bs-target="#modal2">
                    <strong>Voir plus sur mes peintures ici</strong>
                </button>

                <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                        <div class="modal-content text-center text-white bg-dark p-3 rounded-4">

                            <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>

                            <div class="AvantApres">
                                <p class="AvantApres_solo">Avant</p>
                                <p class="AvantApres_solo">Après</p>
                                <p class="AvantApres_soloTab1">Avant</p>
                                <p class="AvantApres_soloTab2">Après</p>
                            </div>
                            
                            <div id="myCarousel2" class="carousel slide mb-6" data-bs-ride="carousel" id="exampleModalLabel2">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#myCarousel2" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
                                    <button type="button" data-bs-target="#myCarousel2" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                                    <button type="button" data-bs-target="#myCarousel2" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                                    <button type="button" data-bs-target="#myCarousel2" data-bs-slide-to="3" aria-label="Slide 4" class=""></button>
                                    <button type="button" data-bs-target="#myCarousel2" data-bs-slide-to="4" aria-label="Slide 5" class=""></button>
                                    <button type="button" data-bs-target="#myCarousel2" data-bs-slide-to="5" aria-label="Slide 6" class=""></button>
                                </div>

                                <div class="carousel-inner">

                                    <div class="carousel-item active">
                                        
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best2.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>


                                    <div class="carousel-item">
                                                    
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best3.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>

                                    
                                    <div class="carousel-item">
                                            
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best2.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>

                                    <div class="carousel-item">
                                                
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best4.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>

                                    <div class="carousel-item">
                                                
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best1.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>

                                    <div class="carousel-item">
                                                
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best2.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>
                                </div>
                                    
                                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel2" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon me-auto" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                    </button>

                                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel2" data-bs-slide="next">
                                    <span class="carousel-control-next-icon ms-auto" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                    </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bouton & Modal 3 -->
                <button type="button" id="modal_pos3" class="btn position-absolute bottom-0 start-50 translate-middle" data-bs-toggle="modal" data-bs-target="#modal3">
                    <strong>Voir plus sur mes papiers ici</strong>
                </button>

                <div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                        <div class="modal-content text-center text-white bg-dark p-3 rounded-4">
                            
                            <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>

                            <div class="AvantApres">
                                <p class="AvantApres_solo">Avant</p>
                                <p class="AvantApres_solo">Après</p>
                                <p class="AvantApres_soloTab1">Avant</p>
                                <p class="AvantApres_soloTab2">Après</p>
                            </div>
                            
                            <div id="myCarousel3" class="carousel slide mb-6" data-bs-ride="carousel" id="exampleModalLabel3">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#myCarousel3" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
                                    <button type="button" data-bs-target="#myCarousel3" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                                    <button type="button" data-bs-target="#myCarousel3" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                                    <button type="button" data-bs-target="#myCarousel3" data-bs-slide-to="3" aria-label="Slide 4" class=""></button>
                                    <button type="button" data-bs-target="#myCarousel3" data-bs-slide-to="4" aria-label="Slide 5" class=""></button>
                                    <button type="button" data-bs-target="#myCarousel3" data-bs-slide-to="5" aria-label="Slide 6" class=""></button>
                                </div>

                                <div class="carousel-inner">

                                    <div class="carousel-item active">
                                        
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>


                                    <div class="carousel-item">
                                                    
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>

                                    
                                    <div class="carousel-item">
                                            
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>

                                    <div class="carousel-item">
                                                
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>

                                    <div class="carousel-item">
                                                
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>

                                    <div class="carousel-item">
                                                
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>
                                </div>
                                    
                                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel3" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon me-auto" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                    </button>

                                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel3" data-bs-slide="next">
                                    <span class="carousel-control-next-icon ms-auto" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                    </button>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bouton & Modal 4 -->
                <button type="button" id="modal_pos4" class="btn position-absolute bottom-0 start-50 translate-middle" data-bs-toggle="modal" data-bs-target="#modal4">
                    <strong>Voir plus sur mes revêtements ici</strong>
                </button>

                <div class="modal fade" id="modal4" tabindex="-1" aria-labelledby="exampleModalLabel4" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                        <div class="modal-content text-center text-white bg-dark p-3 rounded-4">
                            
                            <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>

                            <div class="AvantApres">
                                <p class="AvantApres_solo">Avant</p>
                                <p class="AvantApres_solo">Après</p>
                                <p class="AvantApres_soloTab1">Avant</p>
                                <p class="AvantApres_soloTab2">Après</p>
                            </div>
                            
                            <div id="myCarousel4" class="carousel slide mb-6" data-bs-ride="carousel" id="exampleModalLabel4">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#myCarousel4" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
                                    <button type="button" data-bs-target="#myCarousel4" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                                    <button type="button" data-bs-target="#myCarousel4" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                                    <button type="button" data-bs-target="#myCarousel4" data-bs-slide-to="3" aria-label="Slide 4" class=""></button>
                                    <button type="button" data-bs-target="#myCarousel4" data-bs-slide-to="4" aria-label="Slide 5" class=""></button>
                                    <button type="button" data-bs-target="#myCarousel4" data-bs-slide-to="5" aria-label="Slide 6" class=""></button>
                                </div>

                                <div class="carousel-inner">

                                    <div class="carousel-item active">
                                        
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>


                                    <div class="carousel-item">
                                                    
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>

                                    
                                    <div class="carousel-item">
                                            
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>

                                    <div class="carousel-item">
                                                
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>

                                    <div class="carousel-item">
                                                
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>

                                    <div class="carousel-item">
                                                
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>
                                </div>
                                    
                                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel4" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon me-auto" aria-hidden="true"></span>

                                    <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel4" data-bs-slide="next">
                                    <span class="carousel-control-next-icon ms-auto" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                    </button>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


     <!-- MES ENGAGEMENTS -->
    <section class="mesengagements">
        <h3 class="TitreEngagement"> Mes engagements</h3>
        <h4 class="PharseAccrocheEngagment">Choisir mon entreprise, c'est choisir  l'expertise et un travail soigné</h4>
      <div class="containerEngagement">
        <div class="cardEngagement">
            <img src="img/utilisateurs_1_1.png">
            <div class="cardContenue">
              <h3 class="TitreEngagement">Ecoute</h3>
              <p class="pEngagement">Soucieux de se satisfaire mes clients, je reste à votre écoute pour vous conseiller dans vos choix.</p>
            </div>
          </div>
          <div class="cardEngagement">
            <img src="img/maison_2_1.png">
            <div class="cardContenue">
              <h3 class="TitreEngagement">Propreté</h3>
              <p class="pEngagement">Préparation et nettoyage du chantier. Je mets un point d'honneur à ce que vous retrouviez votre maison dans un parfait état.</p>
            </div>
          </div>
          <div class="cardEngagement">
            <img src="img/icon__certified_.png">
            <div class="cardContenue">
              <h3 class="TitreEngagement">Qualité</h3>
              <p class="pEngagement">Quel que soit l'état de vos murs, je saurai tous les travaux nécessaires afin de leur donner leur aspect neuf et esthétique.</p>
            </div>
          </div>
          <div class="cardEngagement">
            <img class="imageCertif" src="img/icon__certificate_server_.png">
            <div class="cardContenue">
              <p class="pEngagement">Avec succès, j'ai obtenu mon diplôme, démontrant ainsi mon engagement, mes compétences et ma persévérance dans la poursuite de l'excellence académique.</p>
            </div>
          </div>
          <div class="cardEngagement">
            <img class="imageGarantie" src="img/Garantie-decennale-2_5.png">
            <div class="cardContenue">
              <p class="pEngagement">La garantie décennale assure la couverture des vices et malfaçons majeurs pendant une période de dix ans à compter de la réception des travaux.</p>
            </div>
        </div>
        </div> 
    </section>

    
     <!-- 4 CARDS PC -->
    <section class="four_cards_of_pc">
        
        <div class="four_cards_container ">
            <div class="four_cards_card">
                <div class="four_cards_Contenue">
                    <img src="img/prestation.jpg">
                    <p class="four_cards_p">Prestation rigoureuses et soignée</p>
                </div>
            </div>
            
            <div class="four_cards_card">
                <div class="four_cards_Contenue">
                    <img src="img/nettoyage.jpg">
                    <p class="four_cards_p">Préparation et nettoyage de chantier</p>
                </div>
            </div>
            
            <div class="four_cards_card">
                <div class="four_cards_Contenue">
                    <img src="img/conseils.jpg">
                    <p class="four_cards_p">Conseils entièrement sur mesure</p>
                </div>
            </div>
            
            <div class="four_cards_card">
                <div class="four_cards_Contenue">
                    <img src="img/devis.jpg">
                    <p class="four_cards_p">Devis gratuit</p>
                </div>
            </div>
        </div>
    </section>


    <!-- 4 CARDS TABLETTE -->
    <section class="four_cards_of_tab">
        
        <div class="four_cards_container ">
            <div class="four_cards_card">
                <div class="four_cards_Contenue">
                    <img src="img/prestation.jpg">
                    <p class="four_cards_p">Prestation rigoureuses et soignée</p>
                </div>
            </div>
           
            <div class="four_cards_card">
                <div class="four_cards_Contenue">
                    <img src="img/nettoyage.jpg">
                    <p class="four_cards_p">Préparation et nettoyage de chantier</p>
                </div>
            </div>
            
            <div class="four_cards_card">
                <div class="four_cards_Contenue">
                    <img src="img/conseils.jpg">
                    <p class="four_cards_p">Conseils entièrement sur mesure</p>
                </div>
            </div>
            
            <div class="four_cards_card">
                <div class="four_cards_Contenue">
                    <img src="img/devis.jpg">
                    <p class="four_cards_p">Devis gratuit</p>
                </div>   
            </div>
        </div>
    </section>


    <!-- 4 CARDS MOBILE -->
    <section class="four_cards_of_mob">
        <div class="container-carousel">
                <div id="myCarousel7" class="carouselmod carousel slide mb-6" data-bs-ride="carousel" id="exampleModalLabel7">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#myCarousel7" data-bs-slide-to="0" class="active"
                            aria-label="Slide 1" aria-current="true"></button>
                        <button type="button" data-bs-target="#myCarousel7" data-bs-slide-to="1" aria-label="Slide 2"
                            class=""></button>
                        <button type="button" data-bs-target="#myCarousel7" data-bs-slide-to="2" aria-label="Slide 3"
                            class=""></button>
                        <button type="button" data-bs-target="#myCarousel7" data-bs-slide-to="3" aria-label="Slide 4"
                            class=""></button>
                    </div>

                    <div class="carousel-inner">

                        <div class="carousel-item active">

                            <div class="containerImgCarousel_mob mx-auto">
                                <div class="contour_img">
                                    <img class="img_mob" src="img/prestation.jpg" alt="">
                                </div>

                                <p class="description mb-5 mt-4">Prestation rigoureuses et soignée</p>
                            </div>
                        </div>


                        <div class="carousel-item">

                            <div class="containerImgCarousel_mob mx-auto">
                                <div class="contour_img">
                                    <img class="img_mob" src="img/nettoyage.jpg" alt="">
                                </div>

                                <p class="description mb-5 mt-4">Préparation et nettoyage de chantier</p>
                            </div>
                        </div>


                        <div class="carousel-item">

                            <div class="containerImgCarousel_mob mx-auto">
                                <div class="contour_img">
                                    <img class="img_mob" src="img/conseils.jpg" alt="">
                                </div>

                                <p class="description mb-5 mt-4">Conseils entièrement sur mesure</p>
                            </div>
                        </div>

                        <div class="carousel-item">

                            <div class="containerImgCarousel_mob mx-auto">
                                <div class="contour_img">
                                    <img class="img_mob" src="img/devis.jpg" alt="">
                                </div>

                                <p class="description mb-5 mt-4">Devis gratuit</p>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel7" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon me-auto" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel7" data-bs-slide="next">
                        <span class="carousel-control-next-icon ms-auto" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                </div>
        </div>
    </section>


     <!-- FOURNISSEURS -->
    <section class="nosfournisseurs">
        <h2 class="fournisseur">Nos Partenaires</h2>
        <h3 class="textefournisseur">Ensemble, nous avançons avec confiance.</h3>
        <div class = "containerImg">
            <img class="Tollenss" src="img/R (1).png" >
             
         </div>
    </section>


    <!-- PARTENAIRES -->
    <section class="nospartenaires" >
        <h2 class="fournisseur" >Nos fournisseurs</h2>
        <h3 class="textefournisseur">Nous sommes entourés de fournisseurs fiables et reconnus dans le domaine des matériaux de construction et de finition.</h3>
        <div class = "containerImg">
            <img class="Tollens" src="img/R.png" >
             <img class="Seigneurie" src="img/seigneurie-peinture_1_1.png" >
             <img class= "Semin" src="img/semin-logo.png" >
             <img class="Valspar" src="img/valspar.png">
         </div>
    </section>


    <!-- CONTACT -->
    <section class="contact" >
        <div class="color_Fond">
            <h1 class="section_formtitre">CONTACTEZ-NOUS</h1>
            <div class="wor1">
                <div class="form">
                    <form action="" METHOD="POST">
                        <label class="Formulaire_info" for="name">Nom:</label>
                        <input class="formaulaire_btn" type="text" name="Nom"><br><br>

                        <label class="Formulaire_info" for="Prenom">Prenom:</label>
                        <input class="formaulaire_btn" type="text" name="Prenom"><br><br>

                        <label class="Formulaire_info" for="Adresse">Adresse e-mail: </label>
                        <input class="formaulaire_btn" type="text" name="Adresse"><br><br>

                        <label class="Formulaire_info" for="numero">Votre numero de telephone:</label>
                        <input class="formaulaire_btn" type="text" name="numero">
                    </form>

                <div class="form_commentaire">

                    <p class="messages">Messages:</p>
                    
                        <input class="commentaire" type="text">
                    
                        <div class="conditiondiv">
                            <input class="checkbox" type="checkbox">
                                <p class="condition">En soumettant ce formulaire, j'accepte que mes données personnelles soient utilisées pour me recontacter. Aucun autre traitement ne sera effectué avec mes informations. </p>
                        </div>
                        <input class="envoyer" type="submit" name="envoyer" value="Envoyer le message">
                    </div> 
                </div>
            </div>
        </div>
    </section>


    <!-- FOOTERy -->
    <section class="footerr">
        <div class="reseau">
            <p>Rejoignez moi sur mes réseaux sociaux</p>
        </div>
    
        <div class="logo">
            <a href="#"><img src="img/facebook.png"   alt="Facebook"></a>
        </div>
            
        <div class="footer">
            <img src="img/Logojessica_2.png" alt="">
            <div>
                <p>© Copyright-L'empreinte du peintre by Jessica-Tous les droits réservés</p>
                <p>LempreinteduPeintre@hotmail.fr</p>
                <p>Création du site par l' AFCI de Dunkerque </p>
            </div>
        </div>
    </section>



       

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="scriptJS/script.js"></script>

</body>
</html>