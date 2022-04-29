<x-layout>
    <div class="container-fluid d-flex justify-content-center">
        <div class="row justify-content-center align-items-center" style="padding: 70px;width:1500px">
            <div class="col-md-6">
                <h3 class="text-primary mb-3">Students are the futures</h3>
                <img src="/images/students-2.jpg" class="rounded" width="650px" height="600px">
            </div>
            <div class="col-md-6">
                <h4>List of students</h4>
                <p class="text-black-50">You can find here all the informations about students in the system</p>
                <table class="table table-primary table-hover table-active table-condensed">
                    <thead>
                      <tr>
                        <th scope="col">CNE</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Speciality</th>
                        <th scope="col">Operation</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($students as $student)
                      <tr>
                        <th scope="row">{{ $student->CNE }}</th>
                        <td>{{ $student->firstname }}</td>
                        <td>{{ $student->lastname }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->speciality }}</td>
                        <td>
                            <a href="/edit/{{ $student->id }}" class="btn btn-primary">Edit</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

</x-layout>
