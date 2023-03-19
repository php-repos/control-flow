<?php

use function PhpRepos\ControlFlow\Transformation\pipe;
use function PhpRepos\TestRunner\Assertions\Boolean\assert_true;
use function PhpRepos\TestRunner\Runner\test;

test(
    title: 'it should apply the closure to the value',
    case: function () {
        $value = 5;
        $closure = fn ($x) => $x * 2;

        $result = pipe($value, $closure);

        assert_true($result === 10);
    }
);

test(
    title: 'it should handle callable values',
    case: function () {
        $callable = fn () => 5;
        $closure = fn ($x) => $x * 2;

        $result = pipe($callable, $closure);

        assert_true($result === 10);
    }
);
