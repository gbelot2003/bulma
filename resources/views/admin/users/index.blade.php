<x-app-layout>
    <x-slot name="title">{{  __('Users') }}</x-slot>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover">
                <thead>
                    <th>{{ __('ID') }}</th>
                    <th>{{ __('Name')}}</th>
                    <th>{{ __('Email')}}</th>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th>{{ $user->id }}</th>
                            <th>{{  $user->name }}</th>
                            <th>{{  $user->email }}</th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
