<div>
    @if ($item->recordable->image)
        @php($image = $item->recordable->image)
        <a target="_blank" href="{{ route('thumb-img', ['template' => 'original', 'filename' => $image->file_name]) }}"
           class="block rounded-base overflow-hidden">
            Image
        </a>
    @endif
    <div class="mt-indent-sm">{{ $item->title }}</div>
</div>
