<?php


$senha = "M4r4ng0n";


$hash = password_hash($senha, PASSWORD_DEFAULT);


echo $senha. "<br/>";
echo $hash. "<br/>";

$newsenha = "M4r4ng0";
if (password_verify($newsenha, $hash)) {
    echo "Login Autorizado";
} else{
    echo "Login não permitido";
}
