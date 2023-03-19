<?php

namespace PhpRepos\ControlFlow\Transformation;

use Closure;

function pipe(mixed $value, Closure $closure): mixed
{
    return is_callable($value) ? $closure($value()) : $closure($value);
}
