## Model ##

Collection of getter- / setter-interfaces with various trait implementations, for different kinds of "common" properties.

By itself, this package consists only of declared dependencies, meaning that it has a single file - the composer file.

Official project website (https://bitbucket.org/aedart/model)

## Contents ##

[TOC]

## When to use this ##

Unless you are working on a very large and complex system requires several different types models, ... well, perhaps you can settle for just what you need.
Please take a closer look at [what this package contains](https://bitbucket.org/aedart/model/overview#markdown-header-what-does-this-package-contain).

## How to install ##

```
#!console

composer require aedart/model @todo... 
```

This package uses [composer](https://getcomposer.org/). If you do not know what that is or how it works, I recommend that you read a little about, before attempting to use this package.

## Quick start ##

The first thing that I recommend you to do is to design your desired component’s interface. In below stated example, we will design an interface for a very simple person;

### Person interface ###

```
#!php
<?php namespace Acme\Person;
use Aedart\Model\Id\Interfaces\IdAware;
use Fenix440\Model\Name\Interfaces\NameAware;
use Fenix440\Model\Description\Interfaces\DescriptionAware;

interface IPerson extends IdAware,
    NameAware,
    DescriptionAware
{
    
}

```

Our person interface doesn’t contain much; it has but the ability to get/set an id, name and a short description.All those methods (and more) are defined in each of the applied interfaces (`IdAware`, `NameAware` and `ShortDescriptionAware`).

In the next section, we will create a concrete implementation of a person.

### Concrete person ###

```
#!php
<?php namespace Acme\Person;

use Acme\Person\IPerson;
use Aedart\Model\Id\Traits\UnsignedIntegerIdTrait;
use Fenix440\Model\Name\Traits\NameTrait;
use Fenix440\Model\Description\Traits\DescriptionTrait;

class MyPerson implements IPerson {
 
    use UnsignedIntegerIdTrait,
        NameTrait,
        DescriptionTrait;
 
}
```

Without writing many lines of code, out concrete implementation has implemented all of the required get/set methods, by making use of the default traits, which comes with each of the `Aedart\Model` sub-packages.

### Override defaults ###

Let’s pretend that each person needs to have a default shot description, just in case that none has been provided. There are multiple ways this can be resolved. The first one is simply to override the “get-default” method, directly in your concrete implementation;

```
#!php
<?php namespace Acme\Person;

use Acme\Person\IPerson;
use Aedart\Model\Id\Traits\UnsignedIntegerIdTrait;
use Fenix440\Model\Name\Traits\NameTrait;
use Fenix440\Model\Description\Traits\DescriptionTrait;

class MyPerson implements IPerson {
 
    use UnsignedIntegerIdTrait,
        NameTrait,
        DescriptionTrait;
 
    public function getDefaultShortDescription(){
        return "This person has no description";
    }
}
```

Given the implementation we just made, each person which doesn’t have a short description will simply contain a default text, stating that the given person has no description. The same is possible for name, id and all other sub-packages, if you need to provide default data. However, this being said, you could also create your own trait, which achieves the same;

```
#!php
<?php namespace Acme\Person;

use Fenix440\Model\Description\Traits\DescriptionTrait;

trait MyShortDescription {
 
    use DescriptionTrait;
 
    public function getDefaultDescription(){
        return "This person has no description";
    }
}
```

And in your concrete implementation, you can replace the `ShortDescriptionTrait` with your own version. The implementation would look like the following;

```
#!php
<?php namespace Acme\Person;

use Acme\Person\IPerson;
use Acme\Person\MyShortDescription;
use Aedart\Model\Id\Traits\UnsignedIntegerIdTrait;
use Fenix440\Model\Name\Traits\NameTrait;

class MyPerson implements IPerson {
 
    use UnsignedIntegerIdTrait,
        NameTrait,
        MyShortDescription;
}
```

If by any chance this confuses you, e.g. you do not know how traits work in PHP, please review the PHP documentation: http://php.net/manual/en/language.oop5.traits.php

## What does this package contain ##

As mentioned, by itself, this package does not offer much more than a composer file, which requires several smaller packages, each situated within the `Aedart\Model` namespace. Listed below are those dependencies.

Name                 |   description              | Link
----------------*    |   ---------------------*   | --------------------
**A**
_N/A (no sub-packages yet developed)_
**B**
_N/A (no sub-packages yet developed)_
**C**
_N/A (no sub-packages yet developed)_
**D**
`Description`       | Getter and Setter package for some kind of model description. |   https://bitbucket.org/fenix440/model-description
**E**
_N/A (no sub-packages yet developed)_
**F**
_N/A (no sub-packages yet developed)_
**G**
_N/A (no sub-packages yet developed)_
**H**
_N/A (no sub-packages yet developed)_
**I**
`Id`             | Getter and Setter package for some kind of model identifier (id). |   https://bitbucket.org/aedart/model-id
**J**
_N/A (no sub-packages yet developed)_
**K**
_N/A (no sub-packages yet developed)_
**L**
_N/A (no sub-packages yet developed)_
**M**
_N/A (no sub-packages yet developed)_
**N**
`Name`       | Getter and Setter package for some kind of model name. |   https://bitbucket.org/fenix440/model-name
**O**
_N/A (no sub-packages yet developed)_
**P**
_N/A (no sub-packages yet developed)_
**Q**
_N/A (no sub-packages yet developed)_
**R**
_N/A (no sub-packages yet developed)_
**S**
_N/A (no sub-packages yet developed)_
**T**
_N/A (no sub-packages yet developed)_
**U**
`Uuid`             | Getter and Setter package for Universally unique identifier (UUID) |   https://bitbucket.org/aedart/model-uuid
**V**
`Validate`             | A validate package which allows to perform various sorts of simple validation upon primates ... |   https://bitbucket.org/aedart/validate
**W**
_N/A (no sub-packages yet developed)_
**X**
_N/A (no sub-packages yet developed)_
**Y**
_N/A (no sub-packages yet developed)_
**Z**
_N/A (no sub-packages yet developed)_

## Future upcoming packages ##

@todo... So... what is this project going to contain in the future?

* create, update, delete date
* path to x, y, z
* picture(s)
* Address -> street, zip, state(s) and countries (Hmmm... generalised or specialised?) -> Google's API for validation? 
* gravatar?
* url
* dimensions width, height, depth
* email
* phone(s)
* i18n (oh boy.. how to resolve this one in a simple manner?)
* age
* ...vcard standards
* ISBN-10, ISBN-13
* IBAN,
* SWIFT/BIC,
* BBAN (RIB),
* Credit Card number,
* EAN13
* ...Generator(s) for creating sub-packages (so that others can create similar stuff) -> this would be a "project"-package and not a library-package
    
-------------------------------------------

@todo... Security

* Only syntax checking mostly... Not good enough!
* Custom exceptions, great, ... but DON'T make them visible during production!
* What about XSS, XSRF (check abbreviation)
* SQL Injection?
* User's own mistakes (wrong data input)
    
-------------------------------------------

@todo... Background

* Long time ago... Then came traits... No one seems to be doing this (perhaps Symfony's Entities?)
* Philosophy behind the packages
* I-am-aware-interfaces
* Specialised traits
* Custom exceptions -> make it visible when something fails (at least during development)

-------------------------------------------

@todo... Contribution

* Bugs... clone, branch, test, merge, pull-request (how does this work again...?) 
* Would you like to be part of this?
     
## Acknowledgement ##

Crafting small interfaces and traits containing a few methods is a rather trivial and easy task. That being said, ensuring that data validity is an entirely different matter. Without certain individuals within the PHP community, making these packages would have been impossible for me. I would like to thank all those who that have spent countless hours, days, months and years developing great packages and for sharing them with the rest of this world.

If you are interested in a more saturated list of names, please review the acknowledgement-section found in each `Aedart\Model` sub-package.

Did I forget to add your name in one of my packages? Please let me know...

@todo ... What about the more general ones:

* phpunit (By the gods ... I know developers, managers and decision makers that still believe good software doesn't need testing!),
* codeception (making PHPUnit even better),
* composer / packagist (dependency management and distribution),
* bitbucket (for letting me host private repos.. you know, those that aren't worthy for the public)
* Laracast (Worth every penny...),

## License ##

[BSD-3-Clause](http://spdx.org/licenses/BSD-3-Clause), Read the LICENSE file included in this package