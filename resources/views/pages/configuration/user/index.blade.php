<x-main>
    <div class="row">
        <div class="col-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="card-header">
                        <div class="col-12 d-flex justify-content-between">
                            <h5 class="card-title text-primary">Liste Utilisateur</h5>
                            <a href="{{ route('users.create')}}" class="btn btn-success"><i class='bx bx-plus'></i>New</a>
                        </div>
                    </div>
                    <div class="card-body table-responsive mt-3">
                        <table class="table  table-bordered mt-2" id="userTable">
                            <thead>
                            <tr>
                                <th scope="col">{{ __('user.name') }}</th>
                                <th scope="col">{{ __('user.email') }}</th>
                                <th scope="col">{{ __('button.action') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td class="d-flex justify-content-between gap-1">
                                        <a href="{{route('users.show', encrypt($user->id))}}" class="btn btn-sm btn-primary"><i class='bx bxs-detail'></i>Detail</a>
                                        <a href="{{route('users.edit', encrypt($user->id))}}"  class="btn btn-sm btn-secondary"><i class='bx bx-edit' ></i>Update</a>
                                        <a href="#" onClick='showModel("users/{!! encrypt($user->id) !!}")' class="btn btn-sm btn-danger"><i class='bx bxs-trash' ></i>Delete</a>
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
    <x-delete-modal  message="{{ __('message.confirm_delete') }}"
    cancel="{{ __('button.cancel') }}" confirm="{{ __('button.delete') }}" id="deleteConfirmationModel"></x-delete-modal>

    @section('script')
    <script>
        $(function() {
            showJdatatable('#userTable'," @lang('datatables.search') "," @lang('datatables.lengthMenu') ",
             " @lang('datatables.emptyTable') "," @lang('datatables.first') ", " @lang('datatables.previous') ",
             " @lang('datatables.next') ", " @lang('datatables.last')");
        });

        function showModel(id) {
            const frmDelete = document.getElementById("delete-frm");
            frmDelete.action = id;
            const confirmationModal = document.getElementById("deleteConfirmationModel");
            confirmationModal.style.display = 'block';
            confirmationModal.classList.remove('fade');
            confirmationModal.classList.add('show');
        }
    </script>
@endsection
</x-main>
