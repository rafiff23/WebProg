<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});


Route::get('/about', function () {

$about_posts = [
    [
        "title" => "Dota",
        "author" => "Wiki",
        "body" => "Dota 2 is a 2013 multiplayer online battle arena (MOBA) video game developed and published by Valve.
        The game is a sequel to Defense of the Ancients (DotA), which was a community-created mod for Blizzard Entertainment's Warcraft III:
            Reign of Chaos. Dota 2 is played in matches between two teams of five players, with each team occupying and defending their
            own separate base on the map. Each of the ten players independently controls a powerful character known as a hero that all have
            unique abilities and differing styles of play. During a match players collect experience points and items for their heroes to
             successfully defeat the opposing team's heroes in player versus player combat. A team wins by being the first to destroy the
             other team's Ancient, a large structure located within their base.Development of Dota 2 began in 2009 when IceFrog, lead designer
             of Defense of the Ancients, was hired by Valve to create a modernized remake for them in the Source game engine. It was released for
             Windows, OS X, and Linux via the digital distribution platform Steam in July 2013, following a Windows-only open beta phase that began
             two years prior. The game is fully free-to-play with no heroes or any other gameplay element needing to be bought or otherwise unlocked.
             To maintain it, Valve supports the game as a service, selling loot boxes and a battle pass subscription system called Dota Plus that offer
             non-gameplay altering virtual goods in return, such as hero cosmetics and audio replacement packs. The game was ported to the Source 2 engine
              in 2015, making it the first game to use it. Dota 2 has a large esports scene,
              with teams from around the world playing in various professional leagues and tournaments. Valve manages an event format known as
              the Dota Pro Circuit, a series of tournaments that award qualification points for earning direct invitations to The International, the
              game's premier tournament held annually. Internationals feature a crowdfunded prize money system that has seen amounts in upwards of US$40
              million, making Dota 2 the most lucrative esport. Media coverage of most tournaments is done by a selection of on-site staff who provide
              commentary and analysis for the ongoing matches similar to traditional sporting events. In addition to playing live to audiences in arenas
               and stadiums, broadcasts of them are also streamed over the internet and sometimes simulcast on television, with peak viewership numbers
               in the millions.Despite some criticism going towards its steep learning
               curve and overall complexity, Dota 2 was praised for its rewarding gameplay,
                production quality, and faithfulness to its predecessor, with many considering it to be one of the greatest video games of all time.
                It has been one of the most played games on Steam since its release, with over a million concurrent players at its peak. The popularity
                 of the game has led to official merchandise and media adaptations for it being produced, including comic books and an anime series, as
                 well as promotional tie-ins to other games and media. The game also allows for the community to create their own gamemodes, maps, and
                 cosmetics, which are uploaded to the Steam Workshop. Two spinoff games, Artifact and Dota Underlords, were also released by Valve. Dota
                 2 has also been used in machine learning experiments, with a team of bots known as the OpenAI Five showing the capability to defeat
                 professional players."
        ],
    ];
    return view('about', [
        "title" => "About",
        "posts" => $about_posts
    ]);
});


Route::get('/blog', function () {
    return view('posts', [
        "title" => "Posts"
    ]);
});
