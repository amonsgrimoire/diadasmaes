<?php

$sn = $_POST['senha'];

if ($sn == 20032009)
{
    ?>
    <script>
        alert("Parabéns!!!! Você acertou");
        window.location.href="./site.html";
    </script>
    <?php
}
else
{
    ?>
    <script>
        alert("Outra dica: Sou eu");
        window.location.href="./senha.html";
    </script>
    <?php
}


















?>