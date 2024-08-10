<?php

namespace Tests\WhenExistsTest;

use function PhpRepos\ControlFlow\Conditional\when_exists;
use function PhpRepos\TestRunner\Assertions\assert_true;
use function PhpRepos\TestRunner\Runner\test;

test(
    title: 'it should return the result of the then closure if the value is not null',
    case: function () {
        $result = when_exists('hello', fn ($value) => strtoupper($value));

        assert_true('HELLO' === $result);
    }
);

test(
    title: 'it should return null if the value is null and there is no otherwise closure',
    case: function () {
        $result = when_exists(null, fn ($value) => strtoupper($value));

        assert_true(is_null($result));
    }
);

test(
    title: 'it should return the result of the otherwise closure if the value is null',
    case: function () {
        $result = when_exists(null, fn ($value) => strtoupper($value), fn () => 'value is null');

        assert_true('value is null' === $result);
    }
);

test(
    title: 'it should return null if the value is null and there is no otherwise closure',
    case: function () {
        $result = when_exists(null, fn ($value) => strtoupper($value));

        assert_true(is_null($result));
    }
);
