<?php
/**
 * Created by PhpStorm.
 * User: igomis
 * Date: 2020-07-02
 * Time: 23:56
 */

namespace Tests;


class TestCase extends \Orchestra\Testbench\TestCase
{

    protected function getPackageProviders($app)
    {
        return ['Batoi\ModalServiceProvider'];
    }

    protected function assertTemplateRenders($expectedHtml, $actualTemplate)
    {
        $this->makeTemplate($actualTemplate)
            ->assertRender($expectedHtml);
    }

    protected function makeTemplate($actualTemplate): Template
    {
        return $this->app[Template::class]->setContent($actualTemplate);
    }
}