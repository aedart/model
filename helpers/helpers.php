<?php

/* ------------------------------------------------------------
 | Configuration
 * ------------------------------------------------------------ */

/**
 * Location of scaffold
 */
const SCAFFOLD_LOCATION = __DIR__ . '/../modelawareofcomponent.scaffold.php';

/**
 * Output location
 */
const OUTPUT = __DIR__ . '/../temp/';

/**
 * Author and Email
 */
const AUTHOR = 'Alin Eugen Deac';
const EMAIL = 'aedart@gmail.com';

/**
 * Scalar data types
 */
const ARRAY_TYPE = 'array';
const STRING_TYPE = 'string';
const CALLABLE_TYPE = 'callable';
const FLOAT_TYPE = 'float';
const INT_TYPE = 'int';
const BOOL_TYPE = 'bool';
const ITERABLE_TYPE = 'iterable';

/**
 * Predefined (sub)namespaces, within the main
 * package.
 */
const STRING_TRAIT_NAMESPACE = 'Traits\\Strings';
const STRING_INTERFACE_NAMESPACE = 'Contracts\\Strings';
const INTEGER_TRAIT_NAMESPACE = 'Traits\\Integers';
const INTEGER_INTERFACE_NAMESPACE = 'Contracts\\Integers';
const ARRAY_TRAIT_NAMESPACE = 'Traits\\Arrays';
const ARRAY_INTERFACE_NAMESPACE = 'Contracts\\Arrays';
const BOOLEAN_TRAIT_NAMESPACE = 'Traits\\Booleans';
const BOOLEAN_INTERFACE_NAMESPACE = 'Contracts\\Booleans';
const FLOAT_TRAIT_NAMESPACE = 'Traits\\Floats';
const FLOAT_INTERFACE_NAMESPACE = 'Contracts\\Floats';

/* ------------------------------------------------------------
 | Global Methods
 * ------------------------------------------------------------ */

if( ! function_exists('floatComponent')){

    /**
     * Returns a float component configuration array
     *
     * @see awareOfComponent()
     *
     * @param string $property
     * @param string $description
     * @param string $inputArgName [optional]
     * @param string $outputLocation [optional]
     *
     * @return array
     */
    function floatComponent(
        string $property,
        string $description,
        string $inputArgName = 'value',
        string $outputLocation = OUTPUT
    ) : array
    {
        return awareOfComponent(
            $property,
            $description,
            FLOAT_TYPE,
            $inputArgName,
            BOOLEAN_TRAIT_NAMESPACE,
            BOOLEAN_INTERFACE_NAMESPACE,
            $outputLocation
        );
    }
}

if( ! function_exists('booleanComponent')){

    /**
     * Returns a boolean component configuration array
     *
     * @see awareOfComponent()
     *
     * @param string $property
     * @param string $description
     * @param string $inputArgName [optional]
     * @param string $outputLocation [optional]
     *
     * @return array
     */
    function booleanComponent(
        string $property,
        string $description,
        string $inputArgName = 'value',
        string $outputLocation = OUTPUT
    ) : array
    {
        return awareOfComponent(
            $property,
            $description,
            BOOL_TYPE,
            $inputArgName,
            BOOLEAN_TRAIT_NAMESPACE,
            BOOLEAN_INTERFACE_NAMESPACE,
            $outputLocation
        );
    }
}

if( ! function_exists('arrayComponent')){

    /**
     * Returns a array component configuration array
     *
     * @see awareOfComponent()
     *
     * @param string $property
     * @param string $description
     * @param string $inputArgName [optional]
     * @param string $outputLocation [optional]
     *
     * @return array
     */
    function arrayComponent(
        string $property,
        string $description,
        string $inputArgName = 'value',
        string $outputLocation = OUTPUT
    ) : array
    {
        return awareOfComponent(
            $property,
            $description,
            ARRAY_TYPE,
            $inputArgName,
            ARRAY_TRAIT_NAMESPACE,
            ARRAY_INTERFACE_NAMESPACE,
            $outputLocation
        );
    }
}

if( ! function_exists('stringComponent')){

    /**
     * Returns a string component configuration array
     *
     * @see awareOfComponent()
     *
     * @param string $property
     * @param string $description
     * @param string $inputArgName [optional]
     * @param string $outputLocation [optional]
     *
     * @return array
     */
    function stringComponent(
        string $property,
        string $description,
        string $inputArgName = 'value',
        string $outputLocation = OUTPUT
    ) : array
    {
        return awareOfComponent(
            $property,
            $description,
            STRING_TYPE,
            $inputArgName,
            STRING_TRAIT_NAMESPACE,
            STRING_INTERFACE_NAMESPACE,
            $outputLocation
        );
    }
}

if( ! function_exists('integerComponent')){

    /**
     * Returns a integer component configuration array
     *
     * @see awareOfComponent()
     *
     * @param string $property
     * @param string $description
     * @param string $inputArgName [optional]
     * @param string $outputLocation [optional]
     *
     * @return array
     */
    function integerComponent(
        string $property,
        string $description,
        string $inputArgName = 'value',
        string $outputLocation = OUTPUT
    ) : array
    {
        return awareOfComponent(
            $property,
            $description,
            INT_TYPE,
            $inputArgName,
            INTEGER_TRAIT_NAMESPACE,
            INTEGER_INTERFACE_NAMESPACE,
            $outputLocation
        );
    }
}

if( ! function_exists('awareOfComponent')){

    /**
     * Returns an array of configuration for a "scaffold build:file" command
     *
     * @param string $property
     * @param string $description
     * @param string $dataType [optional] Scalar type
     * @param string $inputArgName [optional]
     * @param string $traitNamespace [optional]
     * @param string $interfaceNamespace [optional]
     * @param string $outputLocation [optional]
     *
     * @return array
     */
    function awareOfComponent(
        string $property,
        string $description,
        string $dataType = STRING_TYPE,
        string $inputArgName = 'value',
        string $traitNamespace = STRING_TRAIT_NAMESPACE,
        string $interfaceNamespace = STRING_INTERFACE_NAMESPACE,
        string $outputLocation = OUTPUT
    ) : array
    {
        return [
            'location'  => SCAFFOLD_LOCATION,
            'output'    => $outputLocation,
            'input'     => [
                // Property name
                $property,

                // Data Type
                $dataType,

                // Description
                $description,

                // Input arg. name
                $inputArgName,

                // Trait namespace
                $traitNamespace,

                // Interface namespace
                $interfaceNamespace,

                // Author
                AUTHOR,

                // Email
                EMAIL
            ]
        ];
    }
}

if (! function_exists('generate_faker_method')) {

    /**
     * Generates the method name to be invoked on
     * a faker instance
     *
     * @param string $type
     *
     * @return string
     */
    function generate_faker_method($type)
    {
        // @see vendor\aedart\scaffold-bundle\awareofcomponent.scaffold.php :: dataType
        switch ($type){
            case INT_TYPE:
                $output = 'randomNumber($faker->randomDigitNotNull)';
                break;

            case BOOL_TYPE:
                $output = 'boolean()';
                break;

            case FLOAT_TYPE:
                $output = 'randomFloat($faker->randomDigitNotNull)';
                break;

            case ARRAY_TYPE:
                $output = 'words($faker->randomDigitNotNull)';
                break;

            case STRING_TYPE:
            default:
                $output = 'word';
                break;
        }

        return $output;
    }
}