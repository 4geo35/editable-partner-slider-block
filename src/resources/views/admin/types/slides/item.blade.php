<div class="px-indent-half w-[244px]">
    @if ($item->recordable->image)
        @php($image = $item->recordable->image)
        <a target="_blank" href="{{ route('thumb-img', ['template' => 'original', 'filename' => $image->file_name]) }}"
           class="block rounded-base overflow-hidden min-h-[116px]">
            <img
                class="h-full object-cover object-center"
                src="{{ route('thumb-img', ['template' => 'partner-slider-item', 'filename' => $image->file_name]) }}"
                alt="">
        </a>
    @endif
    <div class="mt-indent-sm">{{ $item->title }}</div>
</div>
