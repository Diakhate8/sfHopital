<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.0rWuTMu' shared service.

return $this->privates['.service_locator.0rWuTMu'] = new \Symfony\Component\DependencyInjection\ServiceLocator(['repos' => function (): \App\Repository\SpecialitesRepository {
    return ($this->privates['App\\Repository\\SpecialitesRepository'] ?? $this->load('getSpecialitesRepositoryService.php'));
}]);
