@if ($errors->any())
    <div class="" style="font-weight: bold; font-color: red;">
        <div class="">
            {{ __('Whoops! Something went wrong.') }}
        </div>

        <ul class="">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif