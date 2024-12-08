<?php

namespace PhpRepos\ControlFlow\Conditional;

use Closure;
use function PhpRepos\ControlFlow\Transformation\pipe;

function when(bool $condition, Closure $then, ?Closure $otherwise = null): mixed
{
    return $condition ? $then() : (is_null($otherwise) ? null : $otherwise());
}

function unless(bool $condition, Closure $then, ?Closure $otherwise = null): mixed
{
    return when(! $condition, $then, $otherwise);
}

function when_exists(mixed $value, Closure $then, ?Closure $otherwise = null): mixed
{
    return pipe($value, is_null($value) ? (is_null($otherwise) ? fn () => null : $otherwise) : $then);
}
