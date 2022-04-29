<x-layout>
    <div class="container shadow-lg" style="background-color: #ade8f4;border-radius:15px">
        <div class="row my-4" style="padding: 40px">
            <div class="col-md-6">
                <img class="rounded-circle" src="/storage/{{ $student->avatar }}" width="300px" height="300px">
            </div>
            <div class="col-md-6">
                <div class="">
                    <h3>Personal Details</h3>
                </div>


                <div class="d-flex my-3">
                    <div class="me-3 text-center" style="width: 100px;
                    padding: 7px;
                    height: 42px;
                    background-color: azure;
                    border-radius: 10px;">
                        <h5>Name</h5>
                    </div>
                    <div class="text-start" style="width: 300px;
                     padding:10px 15px;
                     height: 42px;
                     background-color: azure;
                     border-radius: 10px;">
                    <h5>{{ $student->firstname }} {{ $student->lastname }}</h5>
                </div>
                </div>

                <div class="d-flex my-3">
                    <div class="me-3 text-center" style="width: 100px;
                    padding: 7px;
                    height: 42px;
                    background-color: azure;
                    border-radius: 10px;">
                        <h5>CNE</h5>
                    </div>
                    <div class="text-start" style="width: 300px;
                     padding:10px 15px;
                     height: 42px;
                     background-color: azure;
                     border-radius: 10px;">
                    <h5>{{ $student->CNE }}</h5>
                </div>
                </div>

                <div class="d-flex my-3">
                    <div class="me-3 text-center" style="width: 100px;
                    padding: 7px;
                    height: 42px;
                    background-color: azure;
                    border-radius: 10px;">
                        <h5>Age</h5>
                    </div>
                    <div class="text-start" style="width: 300px;
                     padding:10px 15px;
                     height: 42px;
                     background-color: azure;
                     border-radius: 10px;">
                    <h5>{{ $student->age }}</h5>
                </div>
            </div>
            <div class="d-flex my-3">
                <div class="me-3 text-center" style="width: 100px;
                padding: 10px;
                height: 42px;
                background-color: azure;
                border-radius: 10px;">
                    <h6>Speciality</h6>
                </div>
                <div class="text-start" style="width: 300px;
                 padding:10px 15px;
                 height: 42px;
                 background-color: azure;
                 border-radius: 10px;">
                <h5>{{ $student->speciality }}</h5>
            </div>

        </div>
        <div class="mt-3 d-flex">
            <form action="/edit/{{ $student->id }}">
            @csrf
            <button class="btn btn-warning" type="submit">Edit</button>
        </form>
            <a class="ms-3" href="/"><button class="btn btn-primary">Back</button></a>
        </div>
    </div>
</x-layout>
