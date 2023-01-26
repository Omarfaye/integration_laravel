<x-main>
    <!DOCTYPE html>
    <html lang="en" class="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tables - Admin One Tailwind CSS Admin Dashboard</title>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    </head>
    <body>

    <div id="app">

        <section class="section main-section">
            <div class="notification blue">
                <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
                    <div>
                        <span class="icon"><i class="mdi mdi-buffer"></i></span>
                        <b>Listes users</b>
                    </div>
                    <a href="{{ route('users.create')}}" type="button" class="button small textual --jb-notification-dismiss">Add Users</a>
                </div>
            </div>
            <div class="card has-table">
                <header class="card-header">
                    <p class="card-header-title">
                        <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
                        Users
                    </p>
                    <a href="#" class="card-header-icon">
                        <span class="icon"><i class="mdi mdi-reload"></i></span>
                    </a>
                </header>
                <div class="card-content">
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
                            <th>Email</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
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
                            <td data-label="Name">{{ $user->name }}</td>
                            <td data-label="Company">{{ $user->email }}</td>
                            <td class="actions-cell">
                                <div class="buttons right nowrap">
                                    <button class="button small blue --jb-modal"  data-target="sample-modal-2" type="button"
                                            onclick="modififUsers('{{ $user->id}}')"
                                    >
                                        Update<span class="icon"><i class="mdi mdi-eye"></i></span>
                                    </button>
                                    <button class="button small green --jb-modal"  data-target="sample-modal-2" type="button"
                                            onclick='detailUsers("{{$user->name}}","{{$user->email}}" , "{{$user->id }}")'
                                    >
                                        Detail<span class="icon"><i class="mdi mdi-eye"></i></span>
                                    </button>
                                    @if ($user->id !== auth()->user()->id )
                                        <button class="button small red --jb-modal"
                                                type="button"  onclick='showModel("users/{{$user->id }}")'>
                                            Delete<span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                        </button>

                                   {{-- <form action="{{route('users.destroy', $user->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="button small red --jb-modal"
                                                type="submit">
                                            Delete<span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                        </button>
                                    </form>--}}
                                    @endif
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="table-pagination">
                    </div>
                </div>
            </div>


            <!-- Modal  Update-->
            <div id="sample-modal" class="modal">
                <div class="modal-background --jb-modal-close"></div>
                <div class="modal-card">
                    <header class="modal-card-head">
                        <p class="modal-card-title">Sample modal</p>
                    </header>

                    <section class="modal-card-body" id="updateForm">

                    </section>

                </div>
            </div>
            <!--Modal Update-->

            <!-- Modal  Detail-->
            <div id="sample-modal-detail" class="modal">
                <div class="modal-background --jb-modal-close"></div>
                <div class="modal-card">
                    <header class="modal-card-head">
                        <p class="modal-card-title">Sample modal</p>
                    </header>
                    <section class="modal-card-body">
                        <form method="GET" action="" id="detailformModal" class="PermissionFormModal">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">name</label>
                                <input type="text" name="name" class="input" id="nameEdit"  value="{{ $user->name }}" >
                                @error('name')
                                <div  class="form-text text-danger"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">email</label>
                                <input type="text" name="email" class="input" id="emailEdit"  value="{{ $user->email }}" >
                                @error('email')
                                <div  class="form-text text-danger"> {{ $message }} </div>
                                @enderror
                            </div>
                        </form>
                    </section>
                </div>
            </div>
            <!--Modal Update-->


        </section>

    </div>
    </body>
    </html>
    <x-delete-modal  message="{{ __('Are you sure you want to delete this record') }}"
                     cancel="{{ __('Cancel') }}" confirm="{{ __('Delete') }}" id="deleteConfirmationModel"></x-delete-modal>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        <!--Modification-Users-->
        function modififUsers(id) {
             $('#updateForm').load(`/users/${id}/edit`);
             document.getElementById('sample-modal').classList.add('active');
        }


        <!--DetailUser-->
        function detailUsers(name,email,id){
            $('#detailformModal').attr('action', `/users/${id}`);
            $("#nameEdit").val(name);
            $("#emailEdit").val(email);
            document.getElementById('sample-modal-detail').classList.add('active');
        }

    </script>
</x-main>
