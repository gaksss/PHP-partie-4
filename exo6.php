<?php 

function who(string $nom, string $prenom, int $age){
    return "Bonjour " . $nom . " " . $prenom . ", tu as " . $age . " ans";

}

echo who("Carlier", "Clément", 22);