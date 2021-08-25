<?php

declare(strict_types=1);

namespace Pndx\SeoPusher\Pusher;

abstract class Pusher
{
    /**
     * @var string[] $urls
     * @description 推送网址
     */
    protected $urls;

    /**
     * @var string $api
     * @description 推送接口地址
     */
    protected $api;

    /**
     * Pusher constructor.
     *
     * @param string $api
     */
    public function __construct(string $api)
    {
        $this->api  = $api;
    }

    /**
     * @return string[]
     */
    protected function getUrls(): array
    {
        return $this->urls;
    }

    /**
     * @param string[] $urls
     */
    protected function setUrls(array $urls): void
    {
        $this->urls = $urls;
    }

    /**
     * @return string
     */
    protected function getApi(): string
    {
        return $this->api;
    }

    public function push(array $urls)
    {
        $this->setUrls($urls);
        return $this->send();
    }

    abstract protected function send();
}