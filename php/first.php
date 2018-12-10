<?php

/**
 * Created by PhpStorm.
 * User: Hasak
 * Date: 27.02.2017.
 * Time: 21:02
 */
if($l==1)
    $lglng="Ar";
else $lglng="Lat";
echo'
<input type="hidden" name="langg" id="oflangl" value="'.$l.'">
<div class="container-fluid center onogore"><a href="/"><img class="onogore" src="/img/logoBaner'.$lglng.'.png" alt="Logo"></a></div>
<nav class="navbar navbar-default">

  <div class="container-fluid">

   

    ';
    if($l==1){
        echo'
<div class="navbar-header pull-right hidden-xs">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>                        

      </button>
    <a class="navbar-brand pull-right" href="/">'.$brand[$l].' <span><img src="/img/logoTrn.png" height="20px"></span></a>
      
    </div>
    
    <div class="navbar-header visible-xs">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>                        

      </button>
    <a class="navbar-brand pull-right" href="/">'.$brand[$l].' <span><img src="/img/logoTrn.png" height="20px"></span></a>
      
    </div>


<div class="collapse navbar-collapse" id="myNavbar">

      <ul class="nav navbar-nav pull-right">
      
     
        <li class="kontaktBtn hidden-xs"><a href="/contact" class="pull-right">'.$kontakt[$l].' <span class="fa fa-address-card-o fa-fw"></span></a></li>
        <li class="kartaBtn hidden-xs"><a href="/map" class="pull-right">'.$karta[$l].' <span class="fa fa-map-o fa-fw"></span></a></li>
        <li class="rentacarBtn hidden-xs"><a href="/rent-a-car" class="pull-right">'.$rent[$l].' <span class="fa fa-car fa-fw"></span></a></li>
        <li class="nekretnineBtn hidden-xs"><a href="/accomodation" class="pull-right">'.$nek[$l].' <span class="fa fa-fw fa-home"></span></a></li>
        <li class="izletiBtn hidden-xs"><a href="/trips" class="pull-right">'.$izleti[$l].' <span class="fa fa-compass fa-fw fa-spin"></span></a></li>
       
         <li class="izletiBtn visible-xs"><a href="/trips" class="pull-right">'.$izleti[$l].' <span class="fa fa-compass fa-fw fa-spin"></span></a></li>
        <li class="nekretnineBtn visible-xs"><a href="/accomodation" class="pull-right">'.$nek[$l].' <span class="fa fa-fw fa-home"></span></a></li>
        <li class="rentacarBtn visible-xs"><a href="/rent-a-car" class="pull-right">'.$rent[$l].' <span class="fa fa-car fa-fw"></span></a></li>
        <li class="kartaBtn visible-xs"><a href="/map" class="pull-right">'.$karta[$l].' <span class="fa fa-map-o fa-fw"></span></a></li>
        <li class="kontaktBtn visible-xs"><a href="/contact" class="pull-right">'.$kontakt[$l].' <span class="fa fa-address-card-o fa-fw"></span></a></li>
     

      </ul>




      <ul class="nav navbar-nav navbar-right pull-left hidden-xs">
      
       <li class="hidden-xs"><a href="/?lng=2" class="pull-right">
       <span class="hidden-sm hidden-md hidden-lg"> Engleski انجليزي English</span> 
       <img src="/img/blank.png" class="jezik jezik-gb flag flag-gb" data-toggle="tooltip" title="Engleski انجليزي English" alt="Engleski انجليزي English" />
       </a></li>
        <li class="hidden-xs"><a href="/?lng=1" class="pull-right">
        <span class="hidden-sm hidden-md hidden-lg"> Arapski عربي Arabic</span> 
        <img src="/img/blank.png" class="jezik jezik-kw flag flag-kw" data-toggle="tooltip" title="Arapski عربي Arabic" alt="Arapski عربي Arabic" />
        </a></li>

      
      <li class="hidden-xs"><a href="/?lng=0" class="pull-right">
        <span class="hidden-sm hidden-md hidden-lg">Bosanski بوسناوي Bosnian</span> 
        <img src="/img/blank.png" class="jezik jezik-ba flag flag-ba" data-toggle="tooltip" title="Bosanski بوسناوي Bosnian" alt="Bosanski بوسناوي Bosnian" />
</a></li>

</ul>
<ul class="nav navbar-nav navbar-right visible-xs">

<li class="visible-xs"><a href="/?lng=0" class="pull-right">
        <span class="hidden-sm hidden-md hidden-lg">Bosanski بوسناوي Bosnian</span> 
        <img src="/img/blank.png" class="jezik jezik-ba flag flag-ba" data-toggle="tooltip" title="Bosanski بوسناوي Bosnian" alt="Bosanski بوسناوي Bosnian" />
</a></li>
<li class="visible-xs"><a href="/?lng=1" class="pull-right">
        <span class="hidden-sm hidden-md hidden-lg"> Arapski عربي Arabic</span> 
        <img src="/img/blank.png" class="jezik jezik-kw flag flag-kw" data-toggle="tooltip" title="Arapski عربي Arabic" alt="Arapski عربي Arabic" />
        </a></li>
        <li class="visible-xs"><a href="/?lng=2" class="pull-right">
       <span class="hidden-sm hidden-md hidden-lg"> Engleski انجليزي English</span> 
       <img src="/img/blank.png" class="jezik jezik-gb flag flag-gb" data-toggle="tooltip" title="Engleski انجليزي English" alt="Engleski انجليزي English" />
       </a></li>

        
      </ul>

    </div>';
    }
    else{
        echo'
<div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>                        

      </button>
    <a class="navbar-brand" href="/"><span><img src="/img/logoTrn.png" height="20px"></span> '.$brand[$l].'</a>
      
    </div>

<div class="collapse navbar-collapse" id="myNavbar">

      <ul class="nav navbar-nav">
      


        <li class="izletiBtn"><a href="/trips"><span class="fa fa-compass fa-fw fa-spin"></span> '.$izleti[$l].'</a></li>

        <li class="nekretnineBtn"><a href="/accomodation"><span class="fa fa-fw fa-home"></span> '.$nek[$l].'</a></li>

        <li class="rentacarBtn"><a href="/rent-a-car"><span class="fa fa-car fa-fw"></span> '.$rent[$l].'</a></li>

        <li class="kartaBtn"><a href="/map"><span class="fa fa-map-o fa-fw"></span> '.$karta[$l].'</a></li>

        <li class="kontaktBtn"><a href="/contact"><span class="fa fa-address-card-o fa-fw"></span> '.$kontakt[$l].'</a></li>

      </ul>

      <ul class="nav navbar-nav navbar-right">

        <li><a href="/?lng=0"><img src="/img/blank.png" class="jezik jezik-ba flag flag-ba" data-toggle="tooltip" title="Bosanski بوسناوي Bosnian" alt="Bosanski بوسناوي Bosnian" />

        <span class="hidden-sm hidden-md hidden-lg">Bosanski بوسناوي Bosnian</span></a></li>

        <li><a href="/?lng=1"><img src="/img/blank.png" class="jezik jezik-kw flag flag-kw" data-toggle="tooltip" title="Arapski عربي Arabic" alt="Arapski عربي Arabic" /><span class="hidden-sm hidden-md hidden-lg"> Arapski عربي Arabic</span></a></li>

        <li><a href="/?lng=2"><img src="/img/blank.png" class="jezik jezik-gb flag flag-gb" data-toggle="tooltip" title="Engleski انجليزي English" alt="Engleski انجليزي English" /><span class="hidden-sm hidden-md hidden-lg"> Engleski انجليزي English</span></a></li>

      </ul>

    </div>';
    }
    echo'

  </div>

</nav>';