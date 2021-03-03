<?php

declare(strict_types=1);

namespace B13\SiteT3demo;

/*
 * This file is part of TYPO3 CMS-extension site_t3demo by b13.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 */

/**
 * Demo project has specific backend layouts based on the page type,
 * which is mapped in here.
 */
class PageConfiguration
{
    public const DOKTYPE_CONTENTPAGE = 1;
    public const DOKTYPE_STARTPAGE = 10;
    public const DOKTYPE_APPLE = 11;
    public const DOKTYPE_RECIPE = 12;
    public const DOKTYPE_OVERVIEW = 13;
    public const DOKTYPE_CONTACTPAGE = 14;

    protected array $backendLayoutMapping = [
        self::DOKTYPE_CONTENTPAGE => 'pagets__Contentpage',
        self::DOKTYPE_STARTPAGE => 'pagets__Startpage',
        self::DOKTYPE_APPLE => 'pagets__Applepage',
        self::DOKTYPE_RECIPE => 'pagets__Recipepage',
        self::DOKTYPE_OVERVIEW => 'pagets__Overviewpage',
        self::DOKTYPE_CONTACTPAGE => 'pagets__Contactform'
    ];

    public function getBackendLayout(int $doktype): string
    {
        if (empty($this->backendLayoutMapping[$doktype])) {
            throw new \Exception('No backend layout mapping for doktype ' . $doktype, 1553253111);
        }
        return $this->backendLayoutMapping[$doktype];
    }
}
