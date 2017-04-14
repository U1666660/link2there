@extends('main')

@section('title', '| Contact')

@section('content')

<div class="container center ">

  <div id="change-site">
    <div class="choosesites" >
        <div class="siteslist">

      <h2 class="font-effect-3d-float">Contact Me<span class="arrow">&raquo;</span></h2>
      <form action="{{ url('contact') }}" method="POST">
        {{ csrf_field() }}
  </br>
    </br>
      </br>
          <div class="form-group" style="margin-left:60px;margin-right:120px;">
            <label name="email" style="font: 1em 'Montserrat Alternates', sans-serif;">Email:</label>
            <input id="email" name="email" class="form-control" id="email" placeholder="">
          </div>

          <div class="form-group" style="margin-left:60px;margin-right:120px;">
            <label name="subject" style="font: 1em 'Montserrat Alternates', sans-serif;">Subject:</label>
            <input id="subject" name="subject" class="form-control" id="subject" placeholder="">
          </div>

          <div class="form-group" style="margin-left:60px;margin-right:120px;">
            <label name="message" style="font: 1em 'Montserrat Alternates', sans-serif;">Message:</label>
            <textarea id="message" name="message" class="form-control" rows="8" cols="40" style="font: 1em 'Montserrat Alternates', sans-serif;" placeholder="Type your message here..."></textarea>
            <input type="submit" value="Send Message" class="w3-btn w3-teal" style="margin-top: 18px; font: 1em 'Montserrat Alternates', sans-serif;">
          </div>
        </form>
      </div>
  </div>
</div>
</div>
</div>
</div>

</div>



@endsection
