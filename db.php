<?php
$genre1 = new Genre("Sci-Fi", "Science fiction with futuristic and speculative concepts", false);
$genre2 = new Genre("Crime", "Crime and mafia-related stories", true);
$genre3 = new Genre("Thriller", "Suspenseful and tension-filled movies", true);
$genre4 = new Genre("Animation", "Animated movies, often for all ages", false);
$genre5 = new Genre("Action", "Movies with physical stunts and fights", true);
$genre6 = new Genre("Musical", "Movies with song and dance performances", false);

$movie1 = new Movie("Inception", 2010, "Christopher Nolan", [$genre1], "English", "A mind-bending thriller about dreams.");
$movie2 = new Movie("The Godfather", 1972, "Francis Ford Coppola", [$genre2, $genre3], "English", "The aging patriarch of an organized crime dynasty transfers control to his reluctant son.");
$movie3 = new Movie("Parasite", 2019, "Bong Joon-ho", [$genre3], "Korean", "A poor family schemes to become employed by a wealthy family.");
$movie4 = new Movie("Pulp Fiction", 1994, "Quentin Tarantino", [$genre2], "English", "The lives of two mob hitmen, a boxer, and others intertwine in tales of violence and redemption.");
$movie5 = new Movie("Spirited Away", 2001, "Hayao Miyazaki", [$genre4], "Japanese", "A young girl enters a world of spirits and must find her way home.");
$movie6 = new Movie("Interstellar", 2014, "Christopher Nolan", [$genre1], "English", "A team of explorers travel through a wormhole in space to ensure humanity's survival.");
$movie7 = new Movie("The Dark Knight", 2008, "Christopher Nolan", [$genre5], "English", "Batman faces the Joker, a criminal mastermind who plunges Gotham into chaos.");
$movie8 = new Movie("La La Land", 2016, "Damien Chazelle", [$genre6], "English", "A jazz pianist and an aspiring actress fall in love while pursuing their dreams in Los Angeles.");
