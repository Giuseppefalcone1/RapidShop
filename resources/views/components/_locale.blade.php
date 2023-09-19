<form class="d-inline" method="POST" action="{{ route('set_language_locale', $lang) }}">
    @csrf
    <button type="submit" class="btn">
        <img src="{{ asset('vendor/blade-flags/language-' . $lang . '.svg') }}" width="32" height="32">
    </button>
</form>