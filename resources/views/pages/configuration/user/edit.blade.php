<div class="card mb-6">
    <header class="card-header">
        <p class="card-header-title">
            <span class="icon"><i class="mdi mdi-ballot"></i></span>
            Forms
        </p>
    </header>
    <div class="card-content">
        <form method="post" action="{{ route('users.update', $user->id) }}" >
            @csrf
            @method('PUT')
            <div class="field">
                <label class="label">Name</label>
                <div class="field-body">
                    <div class="field">
                        <div class="control icons-left">
                            <input class="input" type="text" placeholder="Name" name="name" value="{{$user->name}}">
                            <span class="icon left"><i class="mdi mdi-account"></i></span>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control icons-left icons-right">
                            <input class="input" type="email" placeholder="Email" value="{{$user->email}}" name="email">
                        </div>
                    </div>
                </div>
            </div>

            <div class="field">

                <label class="label">Permission</label>
                <div class="control icons-left icons-right">
                    {!! Form::select('permissions[]',  $permissions,$userPermission, array('class' => 'input','multiple')) !!}
                </div>
            </div>



            <div class="field">

                <label class="label">Role</label>
                <div class="control icons-left icons-right">
                    {!! Form::select('roles[]',  $roles,$userRole, array('class' => 'input','multiple')) !!}
                </div>
            </div>

            <div class="field grouped">
                <div class="control">
                    <button type="submit" class="button blue">
                        Submit
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>

