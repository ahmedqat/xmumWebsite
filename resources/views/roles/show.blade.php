<x-layout>

    <x-roles.add/>


    <div class="content-body-table">
        <div class="body-table-title">
            Role List
        </div>
        <table class="table table-striped table-hover" id="all_department">
            <thead>
                <tr>
                    <th class="column-width-20">Role ID</th>
                    <th>Role Name</th>
                    <th>Decription</th>
                    <th class="text-center column-width-5">
                        <img class="btn-icon-more" src="assets/icons/more.png">
                    </th>
                </tr>
            </thead>
            <tbody id="myTable">
                @foreach ($roles as $role )


                <tr>
                    <td>{{ $role->id }}</td>
                    <td>{{ $role->name }}</td>
                    <td>{{ $role->role_description }}</td>
                    <td>
                        <div class="dropdown text-center">
                            <a href class="dropdown-toggle btn btn-more" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img class="btn-icon-more" src="assets/icons/more.png">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <ul class="content-dropdown-list list-unstyled">
                                    <li>
                                        <a href="#" class="btn btn-danger text-light">
                                            <img class="dropdown-list-btn-icon" src="{{ asset('assets/icons/delete.png') }}">
                                            <span>Delete</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="dropdown-list-btn-icon" src="{{ asset('assets/icons/pencil.png') }}">
                                            <span>Edit</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>


                @endforeach


            </tbody>
        </table>
    </div>


</x-layout>
