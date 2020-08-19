@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
@else
@if ($level === 'error')
# @lang('Whoops!')
@else
# @lang('Chào bạn, ')
@endif
@endif

{{-- Intro Lines --}}
@foreach ($introLines as $line)
{{ $line }}

@endforeach

{{-- Action Button --}}
@isset($actionText)
<?php
    switch ($level) {
        case 'success':
        case 'error':
            $color = $level;
            break;
        default:
            $color = 'primary';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
{{ $actionText }}
@endcomponent
@endisset

{{-- Outro Lines --}}
@foreach ($outroLines as $line)
{{ $line }}

@endforeach

{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else
@lang('Trân trọng'),<br>
Công ty TNHH MTV <b>Enjoy Travel Vietnam</b>
<br>
<span><a style="text-decoration: none; color: rgb(2, 2, 2)" href="tel:0366908087">0366 908 087</a></span>
<br>
<a style="text-decoration: none; color: rgb(2, 2, 2)" href="mailto:vnenjoytravel@gmail.com">vnenjoytravel@gmail.com</a>
<br>
<b><a style="text-decoration: none; color: rgb(2, 2, 2)" href="https://goo.gl/maps/d1Qqd3z3QcDUhsSv6">101B Lê Hữu Trác, Phước Mỹ, Sơn Trà, Đà Nẵng</a></b>

@endif

@endcomponent
