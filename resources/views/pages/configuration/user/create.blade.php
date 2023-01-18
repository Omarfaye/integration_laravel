<x-main>
    <div class="row">
        <div class="col-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-12">
                        <div class="card-body table-responsive">
                           <div class="col-12 d-flex justify-content-between">
                               <h5 class="card-title text-primary">Create</h5>
                           </div>
                           <form method="POST" action="{{ route('users.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label  class="form-label">name</label>
                                {!! Form::text('name',null, ['placeholder'=>'name',  'class'=>'form-control']) !!}
                                @error('name')
                                <div  class="form-text"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">email</label>
                                {!! Form::email('email',null, ['placeholder'=>'email',  'class'=>'form-control']) !!}
                                @error('email')
                                <div  class="form-text"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">roles</label>
                                {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
                                @error('roles')
                                <div  class="form-text"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">permission</label>
                                {!! Form::select('permissions[]', $permissions,[], array('class' => 'form-control','multiple')) !!}
                                @error('permissions')
                                <div  class="form-text"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Password</label>
                                {!! Form::password('password', ['placeholder'=>'password',  'class'=>'form-control']) !!}
                                @error('password')
                                <div  class="form-text"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">Confirm Password</label>
                                {!! Form::password('confirm-password', ['placeholder'=>'confirm_password',  'class'=>'form-control']) !!}
                                @error('password')
                                <div  class="form-text"> {{ $message }} </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __('button.create') }}</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-main>
