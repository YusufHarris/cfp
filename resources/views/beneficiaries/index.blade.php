
@extends('layouts.app');
@section('content')

            <div class="content">
                <div class="title m-b-md">
                    Beneficiaries
                </div>
                <div class='position-ref'>
                  <table class="text-center table" style="width:100%">
                    <thead class="bg-dark text-light">
                      <th><strong>ID</strong></th>
                      <th><strong>Picture</strong></th>
                      <th><strong>Name</strong></th>
                      <th><strong>Occupation</strong></th>
                      <th><strong>Edit</strong></th>

                    </thead>
                    <tbody>
                    @foreach ($beneficiaries as $beneficiary)
                      <tr>
                        <td>{{$beneficiary->id}}</td>
                        <td>
                          <img src="/{{$beneficiary->avatar}}" onerror="this.src='https://i.imgur.com/fitWknA.png';" width="100px" height="100px" alt="{{$beneficiary->directory}}defavatar.jpg" style="border-radius:50px;"/>
                        </td>
                        <td>{{$beneficiary->name}}</td>
                        <td>{{$beneficiary->occupation}}</td>
                        <td>
                            <a class="btn-primary" href="{{ route('beneficiary.edit', $beneficiary->id) }}">
                              {{_('Edit')}}
                            </a>
                        </td>
                        <td>
                          <a class="btn-primary" href="{{ route('beneficiary.destroy', $beneficiary->id)}}">
                            {{_('Delete')}}
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
