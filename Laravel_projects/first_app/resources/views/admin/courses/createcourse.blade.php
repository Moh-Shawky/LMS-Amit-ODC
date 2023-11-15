<x-courses-layout>
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Course information</h5>
                    <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body">
                  <form method="POST" action="{{ route('addcourse') }}">
                    @csrf
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Course Name</label>
                            <input type="text" name="course_name" class="form-control" id="basic-default-fullname"
                             />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">About</label>
                            <input type="text" name="course_about" class="form-control" id="basic-default-company"
                                />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-phone">price</label>
                            <input name="price" type="text" id="basic-default-phone"
                                class="form-control phone-mask" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-phone">Instructor Name</label>
                            <input name="user_id" type="text" id="basic-default-phone"
                                class="form-control phone-mask" />
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-courses-layout>
