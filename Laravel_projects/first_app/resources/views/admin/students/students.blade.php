<x-courses-layout>

  <div class="card">
    {{-- <a href="/createinstructor"><button type="submit" class="btn btn-primary">Add new Instructor</button></a> --}}
    <h5 class="card-header">Students Table</h5>
    <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Student name</th>
              <th>Student Info</th>
              <th>Student Email</th>
              <th>Student Courses</th>
              <th>Actions</th>
            </tr>
          </thead>
          @foreach ($students as $student)
          @foreach ($courses as $course)

              


          <tbody>
            <td>
              <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$student->user_name}}</strong>
            </td>
            <td>
              <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$student->user_info}}</strong>
            </td>
            <td>
              <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$student->email}}</strong>
            </td>
            <td>
              @if ($student->user_id==$course->student_id)
              <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$course->course_name}}</strong>
              @else
              <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>---</strong>
              @endif
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
                  <a class="dropdown-item" href="/studentdelete/{{$student->user_id}}"
                    ><i class="bx bx-trash me-1"></i> Delete</a
                  >
                </div>
              </div>
            </td>
      </tbody>

      @endforeach
      @endforeach

        </table>
    </div>
  </div>

</x-courses-layout>