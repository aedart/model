[![Build Status](https://travis-ci.org/aedart/model.svg?branch=dev)](https://travis-ci.org/aedart/model)
[![Latest Stable Version](https://poser.pugx.org/aedart/model/v/stable)](https://packagist.org/packages/aedart/model)
[![Total Downloads](https://poser.pugx.org/aedart/model/downloads)](https://packagist.org/packages/aedart/model)
[![Latest Unstable Version](https://poser.pugx.org/aedart/model/v/unstable)](https://packagist.org/packages/aedart/model)
[![License](https://poser.pugx.org/aedart/model/license)](https://packagist.org/packages/aedart/model)

# Deprecated - Model

**Package has been replaced by [aedart/athenaeum](https://github.com/aedart/athenaeum)**
All aware-of components have been migrated into the [Athenaeum package](https://aedart.github.io/athenaeum/components/support/properties.html). 

Collection of [getters and setters](http://en.wikipedia.org/wiki/Mutator_method)-interfaces with various trait implementations, for different kinds of "common" properties.
Can be used for creating [DTOs](https://en.wikipedia.org/wiki/Data_transfer_object).

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

interface Person extends
    IdAware,
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
    use IdTrait;
    use NameTrait;
    use DescriptionTrait;   
}
```

## Available properties

| Property                        | Supported types      |
|---------------------------------|----------------------|
| **A**                           |                      |
| `Action`                        | string               |
| `Address`                       | string               |
| `Age`                           | int                  |
| `Agent`                         | string               |
| `Alias`                         | string               |
| `Amount`                        | int, float           |
| `Anniversary`                   | int, string          |
| `Area`                          | string               |
| `Ask`                           | bool                 |
| `Author`                        | string               |
| **B**                           |                      |
| `BasePath`                      | string               |
| `Begin`                         | string               |
| `Birthdate`                     | int, string          |
| `Brand`                         | int, string          |
| `BuildingNumber`                | string               |
| **C**                           |                      |
| `Calandar`                      | string               |
| `CardNumber`                    | string               |
| `CardOwner`                     | string               |
| `CardType`                      | string               |
| `Categories`                    | array                |
| `Category`                      | string               |
| `Choices`                       | array                |
| `City`                          | string               |
| `Class`                         | string               |
| `Code`                          | string               |
| `Colour`                        | string               |
| `Column`                        | string               |
| `Comment`                       | string               |
| `Company`                       | string               |
| `Content`                       | string               |
| `Country`                       | string               |
| `CreatedAt`                     | int, string          |
| `Currency`                      | string               |
| **D**                           |                      |
| `Data`                          | array                |
| `Database`                      | string               |
| `Date`                          | int, string          |
| `DeceasedAt`                    | int, string          |
| `DeletedAt`                     | int, string          |
| `DeliveredAt`                   | int, string          |
| `DeliveryAddress`               | string               |
| `DeliveryDate`                  | int, string          |
| `Depth`                         | int, float           |
| `Description`                   | string               |
| `Directory`                     | string               |
| `Discount`                      | int, float, string   |
| `Distance`                      | int, float, string   |
| `Domain`                        | string               |
| `Duration`                      | int, float, string   |
| **E**                           |                      |
| `Ean13`                         | string               |
| `Ean8`                          | string               |
| `Ean`                           | string               |
| `Edition`                       | int, string          |
| `Email`                         | string               |
| `End`                           | string               |
| `EndDate`                       | int, string          |
| `Error`                         | int, string          |
| `Event`                         | int, string          |
| `ExpiresAt`                     | int, string          |
| **F**                           |                      |
| `FileExtension`                 | string               |
| `Filename`                      | string               |
| `FilePath`                      | string               |
| `FirstName`                     | string               |
| `Format`                        | string               |
| `FormattedName`                 | string               |
| **G**                           |                      |
| `Gender`                        | string               |
| `Group`                         | int, string          |
| **H**                           |                      |
| `Height`                        | int, float           |
| `Host`                          | string               |
| `Html`                          | string               |
| **I**                           |                      |
| `Iata`                          | string               |
| `Iban`                          | string               |
| `Icao`                          | string               |
| `Id`                            | int, string          |
| `Identifier`                    | int, string          |
| `Image`                         | string               |
| `Index`                         | int, string          |
| `InvoiceAddress`                | string               |
| `Ip`                            | string               |
| `IpV4`                          | string               |
| `IpV6`                          | string               |
| `IsicV4`                        | string               |
| `Isbn`                          | string               |
| `Isbn10`                        | string               |
| `Isbn13`                        | string               |
| **J**                           |                      |
| `Json`                          | string               |
| **K**                           |                      |
| `Key`                           | string               |
| `Kind`                          | string               |
| **L**                           |                      |
| `Label`                         | string               |
| `Language`                      | string               |
| `LastName`                      | string               |
| `Latitude`                      | float, string        |
| `Length`                        | int, float           |
| `License`                       | int, string          |
| `Locale`                        | string               |
| `Location`                      | int, string          |
| `Locations`                     | array                |
| `Logo`                          | string               |
| `Longitude`                     | float, string        |
| **M**                           |                      |
| `MacAddress`                    | string               |
| `Manufacturer`                  | string               |
| `Material`                      | string               |
| `MediaType`                     | string               |
| `Message`                       | string               |
| `Method`                        | int, string          |
| `MiddleName`                    | string               |
| **N**                           |                      |
| `Name`                          | string               |
| `Nickname`                      | string               |
| **O**                           |                      |
| `OrderNumber`                   | int, string          |
| `Organisation`                  | string               |
| `OutputPath`                    | string               |
| **P**                           |                      |
| `Package`                       | string               |
| `Password`                      | string               |
| `Path`                          | string               |
| `Pattern`                       | string               |
| `Phone`                         | string               |
| `Photo`                         | string               |
| `PostalCode`                    | string               |
| `Prefix`                        | string               |
| `Price`                         | int, float, string   |
| `ProducedAt`                    | int, string          |
| `ProductionDate`                | int, string          |
| `Profile`                       | string               |
| `PurchasedAt`                   | int, string          |
| `PurchaseDate`                  | int, string          |
| **Q**                           |                      |
| `Quantity`                      | int, float           |
| `Query`                         | string               |
| `Question`                      | string               |
| **R**                           |                      |
| `Rank`                          | int, float, string   |
| `Rate`                          | int, float, string   |
| `Rating`                        | int, float, string   |
| `Region`                        | string               |
| `ReleasedAt`                    | int, string          |
| `ReleaseDate`                   | int, string          |
| `Revision`                      | string               |
| `Role`                          | string               |
| `Row`                           | int                  |
| **S**                           |                      |
| `Size`                          | int, float, string   |
| `Script`                        | string               |
| `Slug`                          | string               |
| `Source`                        | string               |
| `Sql`                           | string               |
| `StartDate`                     | int, string          |
| `State`                         | int, string          |
| `Status`                        | int, string          |
| `Street`                        | string               |
| `Suffix`                        | string               |
| `Swift`                         | string               |
| **T**                           |                      |
| `Table`                         | string               |
| `Tag`                           | string               |
| `Tags`                          | array                |
| `Template`                      | string               |
| `Text`                          | string               |
| `Timeout`                       | int                  |
| `Timestamp`                     | int                  |
| `Timezone`                      | string               |
| `Title`                         | string               |
| `Tld`                           | string               |
| `Topic`                         | string               |
| `Type`                          | int, string          |
| **U**                           |                      |
| `UpdatedAt`                     | int, string          |
| `Url`                           | string               |
| `Username`                      | string               |
| `Uuid`                          | string               |
| **V**                           |                      |
| `Value`                         | string, mixed        |
| `Vat`                           | int, float, string   |
| `Vendor`                        | string               |
| `Version`                       | string               |
| **W**                           |                      |
| `Weight`                        | int, float           |
| `Width`                         | int, float           |
| `Wildcard`                      | string               |
| **X**                           |                      |
| `X`                             | int, float, mixed    |
| `Xml`                           | string               |
| **Y**                           |                      |
| `Y`                             | int, float, mixed    |
| **Z**                           |                      |
| `Z`                             | int, float, mixed    |
| `Zone`                          | int, string          |


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
