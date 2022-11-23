@extends('admin.index')
@section('title-admin', __('_section.users'))
@section('content-admin')
    <section id="users-index" class="overflow-auto">
        <h3>{{ __('_section.users') }}</h3>

        <div class="my-2 btn-group">
            <a class="btn btn-primary" href="{{ route('admin.users.create') }}">
                {{ __('_record.new') }}
            </a>
        </div>

        @if(session()->has('success'))
        <div class="my-2 alert alert-success" role="alert">
            {{ session()->get('success') }}
        </div>
        @endif

        <table id="is-datatable" class="dataTables table table-bordered table-hover table-responsive">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th class="w-25 bk-min-w-150">Пользователь</th>
                    <th class="w-25 bk-min-w-150">Роль</th>
                    <th class="w-25 bk-min-w-150">Почта</th>
                    <th class="w-25 bk-min-w-150">Дата создания</th>
                    <th class="no-sort">Действие</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $index => $user)
                <tr>
                    <td>{{ ++$index }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->role->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ dth_date($user->created_at) }}</td>
                    <td>
                        <div class="bk-btn-actions">
                            <a class="bk-btn-action bk-btn-action--edit btn btn-warning"
                               href="{{ route('admin.users.edit', $user) }}"
                               data-tip="{{ __('_action.edit') }}" ></a>
                            <a class="bk-btn-action bk-btn-action--delete btn btn-danger"
                               href="javascript:void(0)"
                               data-id="{{ $user->id }}"
                               data-toggle="modal"
                               data-target="#bk-delete-modal"
                               data-tip="{{ __('_action.delete') }}" ></a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
@endsection
