<div
  class="{{ esc_attr($block->classes) }}"
  itemscope
  itemprop="mainEntity"
  itemtype="https://schema.org/Question"
>
  <div
    class="wp-block-hds-question-and-answer__question"
    itemprop="name"
  >
    {{ $question }}
  </div>
  <div
    class="wp-block-hds-question-and-answer__answer"
    itemscope
    itemprop="acceptedAnswer"
    itemtype="https://schema.org/Answer"
  >
    <div itemprop="text">
      {!! $content !!}
    </div>
  </div>
</div>
