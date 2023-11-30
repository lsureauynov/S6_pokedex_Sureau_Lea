<?php

namespace App\Core;

class View
{
    /**
     * @param array<mixed,mixed> $data
     */
    public function render(string $templateName, array $data): void
    {
        extract($data);
        require __DIR__ . "/../templates/$templateName.tpl.php";
    }
}
