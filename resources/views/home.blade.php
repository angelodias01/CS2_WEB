@extends('layouts.app') <!-- Extend the app layout -->

@section('content')
    <!-- Inject content into the 'content' section defined in app.blade.php -->
    <main>
        <section id="about" class="about"
                 style="color:#3B415C; background-image: url(https://cdn.akamai.steamstatic.com/apps/csgo/images/csgo_react/cs2/header_bg.svg);">
            <br>
            <h1>About CS 2</h1>
            <br>
            <p>
                Welcome to the thrilling world of Counter-Strike 2! This groundbreaking sequel has already launched,
                ushering in a new era of competitive gaming.<br> With the CS Rating system, dynamic volumetric smoke,
                enhanced visuals, and revamped gameplay, it's time to take your Counter-Strike experience to the next
                level.<br> Join the action today and explore the exciting features that Counter-Strike 2 has to offer.
                Dive
                into the game and embrace the future of competitive gaming!
            </p>
            <div class="video-container">
                <iframe style="border-color: #3B415C; border-radius: 15px; border-style: solid;  border-width: 4px" width="760" height="480" src="https://www.youtube.com/embed/Psry9BmOnDI"
                        title="Counter-Strike 2 Official Trailer"
                        allow= "autoplay; "
                        allowfullscreen></iframe>
                <br>
                <br>
            </div>
        </section>

        <section id="maps" style="color: white" class="map">
            <div>
                <br>
                <h1>Game Maps</h1>
                <br>
                <a class="aBtn" href="/maps">See all matchpool maps</a>
                <br>
                <br>
            </div>

            <div>
                <br>
                <h3>Dust 2</h3>
                <br>
                <p>One of the most popular maps in the Counter-Strike series due to its strong balance, Dust II is an
                    iconic map
                    for the Counter-Strike franchise.
                    <br> It is widely played on many servers and is a popular choice for Counter-Strike tournaments as
                    well.
                </p>
                <br>
                <img class="dust2_ss" src="https://cdn.discordapp.com/attachments/1034449054643527691/1156596457776894013/image.png?ex=65158be4&is=65143a64&hm=eb7d4cbdc42aa2fb4e76f9b0ca7128caa72707ca1b122bd90b95e88f1deb98dd&" alt="Dust 2 Screenshot">
                <br>
                <br>
                <a class="aBtn" href="https://www.youtube.com/watch?v=oHg5SJYRHA0" target="_blank">View Full Map</a>
                <br>
                <br>
            </div>
            <div>
                <br>
                <h3>Mirage</h3>
                <br>
                <p>Mirage, formerly known as Strike, is a Bomb Defusal map. The map was added to the game on June 6,
                    2013.</p>
                <br>
                <img class="dust2_ss" src="https://cdn.discordapp.com/attachments/1034449054643527691/1156595708095373362/image.png?ex=65158b31&is=651439b1&hm=1334d009556c50db46dd3beb0f74ecf9155eb1d2e0a9c2a43cf93e34c48c6984&" alt="Mirage Screenshot">
                <br>
                <br>
                <a class="aBtn" href="img/mirage_full_map.jpg" target="_blank">View Full Map</a>
                <br>
                <br>
            </div>
            <div>
                <br>
                <h3>Inferno</h3>
                <br>
                <p>Created by Chris "Barney" Auty, the Inferno map was originally an abandoned residence set during the
                    evening.<br>
                    During Counter-Strike 1.6, Valved edited the map to change it to a village setting and when CS:
                    Source <br>
                    came around the map changed forever. The theme has changed from the abandoned residence it once was.
                </p>
                <br>
                <img class="dust2_ss" src="https://cdn.discordapp.com/attachments/1034449054643527691/1156594902407331921/image.png?ex=65158a71&is=651438f1&hm=14f70d6a705d7ee20e719e2a00cec929d7592c58b62fb255653fe0edf82c51b3&" alt="Inferno Screenshot">
                <br>
                <br>
                <a class="aBtn" href="img/inferno_full_map.png" target="_blank">View Full Map</a>
                <br>
                <br>
            </div>
        </section>

        <section id="skins"
                 style="color:#3B415C; background-image: url(https://cdn.akamai.steamstatic.com/apps/csgo/images/csgo_react/cs2/header_bg.svg);">
            <br>
            <h2>Skins</h2>
            <br>
            <h2>The 3 most expensive skins</h2>
            <br>
            <div class="skin">
                <h2>The first most expensive skin is..</h2>
                <p>Souvenir AWP | Dragon Lore FN with 4x Titan Holos</p>
                <br>
                <a class="aLinks" href="img/thirdSkin.png" target="_blank">
                    <img class="mainSkins"
                         src="images/logo-cs2-header.svg"
                         alt="AWP Dragon Lore Skin"></a>
                <br>
            </div>
            <div class="skin">
                <br>
                <h3>The second most expensive skin is..</h3>
                <p>Stattrack Ak-47 | Case Hardened Blue Gem with 4x Titan Holos</p>
                <br>
                <a class="aLinks" href="img/secondSkin.png" target="_blank">
                    <img class="mainSkins"
                         src="images/logo-cs2-header.svg"
                         alt="AWP Dragon Lore Skin"></a>
                <br>
            </div>
            <div class="skin">
                <br>
                <h3>The most expensive skin is..</h3>
                <p>#387 Karambit | Case Hardened Blue Gem</p>
                <br>
                <a class="aLinks" href="img/mostExpensive.png" target="_blank">
                    <img class="mainSkins"
                         src="images/logo-cs2-header.svg"
                         alt="AWP Dragon Lore Skin"></a>
            </div>
            <br>
        </section>
    </main>
@endsection
