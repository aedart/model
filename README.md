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

This package uses [composer](https://getcomposer.org/). If you do not know what that is or how it works, we recommend that you read a little about, before attempting to use this package.

## Quick start ##

The first thing that we recommend you to do is to design your desired component’s interface. In below stated example, we will design an interface for a very simple person;

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

You can see what is currently in the process of being developed, in our [ Issues-list ](https://bitbucket.org/aedart/model/issues)
    
## Security ##

DON’T trust users input – not even when you are the user!

In the most common cases, we (as end-users and developers) might think of worst case scenarios, where harmful code somehow ends up on your browser based application. It might get executed and the damage is done. [XSS](http://en.wikipedia.org/wiki/Cross-site_scripting) and [SQL-injections](http://en.wikipedia.org/wiki/SQL_injection) appear to be some of the most known and used software exploits. Yet, when talking about security, it is all too often forgotten, that even simple incorrect input also can lead to security vulnerabilities. Consider the following hypothetical example;

“A user fills out a form, in which he/she is required to choose between various account types. By accident, an incorrect value is typed into the given input field, and the form is submitted (data is sent to a server). The application ensures to filter the data of any eventual harmful code. Yet, it doesn’t understand the given incorrect value – it simply stores it directly into the database. This results in a very unfavourable situation, in which the given user gains more access to certain data / information, because the account type is perceived as an administrator-account. The system has no way of telling, that this was a mistake and continues to allow that user to persist with extended privileges.”

If you are now thinking, that this never happens in real life, you are wrong. The more complex a system becomes, the greater the chance is for such things. Perhaps a user might not get unwanted privileges. But maybe something else could happen instead, such as a system crash, all because a single property wasn’t validated against an invalid character or number, e.g. -1 was given, where positive numbers where expected. To put matters into perspective, you yourself could be that user that somehow by accident types in something wrong, and the application suddenly behaves in an undesirable manner. Therefore, you should never trust a user’s input, not even when the input derives from you.

### How we deal with security in this project ###

We do NOT GUARANTEE that any of our sub-packages lives up to your security needs. This means that;

* We do not clean / filter for harmful code, such as [XSS](http://en.wikipedia.org/wiki/Cross-site_scripting) nor [SQL-injections](http://en.wikipedia.org/wiki/SQL_injection)
* We only provide a minimum default data validity; a number is a number, a string is a string, …etc

Filtering data for eventual harmful code should be done, at a much higher level in your architecture. Security is always context dependent and we might not know nor understand the context, in which you choose to use our packages. For your own sake and for the sake of your end-users, please do expand your knowledge about software security. Here are a few resources, that could help you;

* [The Open Web Application Security Project (OWASP)](https://www.owasp.org)
* [Build Security In](https://buildsecurityin.us-cert.gov/)
* [24 Deadly Sins of Software Security: Programming Flaws and How to Fix Them](http://www.amazon.co.uk/dp/0071626751)
* [Guide to Advanced Software Testing](http://www.amazon.co.uk/dp/1596932856 )
* [Software Security: Building Security In](http://www.amazon.co.uk/dp/0321356705)

-------------------------------------------

@todo... Background

* Long time ago... Then came traits... No one seems to be doing this (perhaps Symfony's Entities?)
* Philosophy behind the packages
* I-am-aware-interfaces
* Specialised traits
* Custom exceptions -> make it visible when something fails (at least during development)

-------------------------------------------

## Contribution ##

Are you missing a vital component, have you found a defect ([ bug or design flaw ](http://en.wikipedia.org/wiki/Software_bug)), or do you wish to extend our list of ready-to-use sub-packages? In the following sections, you might find some useful information on how you can help this project. In any case, we thank you, for taking the time to help us improve this project’s deliverables and overall quality.

### Bug Report ###

We believe that; as a project grows, so will the likelihood of introducing defects of all kind. If you are convinced that you have found one, at the very least you should create a [new issue](https://bitbucket.org/aedart/model/issues). In that given issue, you should as a minimum describe the following;

* In which component is the defect located
* A good, short and precise description of the defect (Why is it a defect)
* How to replicate the defect
* (A possible solution for how to resolve the defect)

When time permits it, we will review your issue and take action upon it.

### Fork, code and send pull-request ###

A good and well written bug report can help us a lot. Nevertheless, if you can or wish to resolve the defect by yourself, here is how you can do so;

* [ Fork ](https://confluence.atlassian.com/display/BITBUCKET/Fork+a+Repo,+Compare+Code,+and+Create+a+Pull+Request) the given sub-package in question
* Create a new local development branch for the given defect-fix
* Write your code / changes
* Create executable test-cases (prove that your changes are solid!)
* Commit and push your changes to your fork-repository
* Send a pull-request with your changes

As soon as we receive the pull-request (and we have time for it), we will review your changes and possibly merge it to the given sub-package. If not, we will inform you why we choose not to.

### Code (New Sub-packages) ###
We have mentioned this a few times; this project is little more than a collection of smaller sub-packages, each being usable by themselves. They are simple in nature and it is NOT a requirement to use `Aedart\Model` as a namespace. Preferably you can use your own namespace and simply be added to our list!

Therefore, if you wish to develop such a package (or perhaps you already have one ready), then you need to follow these few guidelines.

* Each package must follow the general guidelines (@todo add link to general guidelines)
* Each package must contain a minimum amount of unit-tests, covering at least 90% of the code
* Alin and Bart must be given “developer” read / write access to your given package-repository and be added as maintainers on packagist. (_The only reason we desire such privileges, is to ensure that we can contribute to your package, e.g. add more specialised traits or perhaps fix a small defect, should such be needed_)

Provided you have followed these guidelines, send us an e-mail containing a link to your repository. We will review your package, send you some feedback, and add it to this project’s list.

### Code (Existing Sub-packages) ###

If you have a desire to add new enhancements to existing sub-packages; extend or perhaps contribute with more specialised traits, the please follow these steps;

* Follow the same steps as you would for resolving a defect (Fork, Code, Commit, Push and send pull-request)

In addition to this, when you add something new, something of value to a given sub-package, it is only fair that your name is a part of that given package. Therefore, please feel free to write your name, in the given sub-package’s `README.md file`, under the acknowledgement section. If by chance, there is no such section, do please add one.

### Community ###

At this point in time, we have yet to start a “formal” community, which actively concerns itself with this project. Time is always of the essence, and currently we cannot spend more time than we do. Having stated such, if you have experience with online software development communities, we would appreciate your help. Please contact us…

## Acknowledgement ##

Crafting small interfaces and traits containing a few methods is a rather trivial and easy task. That being said, ensuring that data validity is, an entirely different matter. Without certain individuals within the PHP community, making these packages would have been impossible for us. We would like to thank all those who that have spent countless hours, days, months and years developing great packages and for sharing them with the rest of this world. Amongst those, we would especially like to thank the following contributors:

* [ PHPStorm ](https://www.jetbrains.com/phpstorm/), `Jetbrains`; for developing the best PHP-IDE, and supporting this and other OpenSource projects
* [ PHPUnit ](https://phpunit.de/), `Sebastian Bergmann`; By the gods ... We still know some developers, managers and decision makers, that believe good software does not require testing, at all! We cannot image working on any project, without good testing tools, such as PHPUnit.
* [ Codeception ](http://codeception.com/), `Michael Bodnarchuk`; for making PHPUnit even better.
* [ Composer ](https://getcomposer.org/) & [ Packagist ](https://packagist.org/), `Nils Adermann, Jordi Boggiano & et al.`; amongst the best things that has happened to the PHP community.
* [ BitBucket ](https://bitbucket.org/), `Atlassian Pty Ltd`; for letting us host private projects – yes, you know, those kind of projects that aren’t worth publishing as OpenSource!
* [ Git ](http://git-scm.com/), `Software Freedom Conservancy`; without it… We would still be stuck in the “stone age” of software development.
* [ Laracasts ](https://laracasts.com/), `Jeffrey Way et al.`; worth every penny…
* [ PHP ](http://php.net/), `Rasmus Lerdorf & The PHP Group`; we might be developing this in old fashioned ASP… (Shivers!)

If you are interested in a more saturated list of names, please review the acknowledgement-section found in each `Aedart\Model` sub-package.

Did we forget to add your name in one of my packages? Please let us know...

## Contact ##

@aedart, aedart@gmail.com

@fenix440, fenix440@gmail.com

## License ##

[BSD-3-Clause](http://spdx.org/licenses/BSD-3-Clause), Read the LICENSE file included in this package