<?php

declare(strict_types=1);

namespace Pndx\SeoPusher\Pusher;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Pndx\SeoPusher\Config\Config;
use GuzzleHttp\Exception\GuzzleException;
use Pndx\SeoPusher\Exception\PushFailedException;

class PusherBaidu extends Pusher
{
    public function __construct(string $site)
    {
        parent::__construct("http://data.zz.baidu.com/urls?site={$site}&token=" . Config::BAIDU_TOKEN);
    }

    protected function send(): string
    {
        try {
            $response = (new Client(['headers' => ['Content-Type: text/plain']]))
                    ->send(new Request('POST', $this->getApi()), [
                            'body' => implode("\n", $this->getUrls()),
                    ]);

            $decodedResponse = json_decode($response->getBody()->getContents(), true);
            if ((bool)$decodedResponse['success'] !== true) {
                throw new PushFailedException('百度推送失败:' . json_encode($this->getUrls()));
            }

            return sprintf("百度推送成功%d条, 今日还可推送:%d条", $decodedResponse['success'], $decodedResponse['remain']);
        } catch (GuzzleException | PushFailedException $exception) {
            return $exception->getMessage();
        }
    }
}