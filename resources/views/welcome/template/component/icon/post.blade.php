@php

$font_size = (empty($size)) ? null : 'font-size:'.$size.'rem;' ;
$color = (empty($color)) ? null : 'color:'.$color.';' ;

$style = 'style='.$font_size.$color;

@endphp

@switch($post->icon)
    @case('primary') <div class="icon"><i class="bi bi-app" {{ $style }}></i></div> @break
    @case('secondary') <div class="icon"><i class="bi bi-app-indicator" {{ $style }}></i></div> @break
    @case('success') <div class="icon"><i class="bi bi-bookmark-check" {{ $style }}></i></div> @break
    @case('info') <div class="icon"><i class="bi bi-info-circle-fill" {{ $style }}></i></div> @break
    @case('warning') <div class="icon"><i class="bi bi-exclamation-circle" {{ $style }}></i></div> @break
    @case('light') <div class="icon"><i class="bi bi-file" {{ $style }}></i></div> @break
    @case('dark') <div class="icon"><i class="bi bi-file-earmark-fill" {{ $style }}></i></div> @break
    @default <div class="icon"><i class="bx bx-fingerprint" {{ $style }}></i></div>
@endswitch
