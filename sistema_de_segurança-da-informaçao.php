<?php


echo "1 - Objetivos\n";
echo "2 - Escopo\n";
echo "3 - Responsabilidades\n";
echo "4 - Boas Práticas\n";
echo "5 - Consequências\n";

$opcao = readline("Escolha uma opção: ");

switch ($opcao) {

    case 1:
        echo "Objetivos: Proteger as informações da empresa.";
        break;

    case 2:
        echo "Escopo: Define onde a política se aplica.";
        break;

    case 3:
        echo "Responsabilidades: Todos devem cuidar da segurança.";
        break;

    case 4:
        echo "Boas práticas: Usar senhas fortes e não compartilhar dados.";
        break;

    case 5:
        echo "Consequências: Pode haver punições.";
        break;

    default:
        echo "Opção inválida!";
}
?>