<?php

namespace Kickplan\KickplanSDK\Types;

class AccountRequest
{
    private string $key;
    private array $data;

    /**
     * Constructor.
     *
     * @param array $data Associative array where 'key' is required, and other key-value pairs are optional.
     *
     * @throws \InvalidArgumentException if 'key' is missing or if 'key' is not a string.
     */
    public function __construct(array $data)
    {
        if (empty($data['key']) || !is_string($data['key'])) {
            throw new \InvalidArgumentException('The key must be provided and must be a string.');
        }

        $this->key = $data['key'];
        unset($data['key']);  // Remove 'key' from the array to store the rest as additional data
        $this->data = $data;
    }

    /**
     * Convert the object to an associative array.
     *
     * @return array
     */
    public function toArray(): array
    {
        return array_merge(['key' => $this->key], $this->data);
    }
}
