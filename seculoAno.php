<?php

function seculoAno($ano)
{
    return ceil($ano/100);
}

$ano = $_POST['ano'];
echo seculoAno($ano);

