<x-courses-layout>

  <div class="card">
    <a href="/createinstructor"><button type="submit" class="btn btn-primary">Add new Instructor</button></a>
    <h5 class="card-header">Instructors Table</h5>
    <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Instructor name</th>
              <th>Instructor Info</th>
              <th>Instructor Email</th>
              <th>Instructor Courses</th>
              <th>Actions</th>
            </tr>
          </thead>
          @foreach ($Instructors as $Instructor)

              


          <tbody>
            <td>
              <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$Instructor->user_name}}</strong>
            </td>
            <td>
              <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$Instructor->user_info}}</strong>
            </td>
            <td>
              <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$Instructor->email}}</strong>
            </td>
            <td>
              @foreach ($courses as $course)
              @if ($Instructor->user_id==$course->user_ID)
              <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$course->course_name}}</strong>
              @else
              {{-- <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>---</strong> --}}
              @endif
              @endforeach
            </td>
            <td>
              <div class="dropdown">
                <button
                  type="button"
                  class="btn p-0 dropdown-toggle hide-arrow"
                  data-bs-toggle="dropdown"
                >
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="/instructordelete/{{$Instructor->user_id}}"
                    ><i class="bx bx-trash me-1"></i> Delete</a
                  >
                </div>
              </div>
            </td>
      </tbody>

      @endforeach

        </table>
    </div>
  </div>

</x-courses-layout>