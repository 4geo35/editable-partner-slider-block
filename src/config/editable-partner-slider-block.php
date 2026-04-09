<?php

return [
    "availableTypes" => [
        "partnerSlides" => [
            "title" => env("EDITABLE_PARTNER_SLIDER_TITLE", "Слайдер"),
            "admin" => "epsb-slides",
            "render" => "epsb::types.slides",
        ],
    ],

    "sliderSpeed" => env("EDITABLE_PARTNER_SLIDER_SPEED", "16000"),

    // Components
    "customSlidesComponent" => null,

    // Templates
    "templates" => [
        "partner-slider-item" => \GIS\EditablePartnerSliderBlock\Templates\PartnerSliderItem::class,
    ],
];
