<x-courses-layout>

  <div class="card">
    <a href="/createcourse"><button type="submit" class="btn btn-primary">Add new course</button></a>
    
    <h5 class="card-header">Bordered Table</h5>
    <div class="card-body">
      <div class="table-responsive text-nowrap">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Course</th>
              <th>about</th>
              <th>price</th>
              <th>rating</th>
              <th>Actions</th>
            </tr>
          </thead>
          @foreach ($courses as $course)

          <tbody>
            <td>
              <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$course->course_name}}</strong>
            </td>
            <td>
              <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$course->course_about}}</strong>
            </td>
            <td>
              <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$course->price}}</strong>
            </td>
            <td>
              <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$course->rating}}</strong>
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
                  <a class="dropdown-item" href="/course/{{$course->id}}"
                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                  >
                  <a class="dropdown-item" href="/coursedelete/{{$course->id}}"
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
  </div>

</x-courses-layout>