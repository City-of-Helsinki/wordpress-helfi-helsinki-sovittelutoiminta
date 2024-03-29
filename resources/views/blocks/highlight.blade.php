<div class="{{ esc_attr($block->classes) }}">
    <div class="wp-block-hds-highlight__columns">
        <div class="wp-block-hds-highlight__column icon-column">
            @if ($iconName)
                <div class="wp-block-hds-highlight__icon hds-icon hds-icon--{!! $iconName !!} has-{!! $iconColor !!}-color">
                </div>
            @endif
        </div>
        <div class="wp-block-hds-highlight__column body-column">
            @if ($heading)
                <h2 class="wp-block-hds-highlight__heading @if ($textColor) has-{!! $textColor !!}-color has-text-color @endif">
                    {!! wp_kses_post($heading) !!}
            </h2>
            @endif
            @if ($body)
                <div class="wp-block-hds-highlight__body @if ($textColor) has-{!! $textColor !!}-color has-text-color @endif">
                    {!! wp_kses_post($body) !!}
                </div>
            @endif
        </div>
        <div class="wp-block-hds-highlight__column button-column">
            @if ($linkText)
                <div class="wp-block-button is-style-outline wp-block-hds-highlight__button">
                    <a
                        class="wp-block-button__link @if ($textColor) has-{!! $textColor !!}-color has-text-color @endif"
                        href="{{ $linkUrl }}"
                        @if ( ! empty($isLinkExternal) )
                            aria-label="{{sprintf(__('%s (opens in new tab)', 'hds'), $linkText)}}"
                            target="_blank"
                        @endif
                    >
                        {{ $linkText }}
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>
