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
use Aedart\Model\Name\Interfaces\NameAware;
use Aedart\Model\Description\Interfaces\ShortDescriptionAware;

interface IPerson extends IdAware,
    NameAware,
    ShortDescriptionAware
{
    
}

```

Our person interface doesn’t contain much; it has but the ability to get/set an id, name and a short description.All those methods (and more) are defined in each of the applied interfaces (IdAware, NameAware and ShortDescriptionAware).

In the next section, we will create a concrete implementation of a person.

### Concrete person ###

```
#!php
<?php namespace Acme\Person;

use Acme\Person\IPerson;
use Aedart\Model\Id\Traits\UnsignedIntegerIdTrait;
use Aedart\Model\Name\Traits\SimpleNameTrait;
use Aedart\Model\Description\Traits\ShortDescriptionTrait;

class MyPerson implements IPerson {
 
    use UnsignedIntegerIdTrait,
        SimpleNameTrait,
        ShortDescriptionTrait;
 
}
```

Without writing many lines of code, out concrete implementation has implemented all of the required get/set methods, by making use of the default traits, which comes with each of the `Aedart\Model` sub-packages.

## What does this package contain ##

As mentioned, by itself, this package does not offer much more than a composer file, which requires several smaller packages, each situated within the `Aedart\Model` namespace. Listed below are those dependencies.

Name                 |   description              | Link
----------------*    |   ---------------------*   | --------------------
Id             | Getter and Setter package for some kind of model identifier (id). |   https://bitbucket.org/aedart/model-id
Validate             | A validate package which allows to perform various sorts of simple validation upon primates as well as defining how validators should behave |   https://bitbucket.org/aedart/validate

@todo ... Include a list (alphabetically sorted) / link / Mini-description to each published sub-package 

## Future upcoming packages ##

@todo... So... what is this project going to contain in the future?

* name
* description
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