<?php

declare(strict_types=1);

namespace Azure\uAMQP;

class Message
{
    /**
     * @param string $body
     */
    public function __construct(string $body)
    {
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
    }

    /**
     * @param string $key
     * @param string $type
     *
     * @return mixed
     */
    public function getApplicationProperty(string $key, string $type)
    {
    }

    /**
     * @param string $key
     * @param string $type
     * @param mixed  $value
     *
     * @return void
     */
    public function setApplicationProperty(string $key, string $type, $value): void
    {
    }

    /**
     * @param string $key
     * @param string $type
     *
     * @return mixed
     */
    public function getMessageAnnotation(string $key, string $type)
    {
    }

    /**
     * @param string $key
     * @param string $type
     * @param mixed  $value
     *
     * @return void
     */
    public function setMessageAnnotation(string $key, string $type, $value): void
    {
    }
}
