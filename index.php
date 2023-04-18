<?php



?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Barlow' rel='stylesheet'>
  </head>
  <body>
    <style>
body, html {
  height: 100%;
    font-family: 'Montserrat';
}

.parallax {
  /* The image used */
  background-image: url("./img/clouds_background.jpg");

  /* Full height */
  height: 100%;
  width: 100vw;

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

  font-size: 5rem;

}
.name {
  padding-top: 30vh;
}
.header {
    position:absolute;
    display: flex;
    width:100%
}
.logo {
    margin: 5px 5px 5px 5px;
    width: 4%;
    height: 6%;
}

.links {
    margin-left: auto;
    float: left;
    margin-right:20px;
    margin-top:20px;
}

.projects {
    background-color: #363636;
}


.cards {
    background-color: #262626;
    
}

a{
    color: #000000;
}
a:hover{
    color: #868686;
}

.mycontact {
    background-color: #161616;
    
}
.mysetup {
    background-color: #060606;
    
}
    </style>
    <div class="header">
        <img src="./img/logo.png" class="logo">
        <div class="links">
            <a href="#projets">projets</a>
            <a href="#infos">infos</a>
            <a href="#contact">contact</a>
            <a href="#setup">setup</a>
        </div>
    </div>
    <div class="parallax">
        <svg viewbox="0 0 10 2" class="name">
  <text x="5" y="1" text-anchor="middle" font-size="1" fill="none" stroke-width=".015" stroke="#000000" font-family="Barlow">Antoine Cerdan</text>
</svg>
    </div>
    
    <div id="projets" class="projects hero is-fullheight">
        Projects
    </div>

    
    <div id="infos" class="cards hero is-fullheight">
        Cards
    </div>

    
    <div id="contact" class="mycontact hero is-fullheight">
        Contact
    </div>

    
    <div id="setup" class="mysetup hero is-fullheight">
        Contact
    </div>

  </body>
</html>