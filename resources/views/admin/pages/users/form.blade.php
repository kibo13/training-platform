@extends('admin.index')
@section('title-admin', __('_section.users'))
@section('content-admin')
    <section id="users-form" class="overflow-auto">
        <h3>{{ isset($user) ? __('_record.edit') : __('_record.new') }}</h3>

        <form class="bk-form"
              action="{{ isset($user) ? route('admin.users.update', $user) : route('admin.users.store') }}"
              method="POST">
            <div class="bk-form__wrapper">
                @csrf
                @isset($user) @method('PUT') @endisset

                <!-- name -->
                <div class="bk-form__field">
                    <label class="bk-form__label" for="name">
                        Логин {{ mandatory() }}
                    </label>
                    <input class="bk-form__input bk-max-w-300"
                           id="name"
                           type="text"
                           name="name"
                           value="{{ isset($user) ? $user->name : null }}"
                           placeholder="Логин"
                           required
                           autocomplete="off"/>
                </div>

                <!-- email -->
                <div class="bk-form__field">
                    <label class="bk-form__label" for="email">
                        Почта {{ mandatory() }}
                    </label>
                    <input class="bk-form__input bk-max-w-300 @error('email') border-danger @enderror"
                           id="email"
                           type="email"
                           name="email"
                           value="{{ isset($user) ? $user->email : null }}"
                           placeholder="username@example.com"
                           required
                           autocomplete="off"/>
                    @error('email')
                    <span class="bk-validation">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- role -->
                <div class="bk-form__field">
                    <label class="bk-form__label" for="role">
                        Роль {{ mandatory() }}
                    </label>
                    <select class="bk-form__select bk-max-w-300" id="role" name="role_id" required>
                        <option value="" disabled selected>{{ __('_select.role') }}</option>
                        @foreach($roles as $role)
                        <option value="{{ $role->id }}" data-slug="{{ $role->slug }}"
                                @isset($user) @if($user->role_id == $role->id) selected @endif @endisset>
                            {{ $role->name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <!-- password -->
                <div class="bk-form__field">
                    <label class="bk-form__label" for="password">
                        Пароль
                    </label>
                    <input class="bk-form__input bk-max-w-300 @error('password') border-danger @enderror"
                           id="password"
                           type="password"
                           name="{{ isset($user) ? 'new_pass' : 'password' }}"
                           placeholder="Пароль"
                           autocomplete="off"/>
                    @error('password')
                    <span class="bk-validation">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mt-1 mb-0 form-group">
                    <button class="btn btn-outline-success">
                        {{ __('_action.save') }}
                    </button>
                    <a class="btn btn-outline-secondary" href="{{ route('admin.users.index') }}">
                        {{ __('_action.back') }}
                    </a>
                </div>
            </div>
        </form>
    </section>
@endsection
