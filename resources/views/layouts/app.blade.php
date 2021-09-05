<div class="site">
  <a
    class="site__skip-to-content"
    href="#main"
    id="skip-to-content"
  >{{ __('Skip to content', 'hds') }}</a>

  <header class="site__header" id="header">
    @php(do_action('get_header'))
    @include('partials.header')
  </header>

  <main
    id="main"
    class="site__content"
    @if (get_field('schema_org_is_faq_page'))
      itemscope
      itemtype="https://schema.org/FAQPage"
    @endif
  >
    @yield('content')
  </main>

  <footer class="site__footer">
    @include('partials.footer')
  </footer>
</div>
