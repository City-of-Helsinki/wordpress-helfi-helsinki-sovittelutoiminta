<div class="type-{{ $post->post_type }} {{ $post->post_type }}-teaser layout-{{ $layout ?? 'vertical' }}">
  @if (get_the_post_thumbnail($post))
    <x-image>
      {!! get_the_post_thumbnail($post, 'post-thumbnail', ['sizes' => '(max-width: 640px) 100vw, (max-width: 1024px) 33vw, 216px']) !!}
    </x-image>
  @endif

  <ul>
    <li class="person-teaser__name">
      <h3>{!! get_the_title($post) !!}</h3>
    </li>
      @if ($post->email)
        <li class="person-teaser__email">
          <a href="mailto:{{ $post->email }}">{{ $post->email }}</a>
        </li>
      @endif
      @if ($post->telephone)
        <li class="person-teaser__telephone">
          <a href="tel:{{ $post->telephone }}">{{ $post->telephone }}</a>
        </li>
      @endif
      @if ($post->description)
        <li class="person-teaser__description">{!! nl2br($post->description) !!}</li>
      @endif
    </ul>
</div>
