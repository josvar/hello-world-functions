<?php

require __DIR__ . '/vendor/autoload.php';

function main(): array
{
    $vars = new \Illuminate\Support\Collection(['foo', 'bar']);

    return ['body'=> $vars->all()];
}
