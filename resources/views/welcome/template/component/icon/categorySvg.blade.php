@php $style = (empty($size)) ? null : 'style=font-size:'.$size.'rem;' ; @endphp

@switch($category->icon)
    @case('institution') <div class="icon"><i class="bi bi-buildings" {{ $style }}></i></div> @break
    @case('administrator') <div class="icon"><i class="bi bi-building-gear" {{ $style }}></i></div> @break
    @case('success') <div class="icon"><i class="bi bi-bookmark-check" {{ $style }}></i></div> @break
    @case('info') <div class="icon"><i class="bi bi-info-circle-fill" {{ $style }}></i></div> @break
    @case('warning') <div class="icon"><i class="bi bi-exclamation-circle" {{ $style }}></i></div> @break
    @case('light') <div class="icon"><i class="bi bi-file" {{ $style }}></i></div> @break
    @case('dark') <div class="icon"><i class="bi bi-file-earmark-fill" {{ $style }}></i></div> @break
    @default <div class="icon"><i class="bx bx-fingerprint" {{ $style }}></i></div>
@endswitch
