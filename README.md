# Model

[![Build Status](https://travis-ci.org/aedart/model.svg?branch=dev)](https://travis-ci.org/aedart/model)
[![Latest Stable Version](https://poser.pugx.org/aedart/model/v/stable)](https://packagist.org/packages/aedart/model)
[![Total Downloads](https://poser.pugx.org/aedart/model/downloads)](https://packagist.org/packages/aedart/model)
[![Latest Unstable Version](https://poser.pugx.org/aedart/model/v/unstable)](https://packagist.org/packages/aedart/model)
[![License](https://poser.pugx.org/aedart/model/license)](https://packagist.org/packages/aedart/model)

Collection of [getters and setters](http://en.wikipedia.org/wiki/Mutator_method)-interfaces with various trait implementations, for different kinds of "common" properties.

# Contents

* [When to use this](#when-to-use-this)
* [How to install](#how-to-install)
* [Quick start](#quick-start)
    * [Create your interface](#create-your-interface)
    * [Concrete implementation](#concrete-implementation)
* [Available properties](#available-properties)
* [Contribution](#contribution)
* [Acknowledgement](#acknowledgement)
* [Versioning](#versioning)
* [License](#license)

## When to use this

* When there is a strong need to interface what properties must be available on a given object
* (When multiple objects share the same properties) 


## How to install

```console

composer require aedart/model
```

This package uses [composer](https://getcomposer.org/). If you do not know what that is or how it works, I recommend that you read a little about, before attempting to use this package.

## Quick start

### Create your interface

In the following example, we create a simple person interface, which consists of an id, name and description;

```php
<?php
namespace Acme\Contracts;

use Aedart\Model\Contracts\Integers\IdAware;
use Aedart\Model\Contracts\Strings\DescriptionAware;
use Aedart\Model\Contracts\Strings\NameAware;

interface Person extends IdAware,
    NameAware,
    DescriptionAware
{
    
}
```

### Concrete implementation

Use the default provided traits, in order to create a concrete implementation of your interface;

```php
<?php
namespace Acme\Models;

use Acme\Contracts\Person as PersonInterface;
use Aedart\Model\Traits\Strings\DescriptionTrait;
use Aedart\Model\Traits\Strings\IdTrait;
use Aedart\Model\Traits\Strings\NameTrait;

class Person implements PersonInterface
{
    use IdTrait, NameTrait, DescriptionTrait;   
}
```

## Available properties

| Property                        | Supported types |
|---------------------------------|-----------------|
| **A**                           |                 |
| `Age`                           | int             |
| `Ask`                           | bool            |
| `Author`                        | string          |
| **B**                           |                 |
| `Begin`                         | string          |
| `BasePath`                      | string          |
| **C**                           |                 |
| `Choices`                       | array           |
| `Content`                       | string          |
| `CreatedAt`                     | string          |
| **D**                           |                 |
| `Data`                          | array           |
| `Date`                          | string          |
| `DeletedAt`                     | string          |
| `Description`                   | string          |
| `Directory`                     | string          |
| **E**                           |                 |
| `Ean`                           | string          |
| `Ean8`                          | string          |
| `Ean13`                         | string          |
| `Email`                         | string          |
| `End`                           | string          |
| `EndDate`                       | string          |
| **F**                           |                 |
| `Filename`                      | string          |
| `FilePath`                      | string          |
| `FormattedName`                 | string          |
| **G**                           |                 |
| _N/A (no properties yet added)_ |                 |
| **H**                           |                 |
| `Html`                          | string          |
| **I**                           |                 |
| `Id`                            | int, string     |
| `Ip`                            | string          |
| `IpV4`                          | string          |
| `IpV6`                          | string          |
| `Isbn`                          | string          |
| `Isbn10`                        | string          |
| `Isbn13`                        | string          |
| **J**                           |                 |
| _N/A (no properties yet added)_ |                 |
| **K**                           |                 |
| `Kind`                          | string          |
| **L**                           |                 |
| `Locations`                     | array           |
| **M**                           |                 |
| _N/A (no properties yet added)_ |                 |
| **N**                           |                 |
| `Name`                          | string          |
| `Nickname`                      | string          |
| **O**                           |                 |
| `OutputPath`                    | string          |
| **P**                           |                 |
| `Package`                       | string          |
| `Password`                      | string          |
| `Pattern`                       | string          |
| **Q**                           |                 |
| `Question`                      | string          |
| **R**                           |                 |
| _N/A (no properties yet added)_ |                 |
| **S**                           |                 |
| `Script`                        | string          |
| `Slug`                          | string          |
| `Source`                        | string          |
| `StartDate`                     | string          |
| **T**                           |                 |
| `Template`                      | string          |
| `Timeout`                       | int             |
| `Title`                         | string          |
| `Type`                          | int, string     |
| **U**                           |                 |
| `UpdatedAt`                     | string          |
| `Url`                           | string          |
| `Username`                      | string          |
| `Uuid`                          | string          |
| **V**                           |                 |
| `Value`                         | string,mixed    |
| `Vendor`                        | string          |
| `Version`                       | string          |
| **W**                           |                 |
| _N/A (no properties yet added)_ |                 |
| **X**                           |                 |
| `Xml`                           | string          |
| **Y**                           |                 |
| _N/A (no properties yet added)_ |                 |
| **Z**                           |                 |
| _N/A (no properties yet added)_ |                 |


As I progress with other projects, more properties will be added...

## Contribution

Have you found a defect ( [bug or design flaw](https://en.wikipedia.org/wiki/Software_bug) ), or do you wish improvements? In the following sections, you might find some useful information
on how you can help this project. In any case, I thank you for taking the time to help me improve this project's deliverables and overall quality.

### Bug Report

If you are convinced that you have found a bug, then at the very least you should create a new issue. In that given issue, you should as a minimum describe the following;

* Where is the defect located
* A good, short and precise description of the defect (Why is it a defect)
* How to replicate the defect
* (_A possible solution for how to resolve the defect_)

When time permits it, I will review your issue and take action upon it.

### Fork, code and send pull-request

A good and well written bug report can help me a lot. Nevertheless, if you can or wish to resolve the defect by yourself, here is how you can do so;

* Fork this project
* Create a new local development branch for the given defect-fix
* Write your code / changes
* Create executable test-cases (prove that your changes are solid!)
* Commit and push your changes to your fork-repository
* Send a pull-request with your changes
* _Drink a [Beer](https://en.wikipedia.org/wiki/Beer) - you earned it_ :)

As soon as I receive the pull-request (_and have time for it_), I will review your changes and merge them into this project. If not, I will inform you why I choose not to.

## Acknowledgement

* [ PHPStorm ](https://www.jetbrains.com/phpstorm/), `Jetbrains`; for developing the best PHP-IDE, and supporting this and other [OpenSource](http://en.wikipedia.org/wiki/Open_source) projects
* [ PHPUnit ](https://phpunit.de/), `Sebastian Bergmann`; By the gods ... We still know some developers, managers and decision makers, that believe good software does not require testing, at all! We cannot image working on any project, without good testing tools, such as PHPUnit.
* [ Codeception ](http://codeception.com/), `Michael Bodnarchuk`; for making PHPUnit even better.
* [ Composer ](https://getcomposer.org/) & [ Packagist ](https://packagist.org/), `Nils Adermann, Jordi Boggiano & et al.`; amongst the best things that has happened to the PHP community.
* [ Git ](http://git-scm.com/), `Software Freedom Conservancy`; without it… We would still be stuck in the "stone age" of software development.
* [ Laracasts ](https://laracasts.com/), `Jeffrey Way et al.`; worth every penny…
* [ PHP ](http://php.net/), `Rasmus Lerdorf & The PHP Group`; we might be developing this in old fashioned ASP… (Shivers!)

## Versioning

This package follows [Semantic Versioning 2.0.0](http://semver.org/)

## License

[BSD-3-Clause](http://spdx.org/licenses/BSD-3-Clause), Read the LICENSE file included in this package
