<x-main>
        <div class="row">
            <div class="col-12 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="card-header">
                            <div class="col-12 d-flex justify-content-between">
                                <h5 class="card-title text-primary">liste d'utilisateur</h5>
                                <a href="{{ route('users.create')}}" class="btn btn-success"><i class='bx bx-plus'></i>Ajouter nouveau</a>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-between">
                             <!-- left column -->
                            <div class="col-md-6">
                                <div class="card p-2">
                                    <div class="card-header">
                                        Les rôles
                                    </div>
                                    <!-- general form elements -->
                                    <div class="mt-2">
                                        <div class="box-body col-12  d-flex justify-content-end">
                                            <form method="POST" class="col-10" action="{{ route('roles.store') }}">
                                                @csrf
                                                <div class="input-group mb-3">

                                                    <!-- /btn-group -->
                                                    <input type="text" name="name" class="form-control" placeholder="name" required id="name" aria-describedby="emailHelp">
                                                    @error('name')
                                                    <div id="emailHelp" class="form-text text-danger"> {{ $message }} </div>
                                                    @enderror
                                                    <div class="input-group-prepend">
                                                        <button type="submit" class="btn btn-success">Create</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.box -->
                                    <!-- Form Element sizes -->
                                    <div class="box">
                                        <div class="mt-3 col-12 rounded h-10 p-4">
                                            <div class="table-responsive">
                                                <table class="table table-bordered"  id="table-roles">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">Nom de rôle</th>
                                                        <th scope="col text-nowrap">Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach ($roles as $role)
                                                        <tr>
                                                            <td>{{ $role->name }}</td>
                                                            <td class="d-flex justify-content-between gap-1">
                                                                <a href="#" onClick='openModal("{!! route('roles.edit',$role->id) !!}","edit-roles")'   class="btn btn-warning">Update</a>
                                                                <a href="#" onClick='showModel("roles/{!! $role->id !!}")' class="btn btn-sm btn-danger"><i class='bx bxs-trash' ></i>Delete</a>
                                                            </td>

                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.box -->
                                </div>
                            </div>

                            <!-- right column -->
                            <div class="col-md-6">
                                <!-- Horizontal Form -->
                                <div class="card p-2">
                                    <div class="card-header">
                                        Autorisation
                                    </div>
                                    <div class="box mt-2">
                                        <div class="box-body col-12  d-flex justify-content-end">
                                            <form method="POST" class="col-10" action="{{ route('permissions.store') }}">
                                                @csrf
                                                <div class="input-group mb-3">

                                                    <!-- /btn-group -->
                                                    <input type="text" name="name" class="form-control"  placeholder="name" required id="name" aria-describedby="emailHelp">
                                                    @error('name')
                                                    <div id="emailHelp" class="form-text text-danger"> {{ $message }} </div>
                                                    @enderror
                                                    <div class="input-group-prepend">
                                                        <button type="submit" class="btn btn-success">Create</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="box ">
                                        <div class="mt-3 col-12 rounded h-10 p-4">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="table-permissions">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col"> {{ __('permission.name') }}</th>
                                                        <th scope="col text-nowrap" class="text-center"> {{ __('permission.action') }}</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach ($permissions as $permission)
                                                        <tr>
                                                            <td>{{ $permission->name }}</td>
                                                            <td class="d-flex justify-content-between gap-1">
                                                                <a href="#" onClick='openModal("{!! route('permissions.edit',$permission->id) !!}","edit-permissions")'  class="btn btn-warning">{{__('button.update')}}</a>
                                                                <a href="#" onClick='showModel("permissions/{!! $permission->id!!}")' class="btn btn-sm btn-danger"><i class='bx bxs-trash' ></i>&nbsp;{{__('button.delete')}}</a>
                                                            </td>


                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-delete-modal  message="{{ __('message.confirm_delete') }}"
        cancel="{{ __('button.cancel') }}" confirm="{{ __('button.delete') }}" id="deleteConfirmationModel"></x-delete-modal>
        <x-custom-modal id="edit-roles" size="modal-xl" name=""></x-custom-modal>
        <x-custom-modal id="edit-permissions" size="modal-xl" name=""></x-custom-modal>

        @section('script')
        <script>
            $(function() {
                showJdatatable('#table-permissions'," @lang('datatables.search') "," @lang('datatables.lengthMenu') ",
                 " @lang('datatables.emptyTable') "," @lang('datatables.first') ", " @lang('datatables.previous') ",
                 " @lang('datatables.next') ", " @lang('datatables.last')");
                 showJdatatable('#table-roles'," @lang('datatables.search') "," @lang('datatables.lengthMenu') ",
                 " @lang('datatables.emptyTable') "," @lang('datatables.first') ", " @lang('datatables.previous') ",
                 " @lang('datatables.next') ", " @lang('datatables.last')");
            });
        </script>
    @endsection
    </x-main>

