@extends('layout')
@section('body-content')

<div class= "container shadow p-3 mb-3 bg-body-tertiary rounded">
<div class="row">
    <div class="col-4">
      <div id="list-example" class="list-group">
        <a class="list-group-item list-group-item-action" href="#list-item-1">
            about us
        </a>
        <a class="list-group-item list-group-item-action" href="#list-item-2">
            call us
        </a>

      </div>
    </div>
    <div class="col-8">
      <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
        <h4 id="list-item-1"> about us</h4>
        <p class="fs-5">We are a site that serves to provide all services to people related to the sea, whether it is inside the sea, such as a sea trip, fishing trip, diving trip, trip to an island, or sea-related activities such as swimming. We have special places for teaching all activities.</p>
        <h4 id="list-item-2">call us</h4>
        <p class="fs-5">
            call:
            <br>
                 01068608590
            <br>
                 01017194584
            <br>
                 Or we are honored by your presence <br>
                 Street 24 - Tanta - Gharbia - Egypt

        </p>

      </div>
    </div>
  </div>
</div>









@endsection
