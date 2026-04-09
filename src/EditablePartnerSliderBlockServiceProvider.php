<?php

namespace GIS\EditablePartnerSliderBlock;

use GIS\EditableBlocks\Traits\ExpandBlocksTrait;
use GIS\EditablePartnerSliderBlock\Livewire\Admin\Types\SlidesWire;
use GIS\Fileable\Traits\ExpandTemplatesTrait;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class EditablePartnerSliderBlockServiceProvider extends ServiceProvider
{
    use ExpandBlocksTrait, ExpandTemplatesTrait;

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . "/config/editable-partner-slider-block.php", 'editable-partner-slider-block');
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . "/resources/views", "epsb");
        $this->addLivewireComponents();
        $this->expandConfiguration();
    }

    protected function addLivewireComponents(): void
    {
        $component = config("editable-partner-slider-block.customSlidesComponent");
        Livewire::component(
            "epsb-slides",
            $component ?? SlidesWire::class
        );
    }

    protected function expandConfiguration(): void
    {
        $epsb = app()->config["editable-partner-slider-block"];
        $this->expandTemplates($epsb);
        $this->expandBlocks($epsb);
    }
}
