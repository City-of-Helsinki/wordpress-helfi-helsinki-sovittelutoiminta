<a
  class="hds-link @if ($isCompact) compact @endif"
  href="{{ $url }}"
  @if ($isExternal || $isTel)
    target="_blank"
  @endif
  @if ($isExternal)
    aria-label="{{sprintf(__('%s (opens in new tab)', 'hds'), $text)}}"
  @endif
>
  <div class="
    hds-link__icon
    hds-icon
    @if ($isTel)
      hds-icon--phone
      hds-link__icon--tel
    @elseif ($isExternal)
      hds-icon--link-external
      hds-link__icon--external
    @else
      hds-icon--arrow-right
      hds-link__icon--internal
    @endif
  "></div>
  {!! wp_kses_post($text) !!}
</a>
