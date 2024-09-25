@props(['employer', 'width' => 150])

<img src="{{ asset('storage/' . $employer->logo) }}" alt="" class="rounded-xl" width="{{ $width }}">
