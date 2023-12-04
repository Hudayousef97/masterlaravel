@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-white-600">{{ __('Whoops! Something went wrong.') }}</div>

        <ul class="mt-3 list-disc list-inside text-lg text-white-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
