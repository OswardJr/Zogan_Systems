@include('layouts.headrepuestos')

<br><div class="col-md-12">
@if(Session::get('message'))
<div class="col-md-10 col-md-offset-2">
  <div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h3> {{ Session::get('message') }}</h3>
  </div>
</div>
@endif
</div>
<div class="page-content-wrapper" style="">
  <div class="page-content">
    <section class="content">
      <h3>Módulo de Repuestos</h3>
      <hr>
          <div class="col-md-12 ">
              <img src="{{asset('/img/logo.png')}}" alt="logo" style="height:300px; width:230px;float: right; margin-top: 50px" class="logo-default" />
          </div>

  </section>
</div>
</div>

@include('layouts.footer')
