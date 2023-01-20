<x-main>
    <!DOCTYPE html>
    <html lang="en" class="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Profile - Admin One Tailwind CSS Admin Dashboard</title>

       <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    </head>
    <body>

    <div id="app">
        <section class="is-title-bar">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
                <ul>
                    <li>Roles</li>
                    <li>Authorization</li>
                </ul>
                <a href="{{ route('users.create')}}"  class="button blue">Add New
                    <span class="icon"><i class="mdi mdi-credit-card-outline"></i></span>
                </a>
            </div>
        </section>

        <section class="section main-section">
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 mb-6">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            <span class="icon"><i class="mdi mdi-account-circle"></i></span>
                           Roles
                        </p>
                    </header>
                    <div class="card-content">
                        <form method="POST" class="col-10" action="{{ route('roles.store') }}">
                            @csrf
                            <hr>
                            <div class="field">
                                <label class="label">Name</label>
                                <div class="field-body">
                                    <div class="field">
                                        <input type="text" name="name" class="input" placeholder="role name" required id="name" aria-describedby="emailHelp">
                                        @error('name')
                                        <div id="emailHelp" class="form-text text-danger"> {{ $message }} </div>
                                        @enderror
                                       <hr> <div class="input-group-prepend">
                                            <button type="submit" class="button green">Create</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Form Element sizes -->
                    <div class="box">
                        <div class="mt-3 col-12 rounded h-10 p-4">
                            <div class="table-responsive">
                                <table>
                                    <thead>
                                    <tr>
                                        <th class="checkbox-cell">
                                            <label class="checkbox">
                                                <input type="checkbox">
                                                <span class="check"></span>
                                            </label>
                                        </th>
                                        <th class="image-cell"></th>
                                        <th>Name</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($roles as $role)
                                    <tr>
                                        <td class="checkbox-cell">
                                            <label class="checkbox">
                                                <input type="checkbox">
                                                <span class="check"></span>
                                            </label>
                                        </td>
                                        <td class="image-cell">
                                            <div class="image">
                                                <img src="https://avatars.dicebear.com/v2/initials/rebecca-bauch.svg" class="rounded-full">
                                            </div>
                                        </td>
                                        <td data-label="Name">{{ $role->name }}</td>
                                        <td class="actions-cell">
                                            <div class="buttons right nowrap">
                                                <button type="button" class="button small blue"
                                                        onclick='modififRoles("{{$role->name}}" ,  "{{$role->id }}")'

                                                >
                                                    Update<span class="icon"><i class="mdi mdi-eye"></i></span>
                                                </button>
                                                <form action="{{route('roles.destroy', $role->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="button small red --jb-modal"
                                                            type="submit">
                                                        Delete<span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                                    </button>
                                                </form>
                                            </div>
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
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            <span class="icon"><i class="mdi mdi-account"></i></span>
                            Profile
                        </p>
                    </header>
                    <div class="card-content">
                        <div class="field">
                            <form method="POST" class="col-10" action="{{ route('permissions.store') }}">
                                @csrf
                                <hr>
                                <div class="field">
                                    <label class="label">Name</label>
                                    <div class="field-body">
                                        <div class="field">
                                            <input type="text" name="name" class="input" placeholder="Authorization name" required id="name" aria-describedby="emailHelp">
                                            @error('name')
                                            <div id="emailHelp" class="form-text text-danger"> {{ $message }} </div>
                                            @enderror
                                            <hr> <div class="input-group-prepend">
                                                <button type="submit" class="button green">Create</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <table>
                        <thead>
                        <tr>
                            <th class="checkbox-cell">
                                <label class="checkbox">
                                    <input type="checkbox">
                                    <span class="check"></span>
                                </label>
                            </th>
                            <th class="image-cell"></th>
                            <th>Name</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($permissions as $permission)
                        <tr>
                            <td class="checkbox-cell">
                                <label class="checkbox">
                                    <input type="checkbox">
                                    <span class="check"></span>
                                </label>
                            </td>
                            <td class="image-cell">
                                <div class="image">
                                    <img src="https://avatars.dicebear.com/v2/initials/rebecca-bauch.svg" class="rounded-full">
                                </div>
                            </td>
                            <td data-label="Name">{{ $permission->name }}</td>
                            <td class="actions-cell">
                                <div class="buttons right nowrap">
                                    <button class="button small blue --jb-modal"  data-target="sample-modal-2" type="button"
                                            onclick='modififPermission("{{$permission->name}}" ,  "{{$permission->id }}")'
                                    >
                                        Update<span class="icon"><i class="mdi mdi-eye"></i></span>
                                    </button>
                                    <form action="{{route('permissions.destroy', $permission->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="button small red --jb-modal"
                                                type="submit">
                                            Delete<span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>

    <!-- Button trigger modal -->

    <!-- Modal  Update-->
    <div id="sample-modal" class="modal">
        <div class="modal-background --jb-modal-close"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Sample modal</p>
            </header>
            <section class="modal-card-body">
                <form method="POST" action="" id="updateFormModal" class="PermissionFormModal">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">name</label>
                        <input type="text" name="name" class="input" id="nameEdit"  value="{{ $role->name }}" >
                        @error('name')
                        <div  class="form-text text-danger"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="modal-footer"><br/>
                        <button class="button green --jb-modal-close">Update</button>
                        <button type="submit" class="btn btn-primary">Close</button>
                    </div>
                </form>
            </section>
        </div>
    </div>
    <!--Modal Update-->

    </body>
    </html>


    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script>

        <!--Modification Roles-->
        function modififRoles(name, id) {
            $('#updateFormModal').attr('action', `/roles/${id}`);
            $("#nameEdit").val(name);
            document.getElementById('sample-modal').classList.add('active');
        }

        <!--Modification Authorization-->
        function modififPermission(name, id){
            $('#updateFormModal').attr('action', `/permissions/${id}`);
            $("#nameEdit").val(name)
            document.getElementById('sample-modal').classList.add('active');
        }

    </script>
</x-main>
