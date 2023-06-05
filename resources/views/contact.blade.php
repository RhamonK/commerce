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
            <h2>How to Find Us</h2>
            <p>Mauris viverra cursus ante laoreet eleifend. Donec vel fringilla ante. Aenean finibus velit id urna vehicula, nec maximus est sollicitudin.</p>

            <div class="contact-address mt-50">
                <p><span>address:</span> 10 Suffolk st Soho, London, UK</p>
                <p><span>telephone:</span> +228 70878998</p>
                <p><a href="mailto:contact@essence.com">habilletoibien2021@gmail.com</a></p>
            </div>
        </div>

    </div>

</x-app-layout>
