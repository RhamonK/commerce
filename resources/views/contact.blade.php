<x-app-layout>
    <!-- Page Heading -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Contact') }}
        </h2>
    </x-slot>
    <div class="contact-area d-flex align-items-center">

        <div class="google-map">
            <div id="googleMap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3966.5229134238502!2d1.1889202147689977!3d6.194521395515546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMTEnNDAuMyJOIDHCsDExJzI4LjAiRQ!5e0!3m2!1sfr!2stg!4v1685996102159!5m2!1sfr!2stg" width="1200" height="795" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <div class="contact-info">
            <h2>À propos de nous</h2>
            <p>HabilleToiBien (HTB) est une entreprise de vente en ligne crée le 03 Juillet 2021,
                spécialisée dans la vente de vetêments et accessoires. Nous sommes plus qu'une simple
                entreprise de vente en ligne, nous organisons des jeux et faisons gagner plein de cadeaux à nos
                clients aussi bien en ligne que lors des évènements culturels qui se déroulent à Lomé. Nous
                prévoyons tout plein de choses avec la creation de notre application et sommes sur le point
                d'ouvrir une boutique physique dans laquelle nous allons tourner des vidéos avec nos clients,
                organiser des meet-ups et passer plus de temps avec eux. Nous pensons à réunir tous nos clients
                et amoureux de chaussures dans une communauté instructive et recréative à la fois. Ramener
                des paires et vêtements rares sur le marché pour pouvoir donner à tous l'opportunité de porter ce
                qu'ils aiment mais qu'ils ne trouvent pas forcémént sur le marché togolai</p>

            <div class="contact-address mt-50">
                <p><span>address:</span> Totsi, LOmé, TOGO</p>
                <p><span>telephone:</span> +228 70878998</p>
                <p><a href="mailto:contact@essence.com">habilletoibien2021@gmail.com</a></p>
            </div>
        </div>

    </div>

</x-app-layout>
