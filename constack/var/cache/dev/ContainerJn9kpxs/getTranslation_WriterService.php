<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'translation.writer' shared service.

$this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();

$instance->addDumper('php', ${($_ = isset($this->services['translation.dumper.php']) ? $this->services['translation.dumper.php'] : $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper()) && false ?: '_'});
$instance->addDumper('xlf', ${($_ = isset($this->services['translation.dumper.xliff']) ? $this->services['translation.dumper.xliff'] : $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper()) && false ?: '_'});
$instance->addDumper('po', ${($_ = isset($this->services['translation.dumper.po']) ? $this->services['translation.dumper.po'] : $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper()) && false ?: '_'});
$instance->addDumper('mo', ${($_ = isset($this->services['translation.dumper.mo']) ? $this->services['translation.dumper.mo'] : $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper()) && false ?: '_'});
$instance->addDumper('yml', ${($_ = isset($this->services['translation.dumper.yml']) ? $this->services['translation.dumper.yml'] : $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper()) && false ?: '_'});
$instance->addDumper('yaml', ${($_ = isset($this->services['translation.dumper.yaml']) ? $this->services['translation.dumper.yaml'] : $this->services['translation.dumper.yaml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper('yaml')) && false ?: '_'});
$instance->addDumper('ts', ${($_ = isset($this->services['translation.dumper.qt']) ? $this->services['translation.dumper.qt'] : $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper()) && false ?: '_'});
$instance->addDumper('csv', ${($_ = isset($this->services['translation.dumper.csv']) ? $this->services['translation.dumper.csv'] : $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper()) && false ?: '_'});
$instance->addDumper('ini', ${($_ = isset($this->services['translation.dumper.ini']) ? $this->services['translation.dumper.ini'] : $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper()) && false ?: '_'});
$instance->addDumper('json', ${($_ = isset($this->services['translation.dumper.json']) ? $this->services['translation.dumper.json'] : $this->services['translation.dumper.json'] = new \Symfony\Component\Translation\Dumper\JsonFileDumper()) && false ?: '_'});
$instance->addDumper('res', ${($_ = isset($this->services['translation.dumper.res']) ? $this->services['translation.dumper.res'] : $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper()) && false ?: '_'});

return $instance;