@extends('base')

@section('content')

<div class="bg-light p-5 mb-5 text-center">
  <div class="container">
    <h1>Bienvenue sur HikingSpirit</h1>
    <p>Découvrez les plus beaux sentiers de randonnée avec HikingSpirit, votre guide ultime pour explorer la nature. Que vous soyez un randonneur débutant ou un aventurier chevronné, notre site vous offre des ressources complètes pour planifier vos escapades en plein air.</p>
    <h3>Explorez des sentiers diversifiés</h3>
    <p>Plongez dans notre vaste collection de randonnées couvrant divers paysages, des montagnes majestueuses aux forêts verdoyantes, en passant par des sentiers côtiers époustouflants. Chaque parcours est minutieusement détaillé avec des cartes interactives, des niveaux de difficulté, et des conseils pratiques pour une expérience inoubliable.</p>
    <h3>Guides de randonnée</h3>
    <p>Profitez de nos guides de randonnée rédigés par des experts passionnés. Chaque guide comprend des informations sur la faune et la flore locales, des points d’intérêt à ne pas manquer, et des recommandations pour des arrêts panoramiques parfaits pour vos photos.</p>
    <h3>Communauté de randonneurs</h3>
    <p>Rejoignez notre communauté dynamique de randonneurs. Partagez vos expériences, vos photos et vos conseils avec d'autres amateurs de plein air. Consultez les avis et les récits de voyage pour trouver l'inspiration et des astuces pratiques.</p>
    <h3>Équipement et préparation</h3>
    <p>Préparez-vous pour vos aventures avec nos conseils sur l'équipement de randonnée. Découvrez les derniers articles sur les meilleures chaussures, vêtements techniques, sacs à dos et accessoires essentiels pour une randonnée en toute sécurité et confort.</p>
    <h3>Sécurité et environnement</h3>
    <p>La sécurité et la préservation de la nature sont nos priorités. Retrouvez des conseils sur la randonnée responsable, les précautions à prendre, et les gestes écologiques pour minimiser votre impact sur l'environnement.</p>
    <h3>Événements et ateliers</h3>
    <p>Participez à nos événements et ateliers pour améliorer vos compétences en randonnée. Des sessions de formation sur la navigation, la survie en milieu sauvage, et des sorties guidées vous attendent pour enrichir votre expérience de la randonnée.</p>
    <p>Rejoignez HikingSpirit et commencez votre prochaine aventure dès aujourd'hui !</p>
  </div>
</div>

<div class="container pb-5">
  <h2>Nos dernières randos</h2>
  <div class="row">
    @foreach($hikes as $hike)
    <div class="col">
      @include('hike.card')
    </div>
    @endforeach
  </div>
</div>

@endsection