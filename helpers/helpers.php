<?php

if (! function_exists('generate_faker_method')) {

    /**
     * Generates the method name to be invoked on
     * a faker instance
     *
     * @param string $type
     *
     * @return string
     */
    function generate_faker_method($type){

        // @see vendor\aedart\scaffold-bundle\awareofcomponent.scaffold.php :: dataType
        switch ($type){
            case 'int':
            case 'integer':
                $output = 'randomNumber($faker->randomDigitNotNull)';
                break;

            case 'int[]':
                $output = 'shuffleArray([$faker->randomDigitNotNull, $faker->randomDigitNotNull, $faker->randomDigitNotNull])';
                break;

            case 'bool':
            case 'boolean':
                $output = 'boolean()';
                break;

            case 'bool[]':
                $output = 'shuffleArray([$faker->boolean(), $faker->boolean(), $faker->boolean()])';
                break;

            case 'float':
            case 'double':
            case 'real':
                $output = 'randomFloat($faker->randomDigitNotNull)';
                break;

            case 'float[]':
                $output = 'shuffleArray([$faker->randomFloat(), $faker->randomFloat(), $faker->randomFloat()])';
                break;

            case 'string[]':
            case 'array':
                $output = 'words($faker->randomDigitNotNull)';
                break;

            case 'mixed':
                $output = 'randomElement([$faker->word, $faker->uuid, $faker->randomNumber(), $faker->paragraphs()])';
                break;

            case 'mixed[]':
                $output = 'shuffleArray([$faker->word, $faker->uuid, $faker->randomNumber(), $faker->paragraphs()])';
                break;

            case 'string':
            default:
                $output = 'word';
                break;
        }

        return $output;
    }
}