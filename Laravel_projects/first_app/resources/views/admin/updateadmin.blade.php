<x-courses-layout>
  {{-- @dd($admin) --}}
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Admin information</h5>
                    <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('adminupdate') }}">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Admin Name</label>
                            <input type="text" name="Admin_name" class="form-control" id="basic-default-fullname"
                                value="{{ $admin->user_name }}" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Admin Info</label>
                            <input type="text" name="Admin_info" class="form-control" id="basic-default-company"
                                value="{{ $admin->user_info }}" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-phone">Admin Email</label>
                            <input name="Admin_email" type="text" id="basic-default-phone"
                                class="form-control phone-mask" value="{{ $admin->email }}" />
                        </div>
                        {{-- <div class="mb-3">
                            <label class="form-label" for="basic-default-phone">Admin password</label>
                            <input name="Admin_password" type="password" id="basic-default-phone"
                                class="form-control phone-mask" />
                        </div> --}}
                        <input type="hidden" name="id" value="{{ $admin->user_id }}">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-courses-layout>
