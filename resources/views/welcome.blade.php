@use('Spatie\Multitenancy\Models\Tenant')
@use('App\Models\User')
<x-app-layout>
    <div class="big-title">
        @if(Tenant::current())
            {{ Tenant::current()->name }}
        @endif
    </div>
    <div>
        First user email is <b>{{ User::first()->email }}</b>
    </div>
    <div>
        Retrieved from the <b>{{ (new User)->getConnection()->getDatabaseName() }}</b> database
    </div>
</x-app-layout>
