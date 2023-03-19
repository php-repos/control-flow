<?php

namespace Tests\WhenTest;

use function PhpRepos\ControlFlow\Conditional\when;
use function PhpRepos\TestRunner\Assertions\Boolean\assert_true;
use function PhpRepos\TestRunner\Runner\test;

test(
    title: 'it should return then return value when condition is true',
    case: function () {
        $result = when(true, fn () => 'yes', fn () => 'no');

        assert_true('yes' === $result);
    }
);

test(
    title: 'it should return otherwise return value when condition is false',
    case: function () {
        $result = when(false, fn () => 'yes', fn () => 'no');

        assert_true('no' === $result);
    }
);

test(
    title: 'it should work without otherwise',
    case: function () {
        $result = when(true, fn () => 'yes');

        assert_true('yes' === $result);
    }
);

test(
    title: 'it should return null when there is no otherwise and the condition is false',
    case: function () {
        $result = when(false, fn () => 'yes');

        assert_true(is_null($result));
    }
);
