<x-layout>

    <x-users.add/>
    <div class="content-body-table">
        <div class="body-table-title">
            User List
        </div>
        <table class="table table-striped table-hover" id="all_department">
            <thead>
                <tr>
                    <th class="column-width-20">User ID</th>
                    <th>User Name</th>
                    <th>Email Address</th>
                    <th>Role</th>
                    <th class="text-center column-width-5">
                        <img class="btn-icon-more" src="assets/icons/more.png">
                    </th>
                </tr>
            </thead>
            <tbody id="myTable">
                @foreach ($users as $user )


                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role->name }}</td>
                    <td>
                        <div class="dropdown text-center">
                            <a href class="dropdown-toggle btn btn-more" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img class="btn-icon-more" src="assets/icons/more.png">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <ul class="content-dropdown-list">
                                    <li>
                                        <a href="#">
                                            <img class="dropdown-list-btn-icon" src="assets/icons/delete.png">
                                            <span>Delete</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="dropdown-list-btn-icon" src="assets/icons/pencil.png">
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
