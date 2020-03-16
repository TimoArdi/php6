<?php
function writeSecretSentence( string $secret1, string $secret2): string
{
    return "$secret1 s'incline face à $secret2";
}
echo writeSecretSentence("le soleil","la mer");

Affiche : le soleil s'incline face à la mer
