<?php

// This file is generated, manual changes will be lost - read more on https://github.com/algolia/api-clients-automation.

namespace Algolia\AlgoliaSearch\Model\Recommend;

/**
 * MatchLevel Class Doc Comment
 *
 * @category Class
 * @description Indicates how well the attribute matched the search query.
 *
 * @package Algolia\AlgoliaSearch
 */
class MatchLevel
{
    /**
     * Possible values of this enum
     */
    const NONE = 'none';

    const PARTIAL = 'partial';

    const FULL = 'full';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [self::NONE, self::PARTIAL, self::FULL];
    }
}
