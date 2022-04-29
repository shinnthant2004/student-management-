<x-layout>
    <div class="container-fluid">
        <div class="row my-5 p-5 justify-content-center align-items-center">
            <div class="col-md-6 text-center">
                    <h3 class="text-primary mb-4">Add New Student</h3>
                    @if (session('success'))
                     <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                <form action="/editStudent/{{ $student->id }}" method="POST">
                    @csrf
                  <div class="mb-4">
                      <label for="cne" class="me-3 fw-bold">CNE</label>
                      <input type="text" value="{{ $student->CNE }}" id="cne" name="cne" class="form-control-sm">
                      <x-error name="cne"></x-error>
                  </div>
                  <div class="mb-4">
                    <label for="firstname" class="me-3 fw-bold">First Name</label>
                    <input type="text" value="{{ $student->firstname }}" id="firstname" name="firstname" class="form-control-sm">
                    <x-error name="firstname"></x-error>
                </div>
                <div class="mb-4">
                    <label for="lastname" class="me-3 fw-bold">Last Name</label>
                    <input type="text" value="{{ $student->lastname }}" id="lastname" name="lastname" class="form-control-sm">
                    <x-error name="lastname"></x-error>
                </div>
                <div class="mb-4">
                    <label for="age" class="me-3 fw-bold">Age</label>
                    <input type="number" value="{{ $student->age }}" id="age" name="age" class="form-control-sm">
                    <x-error name="age"></x-error>
                </div>
                <div class="mb-4">
                    <label for="speciality" class="me-3 fw-bold">Speciality</label>
                    <input type="text" value="{{ $student->speciality }}" id="speciality" name="speciality" class="form-control-sm">
                    <x-error name="speciality"></x-error>
                </div>
                <div class="mt-2">
                    <button type="submit" class="btn btn-outline-primary">Add</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
