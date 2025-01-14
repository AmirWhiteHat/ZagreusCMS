@extends(panelLayout())

@section('content')
<form action="{{ route('module.user.users.store') }}" method="post" class='grid grid-cols-12 md:grid-cols-1 gap-4'>
@csrf
<div class="col-span-12"> @panelView('errors-alert') </div>

<div class="col-span-8 md:col-span-12">
    <div class="card" >
        <div class="card-body">

            <div class="form-group mb-3">
                <label>{{__('Full name')}}</label>
                <input type="text" name='full_name' value='{{ old("full_name") }}' class="form-control">
            </div>

            <div class="form-group mb-3">
                <label>{{__('Email address')}}</label>
                <input type="text" name='email' value='{{ old("email") }}' class="form-control">
            </div>

            <div class="form-group mb-3">
                <label>{{__('Phone number')}} <small>(optional)</small></label>
                <input type="text" name='number' value='{{ old("number") }}' class="form-control">
            </div>

            <div class="form-group mb-3">
                <label>{{__('Password')}}</label>
                <input type="password" name='password' class="form-control">
            </div>
            
        </div>
        
    </div>
</div>
<div class="col-span-4 md:col-span-12">

    <div class="card">
        <div class="card-header">
            <div class="form-group">
                <label for="permissions">{{__('Role')}}</label>
                <select name="role_id" id='role_select' class="form-control">
                    <option value="0">{{__('Normal user')}}</option>
                    @foreach (\Modules\User\Entities\Role::all() as $role)
                        <option value="{{ $role->id }}">{{ $role->title }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="card-footer">
            <button type='submit' class="btn-success w-full">{{__('Create')}}</button>
        </div>
    </div>
</div>
</form>
@endsection
