<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'liip_imagine.filter.manager' shared service.

$this->services['liip_imagine.filter.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Filter\FilterManager(${($_ = isset($this->services['liip_imagine.filter.configuration']) ? $this->services['liip_imagine.filter.configuration'] : $this->getLiipImagine_Filter_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['liip_imagine']) ? $this->services['liip_imagine'] : $this->load(__DIR__.'/getLiipImagineService.php')) && false ?: '_'}, ${($_ = isset($this->services['liip_imagine.binary.mime_type_guesser']) ? $this->services['liip_imagine.binary.mime_type_guesser'] : $this->load(__DIR__.'/getLiipImagine_Binary_MimeTypeGuesserService.php')) && false ?: '_'});

$instance->addLoader('relative_resize', ${($_ = isset($this->services['liip_imagine.filter.loader.relative_resize']) ? $this->services['liip_imagine.filter.loader.relative_resize'] : $this->services['liip_imagine.filter.loader.relative_resize'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\RelativeResizeFilterLoader()) && false ?: '_'});
$instance->addLoader('resize', ${($_ = isset($this->services['liip_imagine.filter.loader.resize']) ? $this->services['liip_imagine.filter.loader.resize'] : $this->services['liip_imagine.filter.loader.resize'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\ResizeFilterLoader()) && false ?: '_'});
$instance->addLoader('thumbnail', ${($_ = isset($this->services['liip_imagine.filter.loader.thumbnail']) ? $this->services['liip_imagine.filter.loader.thumbnail'] : $this->services['liip_imagine.filter.loader.thumbnail'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\ThumbnailFilterLoader()) && false ?: '_'});
$instance->addLoader('crop', ${($_ = isset($this->services['liip_imagine.filter.loader.crop']) ? $this->services['liip_imagine.filter.loader.crop'] : $this->services['liip_imagine.filter.loader.crop'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\CropFilterLoader()) && false ?: '_'});
$instance->addLoader('paste', ${($_ = isset($this->services['liip_imagine.filter.loader.paste']) ? $this->services['liip_imagine.filter.loader.paste'] : $this->load(__DIR__.'/getLiipImagine_Filter_Loader_PasteService.php')) && false ?: '_'});
$instance->addLoader('watermark', ${($_ = isset($this->services['liip_imagine.filter.loader.watermark']) ? $this->services['liip_imagine.filter.loader.watermark'] : $this->load(__DIR__.'/getLiipImagine_Filter_Loader_WatermarkService.php')) && false ?: '_'});
$instance->addLoader('background', ${($_ = isset($this->services['liip_imagine.filter.loader.background']) ? $this->services['liip_imagine.filter.loader.background'] : $this->load(__DIR__.'/getLiipImagine_Filter_Loader_BackgroundService.php')) && false ?: '_'});
$instance->addLoader('strip', ${($_ = isset($this->services['liip_imagine.filter.loader.strip']) ? $this->services['liip_imagine.filter.loader.strip'] : $this->services['liip_imagine.filter.loader.strip'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\StripFilterLoader()) && false ?: '_'});
$instance->addLoader('upscale', ${($_ = isset($this->services['liip_imagine.filter.loader.upscale']) ? $this->services['liip_imagine.filter.loader.upscale'] : $this->services['liip_imagine.filter.loader.upscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\UpscaleFilterLoader()) && false ?: '_'});
$instance->addLoader('downscale', ${($_ = isset($this->services['liip_imagine.filter.loader.downscale']) ? $this->services['liip_imagine.filter.loader.downscale'] : $this->services['liip_imagine.filter.loader.downscale'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\DownscaleFilterLoader()) && false ?: '_'});
$instance->addLoader('auto_rotate', ${($_ = isset($this->services['liip_imagine.filter.loader.auto_rotate']) ? $this->services['liip_imagine.filter.loader.auto_rotate'] : $this->services['liip_imagine.filter.loader.auto_rotate'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\AutoRotateFilterLoader()) && false ?: '_'});
$instance->addLoader('rotate', ${($_ = isset($this->services['liip_imagine.filter.loader.rotate']) ? $this->services['liip_imagine.filter.loader.rotate'] : $this->services['liip_imagine.filter.loader.rotate'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\RotateFilterLoader()) && false ?: '_'});
$instance->addLoader('interlace', ${($_ = isset($this->services['liip_imagine.filter.loader.interlace']) ? $this->services['liip_imagine.filter.loader.interlace'] : $this->services['liip_imagine.filter.loader.interlace'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\InterlaceFilterLoader()) && false ?: '_'});
$instance->addPostProcessor('jpegoptim', ${($_ = isset($this->services['liip_imagine.filter.post_processor.jpegoptim']) ? $this->services['liip_imagine.filter.post_processor.jpegoptim'] : $this->services['liip_imagine.filter.post_processor.jpegoptim'] = new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\JpegOptimPostProcessor('/usr/bin/jpegoptim')) && false ?: '_'});
$instance->addPostProcessor('optipng', ${($_ = isset($this->services['liip_imagine.filter.post_processor.optipng']) ? $this->services['liip_imagine.filter.post_processor.optipng'] : $this->services['liip_imagine.filter.post_processor.optipng'] = new \Liip\ImagineBundle\Imagine\Filter\PostProcessor\OptiPngPostProcessor('/usr/bin/optipng')) && false ?: '_'});

return $instance;
