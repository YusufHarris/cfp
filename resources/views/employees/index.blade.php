
@extends('layouts.app');
@section('content')

            <div class="content">
                <div class="title m-b-md">
                    Employees
                </div>
                <div class='position-center'>
                  <table class="text-center table" style="width:100%">
                    <thead class="bg-dark text-light">
                      <th><strong>ID</strong></th>
                      <th><strong>Picture</strong></th>
                      <th><strong>Name</strong></th>
                      <th><strong>Job Title</strong></th>
                      <th><strong>Edit</strong></th>


                    </thead>
                    <tbody>
                    @foreach ($employees as $employee)
                      <tr>
                        <td>{{$employee->id}}</td>
                        <td>

                          <img src="{{$employee->avatar}}" onerror="this.src='https://i.imgur.com/fitWknA.png';" width="30px" height="30px" alt="{{$employee->name}} Photo" style="border-radius:50px;"/>

                        </td>
                        <td>{{$employee->name}}</td>
                        <td>{{$employee->title}}</td>
                        <td>
                            <a class="btn-primary" href="{{ route('employee.edit', $employee->id) }}">
                              {{_('Edit')}}
                            </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

                </div>
            </div>
        </div>
@endsection
