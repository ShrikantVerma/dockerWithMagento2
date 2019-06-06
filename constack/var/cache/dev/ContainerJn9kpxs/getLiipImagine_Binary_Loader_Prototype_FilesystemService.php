<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'liip_imagine.binary.loader.prototype.filesystem' shared service.

return $this->services['liip_imagine.binary.loader.prototype.filesystem'] = new \Liip\ImagineBundle\Binary\Loader\FileSystemLoader(${($_ = isset($this->services['liip_imagine.mime_type_guesser']) ? $this->services['liip_imagine.mime_type_guesser'] : $this->load(__DIR__.'/getLiipImagine_MimeTypeGuesserService.php')) && false ?: '_'}, ${($_ = isset($this->services['liip_imagine.extension_guesser']) ? $this->services['liip_imagine.extension_guesser'] : $this->load(__DIR__.'/getLiipImagine_ExtensionGuesserService.php')) && false ?: '_'}, '');
