<!DOCTYPE html>
<html>
<!-- head-->
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="hidden.css" />
        <script type="text/javascript" src="hidden.js"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASmKULjtBx6l3nRR4pUwme2FrDWGQePuA&callback=initMap"></script>
        <title>IDEADATE</title>
    </head>
<!-- Corps-->    
    <body>
        <div id="bloc_page">
        <!-- header logo-->
            <header>
                <div id="titre_principal">
                    <div id="logo">
                        <h1 style="color: white">IDEA</h1><h1 style="color: red">DATE</h1>     
                    </div>
                </div>

                <nav> <ul><li><a href="#">Browse</a></li> </ul></nav>
            </header>
            <!-- Image d'accueil-->
            <div id="banniere_image">
                <div id="banniere_description">          
                    <img src="cercle.jpg" alt="Photo d'accueil" />
                        
                    <div id="h"><p><h1>Date Night Restaurants </h1><br/>
                        Best places for a date night in New York City </p> </div> 

                    <a href="#" class="bouton_rouge">Follow</a>
                </div>    
            </div>
            <!-- Menu-->

            <ul id="menu">
            <div id="m1">

                <li>
                    <a href="#">POPULAR</a>
                    <ul>
                            <li><a href="#">NEW</a></li>
                            <li><a href="#">EDITORS CHOICE</a></li>
                    </ul>
                </li>
            </div>

            <div id="m2">

                <li><a href="#">AFFORDABLE</a></li>

                <li><a href="#">FANCY</a></li> 

                 <li><a href="#">TIPS</a></li>

                <li><a href="#">COMMUNITY</a></li>
            </div>
            </ul>
            <br/> <br/>
            <!-- Images et map/ corps-->
            <table>
            
               <tr>

                   <td>
                       <div class="container">
                          <div class="slider_wrapper">
                            <ul id="image_slider">
                              <li><img src="crepe.jpg"></li>
                              <li><img src="image.jpg"></li>
                              <li><img src="pizza.jpg"></li>
                            </ul>         
                            <span class="nvgt" id="prev"></span>
                            <span class="nvgt" id="next"></span>
                          </div> 
                        </div>
                   <h4 class="aligner">Asiate&nbsp;</h4><br/><div class="rating"><a href="hidden.php?asiate">☆</a><?php $cpt=0; if (isset($_GET['asiate'])) { echo $cpt = $cpt+0.5;} ?></div>
                   </td>

                   <td>
                    <img src="saumon.jpg"><br/><h4 class="aligner">Blue Hill&nbsp;</h4><br/><div class="rating"><a href="hidden.php?blue-hill">☆</a><?php $cpt=0; if (isset($_GET['blue-hill'])) { echo $cpt = $cpt+0.5;} ?></div>
                   </td>

                   <td>
                    <img src="3.jpg"><br/><h4 class="aligner">Jean-Georges&nbsp;</h4><br/><div class="rating"><a href="hidden.php?jean-georges">☆</a><?php $cpt=0; if (isset($_GET['jean-georges'])) { echo $cpt = $cpt+0.5;} ?></div>
                   </td>

                   <td rowspan="2"><div id="map"></div></td>

               </tr>

               <tr>

                   <td>
                       <img src="soupe.jpg"><br/><h4 class="aligner">Petrossian&nbsp;</h4><br/><div class="rating"><a href="hidden.php?petrossian">☆</a><?php $cpt=0; if (isset($_GET['petrossian'])) { echo $cpt = $cpt+0.5;} ?></div>
                   </td>

                   <td>
                       <img src="chicken.jpg"><br/><h4 class="aligner">ABC Kitchen&nbsp;</h4><br/><div class="rating"><a href="hidden.php?abc-kitchen">☆</a><?php $cpt=0; if (isset($_GET['abc-kitchen'])) { echo $cpt = $cpt+0.5;} ?></div>
                   </td>

                   <td>
                       <img src="pizza2.jpg"><br/><h4 class="aligner">OC&nbsp;</h4><br/><div class="rating"><a href="hidden.php?oc">☆</a><?php $cpt=0; if (isset($_GET['oc'])) { echo $cpt = $cpt+0.5;} ?></div>
                   </td>

               </tr>
            </table>
<!-- Pied de page-->
            <footer>
                 <div id="logo">
                        <h1 style="color: white">IDEA</h1><h1 style="color: red">DATE</h1>     
                 </div>
            </footer>
        </div>
    </body>
</html>
