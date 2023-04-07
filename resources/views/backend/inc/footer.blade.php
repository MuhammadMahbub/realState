@stack('modals')




<script type="text/javascript">
    $(function() {
    
        var start = moment().subtract(29, 'days');
        var end = moment();
    
        function cb(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    
        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
               'Today': [moment(), moment()],
               'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
               'Last 7 Days': [moment().subtract(6, 'days'), moment()],
               'Last 30 Days': [moment().subtract(29, 'days'), moment()],
               'This Month': [moment().startOf('month'), moment().endOf('month')],
               'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);
    
        cb(start, end);
    
    });
    </script>
        <script type="text/javascript">
    $(function() {
    
        var start = moment().subtract(29, 'days');
        var end = moment();
    
        function cb(start, end) {
            $('#salesrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    
        $('#salesrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
               'Today': [moment(), moment()],
               'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
               'Last 7 Days': [moment().subtract(6, 'days'), moment()],
               'Last 30 Days': [moment().subtract(29, 'days'), moment()],
               'This Month': [moment().startOf('month'), moment().endOf('month')],
               'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);
    
        cb(start, end);
    
    });
    </script>
        <script type="text/javascript">
    $(function() {
    
        var start = moment().subtract(29, 'days');
        var end = moment();
    
        function cb(start, end) {
            $('#platformrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    
        $('#platformrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
               'Today': [moment(), moment()],
               'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
               'Last 7 Days': [moment().subtract(6, 'days'), moment()],
               'Last 30 Days': [moment().subtract(29, 'days'), moment()],
               'This Month': [moment().startOf('month'), moment().endOf('month')],
               'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);
    
        cb(start, end);
    
    });
    </script>
        <script type="text/javascript">
    $(function() {
    
        var start = moment().subtract(29, 'days');
        var end = moment();
    
        function cb(start, end) {
            $('#agentsrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    
        $('#agentsrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
               'Today': [moment(), moment()],
               'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
               'Last 7 Days': [moment().subtract(6, 'days'), moment()],
               'Last 30 Days': [moment().subtract(29, 'days'), moment()],
               'This Month': [moment().startOf('month'), moment().endOf('month')],
               'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);
    
        cb(start, end);
    
    });
    </script>
    
        <script>
    var xValues = ["Jan","Feb","Mar","Apr","May","June","July","Aug","Sep","Oct", "Nov", "Dec"];
    
    new Chart("platform", {
      type: "line",
      data: {
        labels: xValues,
        datasets: [{ 
          data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
          borderColor: "red",
          fill: false
        }, { 
          data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
          borderColor: "green",
          fill: false
        }, { 
          data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
          borderColor: "blue",
          fill: false
        }]
      },
      options: {
        legend: {display: false}
      }
    });
    </script>
    <script>
    var xValues = ["Jan","Feb","Mar","Apr","May","June","July","Aug","Sep","Oct", "Nov", "Dec"];
    
    new Chart("property", {
      type: "line",
      data: {
        labels: xValues,
        datasets: [{ 
          data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
          borderColor: "red",
          fill: false
        }, { 
          data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
          borderColor: "green",
          fill: false
        }, { 
          data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
          borderColor: "blue",
          fill: false
        }]
      },
      options: {
        legend: {display: false}
      }
    });
    </script>
    <script>
    var xValues = ["Jan","Feb","Mar","Apr","May","June","July","Aug","Sep","Oct", "Nov", "Dec"];
    
    new Chart("sales", {
      type: "line",
      data: {
        labels: xValues,
        datasets: [{ 
          data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
          borderColor: "red",
          fill: false
        }, { 
          data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
          borderColor: "green",
          fill: false
        }, { 
          data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
          borderColor: "blue",
          fill: false
        }]
      },
      options: {
        legend: {display: false}
      }
    });
    </script>
    <script>
    var xValues = ["Jan","Feb","Mar","Apr","May","June","July","Aug","Sep","Oct", "Nov", "Dec"];
    
    new Chart("agents", {
      type: "line",
      data: {
        labels: xValues,
        datasets: [{ 
          data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
          borderColor: "red",
          fill: false
        }, { 
          data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
          borderColor: "green",
          fill: false
        }]
      },
      options: {
        legend: {display: false}
      }
    });
    </script>

    
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <!-- Required vendors -->
        <script src="{{asset('backend/assets/vendor')}}/global/global.min.js"></script>
        <script src="{{asset('backend/assets/vendor')}}/chart.js/Chart.bundle.min.js"></script>
        <script src="{{asset('backend/assets/vendor')}}/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
        <script src="{{asset('backend/assets/vendor')}}/apexchart/apexchart.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        
        <!-- Dashboard 1 -->
        <script src="{{asset('backend/assets/js')}}/dashboard/dashboard-1.js"></script>
        <script src="{{asset('backend/assets/vendor')}}/draggable/draggable.js"></script>
        
        
        <!-- tagify -->
        <script src="{{asset('backend/assets/vendor')}}/tagify/dist/tagify.js"></script>
         
        <script src="{{asset('backend/assets/vendor')}}/datatables/js/jquery.dataTables.min.js"></script>
        <script src="{{asset('backend/assets/vendor')}}/datatables/js/dataTables.buttons.min.js"></script>
        <script src="{{asset('backend/assets/vendor')}}/datatables/js/buttons.html5.min.js"></script>
        <script src="{{asset('backend/assets/vendor')}}/datatables/js/jszip.min.js"></script>
        <script src="{{asset('backend/assets/js')}}/plugins-init/datatables.init.js"></script>
       
        <!-- Apex Chart -->
        
        <script src="{{asset('backend/assets/vendor')}}/bootstrap-datetimepicker/js/moment.js"></script>
        <script src="{{asset('backend/assets/vendor')}}/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
        
    
        <!-- Vectormap -->
        <script src="{{asset('backend/assets/vendor')}}/jqvmap/js/jquery.vmap.min.js"></script>
        <script src="{{asset('backend/assets/vendor')}}/jqvmap/js/jquery.vmap.world.js"></script>
        <script src="{{asset('backend/assets/vendor')}}/jqvmap/js/jquery.vmap.usa.js"></script>
        <script src="{{asset('backend/assets/js')}}/custom.js"></script>
        <script src="{{asset('backend/assets/js')}}/deznav-init.js"></script>
        <script src="{{asset('backend/assets/js')}}/demo.js"></script>

        {{-- tOASTR --}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    {{-- ckeditor --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

    {{-- data feather --}}
    <script src="https://unpkg.com/feather-icons"></script>
    
    <script>
      feather.replace({
            width: 14,
            height: 14
        })
    </script> 

    <script>
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
    </script>
    
    <script>
      ClassicEditor
          .create( document.querySelector( '#editor' ) )
    </script>
    
    @if ($errors->any())
      @foreach ($errors->all() as $error)
          <script>
              toastr.error('{{ $error }}');
          </script>
      @endforeach
    @endif
    
    @if (Session::has('success'))
    <script>
      toastr.success("{!! Session::get('success') !!}")
    </script>
    @endif
    
    @if (Session::has('fail'))
    <script>
      toastr.error("{!! Session::get('fail') !!}")
    </script>
    @endif
    
        @stack('scripts')
        
    </body>
    
    </html>