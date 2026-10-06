### Установка

Добавить в `tailwind.admin.config.js`, созданный в пакете `tailwindcss-theme`.

    "./vendor/4geo35/editable-partner-slider-block/src/resources/views/livewire/admin/**/*.blade.php",
    "./vendor/4geo35/editable-partner-slider-block/src/resources/views/admin/**/*.blade.php",

Добавить в `tailwind.config.js`, созданный в пакете `tailwindcss-theme`.

    "./vendor/4geo35/editable-partner-slider-block/src/resources/views/components/**/*.blade.php",
    "./vendor/4geo35/editable-partner-slider-block/src/resources/views/web/**/*.blade.php",

Установить слайдер `npm install swiper`

Добавить в `app.js`:

    import Swiper from "swiper/bundle"
    import "swiper/css/bundle"
    window.Swiper = Swiper

Установить lightbox `npm install fslightbox`, добавить в `app.js`:

    import "fslightbox"

#### Views

Сокращение для представлений: `epsb`

#### Config

Название файла: `editable-partner-slider-block`  
Название типа блока: `partnerSlides`

- `sliderSpeed` => `env("EDITABLE_PARTNER_SLIDER_SPEED", "16000")`: скорость автоматического воспроизведения слайдера
