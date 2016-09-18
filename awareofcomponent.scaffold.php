<?php

return [

    /* ------------------------------------------------------------
     | Aware of Component Scaffold Configuration
     | ------------------------------------------------------------
     |
     */

    /* ------------------------------------------------------------
     | Name of this Scaffold
     | ------------------------------------------------------------
     |
     | This name is displayed in the list of available templates,
     | when the CLI command is invoked.
     */
    'name'          => 'Aware of Component',

    /* ------------------------------------------------------------
     | Description of this Scaffold
     | ------------------------------------------------------------
     |
     | This description is displayed in the list of available
     | templates, when the CLI command is invoked.
     */
    'description'   => 'Creates a "aware of" component, which consists of an interface and a default trait implementation',

    /* ------------------------------------------------------------
     | Location of scaffold's files and templates
     | ------------------------------------------------------------
     |
     | This path tells the scaffold where it can find it's
     | resource, from which it can build and install one or several
     | folders, files and or templates.
     */
    'basePath' => __DIR__ . '/resources/',

    /* ------------------------------------------------------------
     | Tasks
     | ------------------------------------------------------------
     |
     | Ordered list of all the tasks that must be executed. These
     | tasks are responsible for building your project or resource.
     */
    'tasks' => [
        \Aedart\Scaffold\Tasks\AskForTemplateData::class,
        \Aedart\Scaffold\Tasks\AskForTemplateDestination::class,
        \Aedart\Scaffold\Tasks\CreateDirectories::class,
        \Aedart\Scaffold\Tasks\CopyFiles::class,
        \Aedart\Scaffold\Tasks\GenerateFilesFromTemplates::class,
        \Aedart\Scaffold\Tasks\ExecuteScripts::class,
    ],

    /* ------------------------------------------------------------
    | Folders
    | ------------------------------------------------------------
    |
    | Each folder (or directory) stated in this array will be
    | created, if it does not already exist.
    |
    | NOTE: Directories are created from the current working
    | directory as the top-most level.
    |
    | Example:
    | Lets assume that you wish to create a set of predefined
    | directories in /home/projects/MyProject/.
    | When the scaffold CLI is executed, then all of the
    | below stated directories will be created inside the
    | mentioned root directory;
    |
    | /home/projects/MyProject/app/
    | /home/projects/MyProject/config/
    | /home/projects/MyProject/src/
    | /home/projects/MyProject/src/Contracts/
    | /home/projects/MyProject/src/Contracts/Controllers
    | ...etc
    */
    'folders' => [
        'src' => [
            'Contracts' => [
                'Arrays',
                'Booleans',
                'Integers',
                'Strings',
            ],
            'Traits' => [
                'Arrays',
                'Booleans',
                'Integers',
                'Strings',
            ]
        ]
    ],

    /* ------------------------------------------------------------
    | Files
    | ------------------------------------------------------------
    |
    | Each file will be copied into your project directory,
    | if it does NOT already exist.
    |
    | WARNING: You should avoid large files. If your template
    | requires such, then you should perhaps consider a custom
    | command that can download them from an external source!
    |
    | NOTE: The files are read from inside the 'basePath'.
    */
    'files' => [
        // Source files (inside 'basePath')  =>  Destination
    ],

    /* ------------------------------------------------------------
    | Template Data
    | ------------------------------------------------------------
    |
    | In this section, all the "variables" that are needed by
    | templates are defined. (Internally, these are called
    | "properties").
    |
    | Each defined variable or "property" has a type, that
    | determines how the system should deal with it. Depending on
    | that type, a value is either just passed on to the templates
    | or the end-user is prompted (asked) for a value, in the
    | console.
    |
    | By default, the system supports the types that are defined
    | within the Type interface.
    | @see \Aedart\Scaffold\Contracts\Templates\Data\Type
    | ------------------------------------------------------------
    |
    | Syntax
    |
    | As a minimum, each variable should be defined in the
    | following way;
    |
    | 'name-of-property' => [
    |      'value' => (the value of the property)
    | ],
    |
    | If you need the end-user to provide you with a value, then
    | you must state a type. It will determine how the user is
    | going to be asked for that value. Furthermore, additional
    | settings might be required, such as a 'question' property,
    | that is displayed to the user.
    |
    | 'name-of-property' => [
    |      'type'      => \Aedart\Scaffold\Contracts\Templates\Data\Type::QUESTION
    |      'question'  => 'The question to ask the user'
    |      'value'     => (default value, in case user just hits enter)
    | ],
    |
    | See the resources/examples/example.scaffold.php for what
    | settings are supported by the default types.
    | ------------------------------------------------------------
    |
    | Validation and post processing
    |
    | Validation and post-processing of the values is also
    | supported. This is done so, via callback methods.
    |
    | 'name-of-property' => [
    |      'type'          => \Aedart\Scaffold\Contracts\Templates\Data\Type::QUESTION
    |      'question'      => 'The question to ask the user'
    |      'value'         => (default value, in case user just hits enter),
    |      'validation'    => function($answer){return $answer;},
    |      'postProcess'   => function($answer, $previousAnswers){return $answer;},
    | ],
    | ------------------------------------------------------------
    |
    | Behind the scenes, the Symfony Style utility is used as a
    | helper to prompt the user for a value.
    | @see http://symfony.com/blog/new-in-symfony-2-8-console-style-guide
    */
    'templateData' => [

        'vendorNamespace' => [

            'type'          => \Aedart\Scaffold\Contracts\Templates\Data\Type::QUESTION,

            'question'      => 'What this vendor\'s namespace?',

            'value'         => scaffold_cache_get('vendorNamespace', 'Acme\\Models'),

            'postProcess'   => function($answer, array $previousAnswers){
                scaffold_cache_put('vendorNamespace', $answer);
                return $answer;
            }
        ],

        'coreProperty' => [

            'type'          => \Aedart\Scaffold\Contracts\Templates\Data\Type::QUESTION,

            'question'      => 'What is the property\'s name?',

            'value'         => 'myProperty',

            'postProcess'   => function($answer, array $previousAnswers){
                return lcfirst(\Illuminate\Support\Str::studly(trim($answer)));
            }
        ],

        'dataType' => [

            'type'          => \Aedart\Scaffold\Contracts\Templates\Data\Type::CHOICE,

            'question'      => 'What is the type of the property?',

            'choices'       => [
                "string",
                "int",
                "float",
                "bool",
                "resource",
                "null",
                "callable",
                "array",
                "mixed",
                "string[]",
                "int[]",
                "float[]",
                "bool[]",
                "resource[]",
                "callable[]",
                "array[]",
                "mixed[]"
            ],

            'value'         => 'string',
        ],

        'scalarType' => [

            'postProcess'   => function($answer, array $previousAnswers){
                $dataType = $previousAnswers['dataType'];

                if(strpos($dataType, '[]') !== false){
                    return 'array';
                }

                // For casting... PHP 5.6.x
                // @see http://php.net/manual/en/language.types.type-juggling.php#language.types.typecasting
                $supported = [
                    'int',
                    'integer',
                    'bool',
                    'boolean',
                    'float',
                    'double',
                    'real',
                    'string',
                    'array',
                    'object'
                ];

                if(in_array($dataType, $supported)){
                    return $dataType;
                }
                return '';
            }
        ],

        'propertyDescription' => [

            'type'          => \Aedart\Scaffold\Contracts\Templates\Data\Type::QUESTION,

            'question'      => 'Description of the property?',

            'value'         => 'n/a',

            'postProcess'   => function($answer, array $previousAnswers){
                return trim(ucfirst($answer));
            }
        ],

        'inputArgument' => [

            'type'          => \Aedart\Scaffold\Contracts\Templates\Data\Type::QUESTION,

            'question'      => 'What is the input argument name?',

            'value'         => 'value',

            'postProcess'   => function($answer, array $previousAnswers){
                return lcfirst(\Illuminate\Support\Str::studly(trim($answer)));
            }
        ],

        'inputType' => [

            'postProcess'   => function($answer, array $previousAnswers){
                $dataType = $previousAnswers['dataType'];

                $supported = [
                    'array',
                    'callable'
                ];

                if(in_array($dataType, $supported)){
                    return $dataType . ' ';
                }
                if(strpos($dataType, '[]') !== false){
                    return 'array ';
                }
                return '';
            }
        ],

        'traitNamespace' => [
            'type'          => \Aedart\Scaffold\Contracts\Templates\Data\Type::QUESTION,

            'question'      => 'What is the namespace for the trait?',

            'value'         => 'Amce\\Traits',

//            'postProcess'   => function($answer, array $previousAnswers){
//
//
//                return lcfirst(\Illuminate\Support\Str::studly(trim($answer)));
//            }
        ],

        'castType' => [

            'postProcess'   => function($answer, array $previousAnswers){
                $scalarType = $previousAnswers['scalarType'];

                // For casting... PHP 5.6.x
                // @see http://php.net/manual/en/language.types.type-juggling.php#language.types.typecasting
                $supported = [
                    'int',
                    'integer',
                    'bool',
                    'boolean',
                    'float',
                    'double',
                    'real',
                    'string',
                    //'array', // Should not be needed
                    'object'
                ];

                if(in_array($scalarType, $supported)){
                    return '(' .$scalarType . ') ';
                }
                return '';
            }
        ],

        'propertyName' => [

            'postProcess'   => function($answer, array $previousAnswers){
                return ucfirst($previousAnswers['coreProperty']);
            }
        ],

        'propertyInDescription' => [

            'postProcess'   => function($answer, array $previousAnswers){
                $property = \Illuminate\Support\Str::snake($previousAnswers['propertyName']);
                return str_replace('_', ' ', $property);
            }
        ],

        'title' => [

            'postProcess'   => function($answer, array $previousAnswers){
                return ucwords($previousAnswers['propertyInDescription']);
            }
        ],

        'traitClassName' => [

            'postProcess'   => function($answer, array $previousAnswers){
                return ucfirst($previousAnswers['propertyName']) . 'Trait';
            }
        ],

        'interfaceClassName' => [

            'postProcess'   => function($answer, array $previousAnswers){
                return ucfirst($previousAnswers['propertyName']) . 'Aware';
            }
        ]
    ],

    /* ------------------------------------------------------------
    | Templates
    | ------------------------------------------------------------
    |
    | Think of these as snippets that will be used to generate
    | some kind of file. It could be a composer file, a PHP Class,
    | a .env configuration or perhaps a default README file.
    |
    | Each template has a source template file, e.g. a *.twig
    | file, a destination which you can prompt the user about,
    | before the file is generated.
    |
    | The "destination" property works just like the template
    | data. See "templateData" documentation for further info.
    |
    | Furthermore, the source and destination will assigned as a
    | template variable, and made available inside the template
    | itself!
    |
    | Example
    | 'composer' => [
    |      'source' => 'snippets/composer.json.twig'
    |      'destination' => [
    |          'value'       => 'composer.json'
    |      ],
    |      ...
    | ]
    |
    | Will be available inside the 'snippets/composer.json.twig'
    | template as {{ template.composer.source }},
    | {{ template.composer.destination }} ...etc
    | ------------------------------------------------------------
    |
    | Each destination that you provide (or ask for) is relative
    | to the "output path". This usually means the current working
    | directory of where the scaffold is being installed into!
    */
    'templates' => [
        'trait' => [
            'source'        => 'snippets/trait.php.twig',

            'destination'   => [

                'postProcess'   => function($answer, array $previousAnswers){
                    return $previousAnswers['traitClassName'] . '.php';
                }
            ],
        ],

        'interface' => [
            'source'        => 'snippets/interface.php.twig',

            'destination'   => [

                'postProcess'   => function($answer, array $previousAnswers){
                    return $previousAnswers['interfaceClassName'] . '.php';
                }
            ],
        ],
    ],

    /* ------------------------------------------------------------
     | Scripts
     | ------------------------------------------------------------
     |
     | CLI scripts (or commands) to be executed
     | ------------------------------------------------------------
     |
     | Syntax
     |
     | Each script has to be given
     |
     | 'scripts' => [
     |      (CLI executable script),
     |      (CLI executable script),
     |      (CLI executable script),
     |      ...
     | ],
     |
     | If you need to specify a timeout for a given script, then
     | you can state a script via an array;
     |
     | 'scripts' => [
     |      [,
     |          'timeout'   => 60, // Timeout in seconds
     |          'script'    => (CLI executable script)
     |      ],
     |      ...
     | ],
     |
     | Lastly, if you need to build very advanced scripts, which depends
     | on the entire scaffold configuration, then you can do so by means
     | of a function.
     |
     | The function MUST return a CLI Script component instance!
     | @see \Aedart\Scaffold\Contracts\Scripts\CliScript
     |
     | 'scripts' => [
     |      function(array $config){ return new \Aedart\Scaffold\Scripts\CliScript(); },
     |      ...
     | ],
     */
    'scripts' => [

    ],

    /* ------------------------------------------------------------
    | Scaffold handlers
    | ------------------------------------------------------------
    |
    | These handlers are used by some of the default tasks. They
    | provide an additional level of flexibility, in which you
    | can use the default tasks, yet change the way that each of
    | them handles certain operations.
    |
    | If you do not plan to change the default tasks' behaviour,
    | then you can leave out this part of the configuration.
    */
//    'handlers' => [
//
//        'directory'     =>    \Aedart\Scaffold\Handlers\DirectoriesHandler::class,
//
//        'file'          =>    \Aedart\Scaffold\Handlers\FilesHandler::class,
//
//        'property'      =>    \Aedart\Scaffold\Handlers\PropertyHandler::class,
//
//        'template'      =>    \Aedart\Scaffold\Handlers\TwigTemplateHandler::class,
//
//        'script'        =>    \Aedart\Scaffold\Handlers\ScriptsHandler::class,
//    ],
];