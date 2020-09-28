
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8  pt-2">
            <div class="card ">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                        {{-- Authorized users that are logged in --}}
                        @if (Auth::user()->type =="Cooperate")
                            @include('profile.cooperate.cooperate')
                        @elseif (Auth::user()->type =="Individual")
                            @include('profile.individual.individual')
                        @elseif(Auth::user()->type =="Student")
                            @include('profile.student.student')
                        @elseif(Auth::user()->type == "admin")
                            @include('profile.admin.home')
                        @elseif(Auth::user()->type =="employee") 
                            @include('profile.employee.employee') 
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection