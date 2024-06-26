<?php

declare(strict_types=1);

namespace SisLaravelMain\vendor\vlucas\phpdotenv\src\Store;

interface StoreInterface
{
    /**
     * Read the content of the environment file(s).
     *
     * @throws \Dotenv\Exception\InvalidEncodingException|\Dotenv\Exception\InvalidPathException
     *
     * @return string
     */
    public function read();
}
