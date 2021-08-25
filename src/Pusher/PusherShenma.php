<?php

declare(strict_types=1);

namespace Pndx\SeoPusher\Pusher;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Pndx\SeoPusher\Config\Config;
use GuzzleHttp\Exception\GuzzleException;
use Pndx\SeoPusher\Exception\PushFailedException;

class PusherShenma extends Pusher
{
    public function __construct(string $site)
    {
        $api = sprintf(
                "https://data.zhanzhang.sm.cn/push?site=%s&user_name=%s&resource_name=mip_add&token=%s",
                $site, Config::SHENMA_USERNAME, Config::SHENMA_TOKEN
        );

        parent::__construct($api);
    }

    protected function send(): string
    {
        try {
            $response = (new Client(['headers' => ['Content-Type: text/plain']]))
                    ->send(new Request('POST', $this->getApi()), [
                            'body' => implode("\n", $this->getUrls()),
                    ]);

            $decodedResponse = json_decode($response->getBody()->getContents(), true);
            if ($decodedResponse['returnCode'] !== 200) {
                throw new PushFailedException('神马推送失败:' . $decodedResponse['errorMsg']);
            }

            return sprintf("神马推送成功%d条", count($this->getUrls()));
        } catch (GuzzleException | PushFailedException $exception) {
            return $exception->getMessage();
        }
    }
}