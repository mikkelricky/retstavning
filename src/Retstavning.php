<?php

namespace mikkelricky\retstavning;

abstract class Retstavning {
    public abstract function fixTypos(string $text): string;
}
