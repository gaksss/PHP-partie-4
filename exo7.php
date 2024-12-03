<?php

function genderAge(int $age, string $gender)
{

    if ($age >= 18) {
        $age = " majeur";
    } else {
        $age = " mineur";
    }

    if ($gender == "Homme") {
        $gender = " un homme";
    } else if ($gender == "Femme") {
        $gender = " une femme";
    }

    return "Vous êtes " . $gender . " et vous êtes " . $age;
}

echo genderAge(22, "Homme");
