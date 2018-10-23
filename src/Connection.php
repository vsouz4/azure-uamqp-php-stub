<?php

declare(strict_types=1);

namespace Azure\uAMQP;

class Connection
{
    /**
     * @param string $host
     * @param int    $port
     * @param bool   $useTls
     * @param string $keyName
     * @param string $key
     * @param bool   $debug
     */
    public function __construct(
        string $host,
        int $port,
        bool $useTls,
        string $keyName,
        string $key,
        bool $debug = false
    ) {
    }

    /**
     * @param string  $resourceName
     * @param Message $message
     *
     * @return void
     */
    public function publish(string $resourceName, Message $message): void
    {
    }

    /**
     * @param string   $resourceName
     * @param callable $callback
     * @param callable $loopFn
     *
     * @return void
     */
    public function setCallback(string $resourceName, callable $callback, callable $loopFn): void
    {
    }

    /**
     * @return void
     */
    public function consume(): void
    {
    }

    /**
     * @return void
     */
    public function close(): void
    {
    }
}
