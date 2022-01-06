<?php

namespace Swaggest\JsonSchema\Tests\Helper;


use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;

class LevelThreeClass extends ClassStructure
{
    /**
     * @var int
     */
    public $level3;

    /**
     * @param Properties $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->level3 = Schema::integer();
        $ownerSchema->setFromRef(false);
    }


}