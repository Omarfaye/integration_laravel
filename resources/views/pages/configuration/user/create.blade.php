<x-main>
<!DOCTYPE html>
<html lang="en" class="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forms - Admin One Tailwind CSS Admin Dashboard</title>
</head>
<body>

<div id="app">
    <section class="section main-section">
        <div class="card mb-6">
            <header class="card-header">
                <p class="card-header-title">
                    <span class="icon"><i class="mdi mdi-ballot"></i></span>
                    Forms
                </p>
            </header>
            <div class="card-content">
                <form method="POST" action="{{ route('users.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label  class="form-label">Name</label>
                        {!! Form::text('name',null, ['placeholder'=> "name",  'class'=>'form-control input input']) !!}
                        @error('name')
                        <div  class="form-text"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Email</label>
                        {!! Form::email('email',null, ['placeholder'=> "email" ,  'class'=>'form-control input']) !!}
                        @error('email')
                        <div  class="form-text"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Roles</label>
                        {!! Form::select('roles[]', $roles,[], array('class' => 'form-control input','multiple')) !!}
                        @error('roles')
                        <div  class="form-text"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Authorization</label>
                        {!! Form::select('permissions[]', $permissions,[], array('class' => 'form-control input','multiple')) !!}
                        @error('permissions')
                        <div  class="form-text"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Password</label>
                        {!! Form::password('password', ['placeholder'=>"password",  'class'=>'form-control input']) !!}
                        @error('password')
                        <div  class="form-text"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Confirm_password</label>
                        {!! Form::password('confirm-password', ['placeholder'=>"confirm_password",  'class'=>'form-control input']) !!}
                        @error('password')
                        <div  class="form-text"> {{ $message }} </div>
                        @enderror
                    </div></br>
                    <button type="submit" class="button green">Create</button>
                </form>
            </div>
        </div>
    </section>

</div>
</body>
</html>
</x-main>
