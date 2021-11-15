@props(['status'])
@if($status == 'success')
    <div class="px-4 py-3 leading-normal text-gray-700 bg-green-100 rounded-lg" role="alert">
        <p>{{ $slot }}</p>
    </div>
@endif
@if($status == 'error')
    <div class="px-4 py-3 leading-normal text-red-700 bg-red-100 rounded-lg" role="alert">
        <p>{{ $slot }}</p>
    </div>
@endif
