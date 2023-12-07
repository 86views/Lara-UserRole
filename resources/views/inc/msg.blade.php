{{-- <div style="padding-top: 20px" class="container-fluid"> --}}
    @if(session('success'))
    <div class="col-sm-6 col-md-4 col-xl-3 m-b-30">
        <p class="text-muted">>{{ session('success') }}</p>
        <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-success">Click me</button>
    </div>
    @endif
    @if(session('warning'))
    <div class="col-sm-6 col-md-4 col-xl-3 m-b-30">
        <p class="text-muted">>{{ session('warning') }}</p>
        <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-warning">Click me</button>
    </div>
    @endif











    




    {{-- @if(Session::has('successs'))
      <script type="text/javascript">
         swal({
             title:'Success!',
             text:"{{Session::get('success')}}",
             timer:5000,
             type:'success'
         }).then((value) => {
           //location.reload();
         }).catch(swal.noop);
     </script>
     @endif --}}

    

    @if($errors->count() > 0)
        <div class="alert alert-danger">
            <ul class="list-unstyled">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  

</div>