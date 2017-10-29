<?php

/* ------------------------------------------------------------
 | Require helpers
 * ------------------------------------------------------------ */
require_once __DIR__ . '/helpers/helpers.php';

/* ------------------------------------------------------------
 | Require aware of scaffold configuration
 * ------------------------------------------------------------ */

$scaffold = require __DIR__ . '/vendor/aedart/scaffold-bundle/awareofcomponent.scaffold.php';

/* ------------------------------------------------------------
 | Name
 * ------------------------------------------------------------ */

$scaffold['name'] = 'Model Aware Of Component';

/* ------------------------------------------------------------
 | Description
 * ------------------------------------------------------------ */

$scaffold['description'] = 'Specialised Aedart/Model Aware Of Component';

/* ------------------------------------------------------------
 | Base Directory
 * ------------------------------------------------------------ */

// TODO: We shouldn't need to do this, yet we are adding our own template in the mix
// TODO: @see https://github.com/aedart/scaffold/issues/6
$scaffold['basePath'] = __DIR__ . '/resources/';

/* ------------------------------------------------------------
 | Template Data
 * ------------------------------------------------------------ */

$scaffold['templateData']['vendorNamespace'] = [

    'postProcess'   => function($answer, array $previousAnswers){
        return 'Aedart\\Model';
    }
];

$scaffold['templateData']['fakerGetSetValue'] = [

    'postProcess'   => function($answer, array $previousAnswers){
        $type = $previousAnswers['dataType'];

        return generate_faker_method($type);
    }
];

/* ------------------------------------------------------------
 | Templates
 * ------------------------------------------------------------ */

$scaffold['templates']['dataProvider'] = [
    // NOTE: Base Path is inside local vendor. We must therefore go out
    // of it.
    'source'        => 'snippets/provider.php.twig',

    'destination'   => [

        'postProcess'   => function($answer, array $previousAnswers){

            $type = $previousAnswers['dataType'];

            // Group
            switch ($type){
                case 'int':
                    $type = 'integer';
                    break;

                case 'bool':
                    $type = 'boolean';
                    break;

                default:
                    break;
            }

            $folder = \Illuminate\Support\Str::plural($type);

            return 'tests/_data/awareOf/' . $folder . '/' . lcfirst($previousAnswers['coreProperty']) . '.php';
        }
    ],
];

/* ------------------------------------------------------------
 | Finally, return the modified scaffold configuration
 * ------------------------------------------------------------ */
return $scaffold;