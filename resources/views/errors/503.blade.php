@extends('layouts.frontend.master2')
@section('content')
    <div class="faq__area pt-120 pb-120">
        <div class="container text-center">
         <center><h1 class="display-1 mb-2">5<span class="custom-emoji"><svg xmlns="http://www.w3.org/2000/svg" height="140"
                        width="140" data-name="Layer 1" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10" fill="#a2a1ff" />
                        <path fill="#6563ff"
                            d="M12 17.0918a5.68094 5.68094 0 0 1-3.64258-1.3252 1.00029 1.00029 0 1 1 1.28516-1.5332 3.76085 3.76085 0 0 0 4.71484 0 1.00029 1.00029 0 0 1 1.28516 1.5332A5.68094 5.68094 0 0 1 12 17.0918zM16.91406 10.83594a.99676.99676 0 0 1-.707-.293 1.03323 1.03323 0 0 0-1.41406 0 .99989.99989 0 0 1-1.41406-1.41406 3.07249 3.07249 0 0 1 4.24218 0 1 1 0 0 1-.707 1.707z" />
                        <circle cx="9" cy="10" r="1" fill="#6563ff" />
                    </svg></span>3</h1>
            <h5 class="error-details">
                Sorry, an error has occured, Sevice Unavailable!
            </h5></center>   
        </div>
    </div>
@endsection
@section('title')
    503 |
@endsection
@section('javascript')
    {!! resource_loader(blade_path: 'pages.frontend.frontend', render: true) !!}
@endsection
