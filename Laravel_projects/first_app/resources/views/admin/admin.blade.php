<x-admin-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-8 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Welcome John! 🎉</h5>
                                <p class="mb-4">
                                    You are the <span class="fw-bold">admin</span> of this website. edit any section and
                                    add any thin
                                    you want to <span class="fw-bold">LMS</span>.
                                </p>

                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="{{ asset('dashboard/assets/img/illustrations/man-with-laptop-light.png') }}"
                                    height="140" alt="View Badge User"
                                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                    data-app-light-img="illustrations/man-with-laptop-light.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <a href="/createadmin"><button type="submit" class="btn btn-primary">Add new Admin</button></a>
            <h5 class="card-header">Admins Table</h5>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Admin name</th>
                            <th>Admin Info</th>
                            <th>Admin Email</th>
                            <th>Admin</th>
                        </tr>
                    </thead>
                    @foreach ($admins as $admin)
                        <tbody>
                            <td>
                                <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                <strong>{{ $admin->user_name }}</strong>
                            </td>
                            <td>
                                <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                <strong>{{ $admin->user_info }}</strong>
                            </td>
                            <td>
                                <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                <strong>{{ $admin->email }}</strong>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item" href="/admin/{{ $admin->user_id }}"><i
                                              class="bx bx-edit me-1"></i> Edit</a>
                                  {{-- </div>
                                    <div class="dropdown-menu"> --}}
                                        <a class="dropdown-item" href="/deleteadmin/{{ $admin->user_id }}"><i
                                                class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tbody>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
