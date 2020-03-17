<?php
/**
 * Created by PhpStorm.
 * User: kazu22002
 * Date: 2020-03-17
 * Time: 21:20
 */

namespace App\Domain\Entity\User;

class UserId implements \JsonSerializable
{
    /** @var integer */
    private $value;

    public function __construct(?int $value)
    {
        $this->value = $value;
    }

    public function value(): ?int
    {
        return $this->value;
    }

    public function isNull(): bool{
        return is_null($this->value);
    }

    public function equals(self $int)
    {
        return $this->value === $int->value;
    }

    public function jsonSerialize()
    {
        return $this->value;
    }
}
