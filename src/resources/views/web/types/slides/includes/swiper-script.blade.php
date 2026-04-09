@push("scripts")
    <script type="application/javascript">
        (function () {
            document.addEventListener("DOMContentLoaded", function () {
                const sliderElement = document.getElementById("swiperBlockPartnerSlider-{{ $block->id }}")
                if (sliderElement) { initBlockPartnerSliderSliders{{ $block->id }}(sliderElement); }
            })
        })()

        function initBlockPartnerSliderSliders{{ $block->id }}(sliderElement) {
            let swiper = new Swiper(sliderElement, {
                loop: true,
                simulateTouch: true,
                spaceBetween: 0,
                slidesPerView: "auto",

                speed: {{ config("editable-partner-slider-block.sliderSpeed") }},
                autoplay: {
                    delay: 0,
                    disableOnInteraction: false,
                },
            })
        }
    </script>
@endpush
