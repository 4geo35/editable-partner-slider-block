<?php

namespace GIS\EditablePartnerSliderBlock\Templates;

use Intervention\Image\Interfaces\ImageInterface;
use Intervention\Image\Interfaces\ModifierInterface;

class PartnerSliderItem implements ModifierInterface
{
    public function apply(ImageInterface $image): ImageInterface
    {
        return $image->pad(220, 116, position: 'center');
    }
}
