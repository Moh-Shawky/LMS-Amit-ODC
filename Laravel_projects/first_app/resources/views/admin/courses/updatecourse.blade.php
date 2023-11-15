<x-courses-layout>
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Course information</h5>
                    <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body">
                  <form method="POST" action="{{ route('courseupdate') }}">
                    @csrf
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Course Name</label>
                            <input type="text" name="course_name" class="form-control" id="basic-default-fullname"
                                value="{{ $course->course_name }}" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">About</label>
                            <input type="text" name="course_about" class="form-control" id="basic-default-company"
                                value="{{ $course->course_about }}" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-phone">price</label>
                            <input name="price" type="text" id="basic-default-phone"
                                class="form-control phone-mask" value="{{ $course->price }}" />
                        </div>
                        <input type="hidden" name="id" value="{{$course->id}}">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    {{-- <div class="row mb-5">
        <div class="col-md-6 col-lg-4 mb-3">
          <div class="card h-100">
            <img class="card-img-top" src="../assets/img/elements/2.jpg" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">{{$course->course_name}}</h5>
              <p class="card-text">
                {{$course->course_about}}
              </p>
              <a href="javascript:void(0)" class="btn btn-outline-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div> --}}
</x-courses-layout>
