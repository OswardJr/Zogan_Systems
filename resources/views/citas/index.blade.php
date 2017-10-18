@include('layouts.headservices')
<br><div class="col-md-12">
</div>
<div class="page-content-wrapper" style="">
  <div class="page-content">
    <section class="content">
      <h3>Citas</h3>
      <hr>
      <div class="panel panel-primary">
        <div class="panel-heading"><h4><strong></strong></h4></div>
        <div class="row">
          <div class="col-md-12 ">
            <div id='asd'></div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div>
    </div>
  </section><!-- /.content -->
</div>
</div>
        <script src="{{asset('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>

<script>
                  $(document).ready(function() {
                    $('#asd').fullCalendar({
                        header: {
                            left: 'prev,next today',
                            center: 'title',
                            right: 'month,basicWeek,basicDay'
                        },
                        lang: 'es',
                        eventLimit: true, // allow "more" link when too many events
                        events: [{
                            title: 'Arana jhonny',
                            url: 'google.com',
                            start: '2017-10-08T08:30:00'
                        }, {
                            title: 'Long Event',
                            start: '2017-10-18T16:00:00',
                        }]
                    });

                });
</script>
@include('layouts.footer')
