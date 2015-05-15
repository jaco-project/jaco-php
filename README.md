![jaco](http://jaco-project.github.io/docs/jaco.png)
====

[WIP, No Release]

Japanese Character Optimizer.

[![Latest Stable Version](https://poser.pugx.org/jaco/jaco/v/stable)](https://packagist.org/packages/jaco/jaco)
[![Latest Unstable Version](https://poser.pugx.org/jaco/jaco/v/unstable)](https://packagist.org/packages/jaco/jaco)
[![Build Status](https://travis-ci.org/jaco-project/jaco-php.svg)](https://travis-ci.org/jaco-project/jaco-php)
[![License](https://poser.pugx.org/jaco/jaco/license)](https://packagist.org/packages/jaco/jaco)

## What is

This module optimize Japanese characters.

Convert to Katakana from Hiragana mutually, or sort list by natural phonetic order, or convert to halfwidth from fullwidth mutually.

## functions

- Convert Hiragana <-> Katakana
- Convert halfwidth <-> fullwidth
- Check Hiragana, Katakana, halfwidth, fullwidth, and so on.
- Sort by natural phonetic order.
  - Supported voiced marks, prolonged sound marks, iteration marks.
- Has compatible native string object API.

## install

### Composer

```sh
$ composer install jaco/jaco
```

## Usage

### for NodeJS

```php
<?php
require_once 'lib/jaco/Jaco.php';

$jStr01 = new jaco\Jaco('ニホンゴのモジなど');
$jStr01->toKatakana(); // => ニホンゴノモジナド
```

## Documents

[http://jaco-project.github.io/docs/](http://jaco-project.github.io/docs/)
