<?php

namespace src\Models;

final class User
{
    public function __construct(
        public int $id,
        public string $email,
        public string $password
    ) {}
}
