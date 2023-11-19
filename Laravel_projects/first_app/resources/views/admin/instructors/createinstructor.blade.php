<x-courses-layout>
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Admin information</h5>
                    <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('addinstructor') }}">
                        {{-- {{dd($users)}} --}}
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Instructor Name</label>
                            <input type="text" name="Instructor_name" class="form-control" id="basic-default-fullname" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">Instructor Info</label>
                            <input type="text" name="Instructor_info" class="form-control" id="basic-default-company" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-phone">Instructor Email</label>
                            <input name="Instructor_email" type="text" id="basic-default-phone"
                                class="form-control phone-mask" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-phone">Instructor password</label>
                            <input name="Instructor_password" type="password" id="basic-default-phone"
                                class="form-control phone-mask" />
                        </div>
                        <input type="hidden" name="role" value="2">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-courses-layout>
