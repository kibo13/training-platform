<nav id="sidebar" class="sidebar">
    <div class="sidebar-header">
        <div class="sidebar-logo">
            <a class="sidebar-logo__link" href="{{ route('admin.home') }}">
                <img class="sidebar-logo__icon"
                     src="{{ asset('assets/icons/logo.png') }}"
                     alt="{{ __('logotype') }}"
                     title="{{ __('_section.cabinet') }}">
                <span class="sidebar-logo__text">
                    {{ __('_section.cabinet') }}
                </span>
            </a>
        </div>
    </div>
    <ul class="sidebar-list">
        <li class="sidebar-list__item {{ is_active('admin.home', 'sidebar-list__item--active') }}">
            <a class="sidebar-list__link"
               href="{{ route('admin.home') }}"
               title="{{ __('_section.home') }}">
                {{ @fa('fa-home sidebar-list__icon') }}
                <span class="sidebar-list__text">
                    {{ __('_section.home') }}
                </span>
            </a>
        </li>
    </ul>
</nav>
