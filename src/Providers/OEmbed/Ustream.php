<?php

namespace Embed\Providers\OEmbed;

class Ustream extends EndPoint implements EndpointInterface
{
    protected static $pattern = 'https?://www.ustream.tv/*';
    protected static $endpoint = 'http://www.ustream.tv/oembed';
}