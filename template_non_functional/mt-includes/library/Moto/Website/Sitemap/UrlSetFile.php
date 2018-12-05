<?php
namespace Moto\Website\Sitemap; use Moto; class UrlSetFile extends AbstractFile { const PARENT_NODE_NAME = 'url'; protected function _generateHeader() { return '<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
         xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd"
         xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
'; } protected function _generateFooter() { return '</urlset>'; } } 