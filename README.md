# PhpRepos ControlFlow Package

## Introduction

PhpRepos ControlFlow Package has a set of useful functions to control your application's flow.

## Installation

You can simply install this package using `phpkg` by running the following command:

```shell
phpkg add git@github.com:php-repos/control-flow.git
```

## Examples

Here you can see some examples of available functions:

```php
use function PhpRepos\ControlFlow\Conditional\when;
use function PhpRepos\ControlFlow\Conditional\unless;
use function PhpRepos\ControlFlow\Conditional\when_exists;
use function PhpRepos\ControlFlow\Transformation\pipe;

echo when(true, fn () => 'yes', fn () => 'no'); // Output: yes 
echo when(false, fn () => 'yes', fn () => 'no'); // Output: no
echo unless(false, fn () => 'yes', fn () => 'no'); // Output: yes  
echo unless(true, fn () => 'yes', fn () => 'no'); // Output: no
echo when_exists('hello', fn ($value) => strtoupper($value)); // Output: HELLO
echo pipe(fn () => 5, fn ($x) => $x * 2); // Output: 10  
```

## Documentation

All documents can be found under [documentations](https://phpkg.com/packages/control-flow/documentations/getting-started)
