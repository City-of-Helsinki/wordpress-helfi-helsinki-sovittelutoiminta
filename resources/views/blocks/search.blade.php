<div class="wp-block-hds-search">
  <div class="wp-block-hds-search__heading">
    {{ __('What are you looking for?', 'hds') }}
  </div>
  <form action="{{ home_url('/') }}" method="get" role="search">
    <input
      type="search"
      name="s"
      placeholder="{{ __('Search for something', 'hds') }}"
    />

    <button type="submit">
      @svg('images/icons/search.svg', '', ['width' => 24, 'height' => 24])
      <span class="sr-only">{{ __('Search for something', 'hds') }}</span>
    </button>
  </form>
</div>
