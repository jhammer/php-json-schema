<?php

namespace Swaggest\JsonSchema\Structure;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;

interface ClassStructureContract extends ObjectItemContract
{
    /**
     * @param Properties $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties(Properties $properties, Schema $ownerSchema);
}