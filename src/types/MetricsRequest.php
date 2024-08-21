<?php

namespace Kickplan\KickplanSdk\Types;

use \InvalidArgumentException;
use \DateTime;

class MetricsRequest
{
    private string $key;
    private string $accountKey;
    private $value; // This can be boolean, string, number, or array
    private ?DateTime $time;
    private ?string $idempotencyKey;

    /**
     * Constructor.
     *
     * @param array $data Associative array where 'key', 'account_key' are required,
     *                    and other key-value pairs are optional.
     *
     * @throws InvalidArgumentException if 'key' or 'account_key' is missing or invalid.
     */
    public function __construct(array $data)
    {
        if (empty($data["key"]) || !is_string($data["key"])) {
            throw new InvalidArgumentException(
                "The key must be provided and must be a string."
            );
        }

        if (empty($data["account_key"]) || !is_string($data["account_key"])) {
            throw new InvalidArgumentException(
                "The account_key must be provided and must be a string."
            );
        }

        if (!isset($data["value"])) {
            throw new InvalidArgumentException(
                "The value must be provided and cannot be null."
            );
        }

        $this->key = $data["key"];
        $this->accountKey = $data["account_key"];
        $this->value = $data["value"];

        if (isset($data["time"])) {
            if ($data["time"] instanceof DateTime) {
                $this->time = $data["time"];
            } elseif (is_string($data["time"])) {
                try {
                    $this->time = new DateTime($data["time"]);
                } catch (\Exception $e) {
                    throw new InvalidArgumentException(
                        "The time provided is not a valid DateTime string."
                    );
                }
            } else {
                throw new InvalidArgumentException(
                    "The time must be a DateTime object or a valid DateTime string."
                );
            }
        } else {
            $this->time = null;
        }

        $this->idempotencyKey = $data["idempotency_key"] ?? null;
    }

    /**
     * Convert the object to an associative array.
     *
     * @return array
     */
    public function toArray(): array
    {
        $array = [
            "key" => $this->key,
            "account_key" => $this->accountKey,
            "value" => $this->value,
        ];

        if ($this->time !== null) {
            $array["time"] = $this->time->format(DateTime::ISO8601);
        }

        if ($this->idempotencyKey !== null) {
            $array["idempotency_key"] = $this->idempotencyKey;
        }

        return $array;
    }
}
