
    <div class="row">
        <div class="col-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-12">
                        <div class="card-body table-responsive">
                           <div class="col-12 d-flex justify-content-between">
                               <h5 class="card-title text-primary">Update</h5>
                           </div>
                           <form method="POST" action="{{ route('roles.update', $role->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">name</label>
                                <input type="text" name="name" class="form-control" id="name"  value="{{ $role->name }}" >
                                @error('name')
                                <div  class="form-text text-danger"> {{ $message }} </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __('role.update') }}</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
