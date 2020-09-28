@extends('layouts.app')

@section('content')
@include('layouts.cooperate')
<div class="jumbotron">
  <h4 class="text-center">Fill in employee details to send invitation </h4>
  <hr class="my-4">
</div>

<div class="container">
@if($user->dealer=="")
<!---Invite Employee--->
<div class="row justify-content-center">
        <div class="col-md-10 pb-4">
            <div class="card">
                <div class="card-header">Please Provide a dealer first</div>
                <div class="card-body">
                    <form method="POST" action="/cooperate/code">
                        @csrf
                        <div class="form-group row">
                            <label for="code" class="col-md-4 col-form-label text-md-right">Dealer Code</label>

                            <div class="col-md-6">
                                <input type="text" name="country_name" id="country_name" class="form-control @error('country_name') is-invalid @enderror" name="country_name" required/>
                                <div id="countryList">
                                </div>
                            </div>
                            {{ csrf_field() }}
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" name="submit">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){

        $('#country_name').keyup(function(){ 
                var query = $(this).val();
                if(query != '')
                {
                var _token = $('input[name="_token"]').val();
                $.ajax({
                url:"{{ route('autocomplete.fetch') }}",
                method:"POST",
                data:{query:query, _token:_token},
                success:function(data){
                $('#countryList').fadeIn();  
                            $('#countryList').html(data);
                }
                });
                }
            });

            $(document).on('click', 'li', function(){  
                $('#country_name').val($(this).text());  
                $('#countryList').fadeOut();  
            });  
        });
    </script>
    <!---End Invite Employee--->
@else
<!---Invite Employee--->
<div class="row justify-content-center">
        <div class="col-md-10 pb-4">
            <div class="card">
                <div class="card-header">Fill in employee details</div>
                <div class="card-body">
                    <form method="POST" action="/cooperate/store">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" name="submit">
                                    Invite
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!---End Invite Employee--->
@endif
    
</div>
@endsection