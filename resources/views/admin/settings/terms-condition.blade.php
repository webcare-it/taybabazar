@extends('admin.master')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col">
                    <div class="card radius-10 mb-0">
                        <div class="card-body">
                            @if(Session::has('success'))
                                <x-alert :message="session('success')" title="Success" type="success"></x-alert>
                            @endif
                            @if(Session::has('error'))
                                <x-alert :message="session('error')" title="Error" type="error"></x-alert>
                            @endif

                            <form action="{{ route('admin.terms.condition.store') }}" method="post">
                                @csrf
                                <label style="font-size: 20px;">Terms & Condition</label>
                                <textarea class="ckeditor form-control" name="terms_condition" id="terms_condition">{{ $termsCondition->terms_condition ?? old('terms_condition') }}</textarea>
                                <button type="submit" class="btn btn-success mt-2 float-right">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>
@endsection
