@if($users->count() > 0)
    <div class="table-responsive">
        <table class="table mb-0 thead-border-top-0 table-striped text-center">
            <thead>
                <tr>
                    <th width="5%"  class="text-center">{{ __('messages.#id') }}</th>
                    <th width="10%" >{{ __('messages.company') }}</th>
                    <th width="20%">{{ __('messages.name') }}</th>
                    <th width="20%">{{ __('messages.email') }}</th>
                    <th width="10%">{{ __('messages.subscribed_to') }}</th>
                    <th width="10%">{{ __('messages.role') }}</th>
                    <th width="20%" class="text-center width: 120px;">{{ __('messages.created_at') }}</th>
                    <th width="5%">{{ __('messages.edit') }}</th>
                </tr>
            </thead>
            <tbody class="list " id="users">
                @foreach ($users as $user)
                    <tr>
                        <td>
                            <div class="badge badge-info">#{{ $user->id }}</div>
                        </td>
                        <td>
                            <p class="mb-0">{{ $user->currentCompany()->name }}</p>
                        </td>
                        <td>
                            <p class="mb-0">{{ $user->full_name }}</p>
                        </td>
                        <td>
                            <p class="mb-0">{{ $user->email }}</p>
                        </td>
                        <td>
                            @if($user->currentSubscriptionPlan())
                                <a class="mb-0 badge badge-primary badge-sm" href="{{ route('super_admin.plans.edit', $user->currentSubscriptionPlan()->id) }}">{{ $user->currentSubscriptionPlan()->name }}</a>
                            @else
                                <a class="mb-0">-----</a>
                            @endif
                        </td>
                        <td>
                            @if($user->hasRole('super_admin'))
                                <p class="mb-0">{{ __('messages.super_admin') }}</p>
                            @elseif($user->hasRole('admin'))
                                <p class="mb-0">{{ __('messages.admin') }}</p>
                            @elseif($user->hasRole('staff'))
                                <p class="mb-0">{{ __('messages.staff') }}</p>
                            @endif
                        </td>
                        <td class="text-center"><i class="ft-calendar ft-ca"></i> {{ $user->created_at->format('Y-m-d') }}</td>
                        <td><a href="{{ route('super_admin.users.edit', $user->id) }}" class="btn btn-sm btn-link text-warning"><i class="ft-arrow-right"></i></a> </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row card-body pagination-light justify-content-center text-center">
        {{ $users->links() }}
    </div>
@else
    <div class="row justify-content-center card-body pb-0 pt-5">
        <i class="material-icons fs-64px">account_box</i>
    </div>
    <div class="row justify-content-center card-body pb-5">
        <p class="h4">{{ __('messages.no_users_yet') }}</p>
    </div>
@endif
