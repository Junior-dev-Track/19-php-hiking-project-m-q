<!-- resources/views/about.blade.php -->
@extends('base')

@section('title', 'À propos de Nous - Randonnées')

@section('header', 'À propos de Nous')

@section('content')
    <section>
        <div class="d-flex align-items-center justify-content-center" style="background-image: url('/img/about.jpg'); background-repeat: no-repeat; background-size: cover; height: 200px;">
                <div class="text-center">
                    <h2 class="text-secondary">Notre Engagement</h2>
                    <p class="text-secondary">Nous sommes animés par une passion débordante pour la nature et les aventures en plein air. Notre engagement profond est de vous faire découvrir les trésors cachés des sentiers de randonnée, de vous emmener au plus près de la nature sauvage, où chaque pas est une rencontre avec la beauté de notre planète.</p>
                </div>
            </div>

        </div> 

    </section>
    <section>
        <h2>Nos Randonnées</h2>
        <p>Immergez-vous dans une variété d'excursions conçues pour vous faire vivre des expériences inoubliables. De la majesté des sommets enneigés aux sentiers sinueux à travers les forêts luxuriantes, chaque excursion est une aventure unique, où le cœur bat au rythme de la nature et où l'esprit s'élève au-dessus des montagnes.</p>
    </section>
    <section>
        <h2>Contactez-nous</h2>
        <p>Notre équipe dévouée est à votre écoute pour répondre à toutes vos questions, vous guider dans le choix de la meilleure excursion et vous accompagner à chaque étape de votre voyage. Pour toute demande d'information ou de réservation, n'hésitez pas à nous contacter à l'adresse  <a href="mailto:contact@hikingspirit.com">contact@randonnées.com</a>.</p>
    </section>
@endsection
