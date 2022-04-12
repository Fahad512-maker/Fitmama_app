 <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('admin/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
 <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
 <script src="{{ asset('admin/plugins/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('admin/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
 {{--    <script src="{{ asset('admin/plugins/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('admin/plugins/noUiSlider/nouislider.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('admin/plugins/highlight/highlight.pack.js') }}"></script>
    <script src="{{ asset('admin/plugins/flatpickr/custom-flatpickr.js') }}"></script> --}}
    {{-- <script src="{{ asset('admin/plugins/noUiSlider/custom-nouiSlider.js') }}"></script> --}}
    <script src="{{ asset('admin/plugins/bootstrap-range-Slider/bootstrap-rangeSlider.js') }}"></script>
    <script src="{{ asset('admin/plugins/highlight/highlight.pack.js') }}"></script>
    <script src="{{ asset('admin/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/bootstrap/js/popper.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<script type="text/javascript">
feather.replace();
</script>
 <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
     <script type="text/javascript">
        $('#lfm').filemanager('file');
     </script>
    <script src="{{ asset('admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>
       <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('admin/plugins/table/datatable/datatables.js') }}"></script>

    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('admin/assets/js/scrollspyNav.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('admin/plugins/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/dashboard/dash_1.js') }}"></script>
        <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
        <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
   {{--  <script src="{{ asset('admin/plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/jszip.min.js') }}"></script>    
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/buttons.print.min.js') }}"></script> --}}
   {{--  <script>
        $('#html5-extension').DataTable( {
            "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            buttons: {
                buttons: [
                    { extend: 'copy', className: 'btn btn-sm' },
                    { extend: 'csv', className: 'btn btn-sm' },
                    { extend: 'excel', className: 'btn btn-sm' },
                    { extend: 'print', className: 'btn btn-sm' }
                ]
            },
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        } );
    </script> --}}

    @if(isset($page_name))

    @switch($page_name)


    @case('dashboard')

         <script src="{{ asset('admin/plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/jszip.min.js') }}"></script>    
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/buttons.print.min.js') }}"></script>

        <script>
        $('#html5-extension').DataTable( {
            "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            buttons: {
                buttons: [
                    { extend: 'copy', className: 'btn btn-sm' },
                    { extend: 'csv', className: 'btn btn-sm' },
                    { extend: 'excel', className: 'btn btn-sm' },
                    { extend: 'print', className: 'btn btn-sm' }
                ]
            },
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        } );
    </script> 
    @break

    @case('create_profile_question')
    <script type="text/javascript">
        
        $(document).on('change' , '.type' , function(){
         
         let type_id=$(this).val();
         if(type_id == 'checkbox')
         {
            $('.options').show();
         }
         else{

            $('.options').hide();
         }

        });


        $(document).on('click' , '.add_more' , function(){
        
         html=`<div class="row mt-3">
                <div class="col-lg-5 col-md-5 col-sm-5">
                <input type="file" name="images[]" class="form-control">
                </div>    
                <div class="col-lg-5 col-md-5 col-sm-5">
                <input type="text" name="options[]" class="form-control" placeholder="Option">
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2">
                <button type="button" class="btn btn-danger remove_option" color: white;">Remove</button>
               </div>
               </div>`;

               $('.multiple_options').append(html);

        });
    </script>

        <script type="text/javascript">
    $(document).on('click','.remove_option',function(){
$(this).closest('.row').remove();
})
    </script>
    @break

    @case('edit_profile_question')

        <script type="text/javascript">
        
        $(document).on('change' , '.type' , function(){
         
         let type_id=$(this).val();
         if(type_id == 'checkbox')
         {
            $('.options').show();
         }
         else{

            $('.options').hide();
         }

        });


        $(document).on('click' , '.add_more' , function(){
        
         html=`<div class="row mt-3">
                <div class="col-lg-5 col-md-5 col-sm-5">
                <input type="file" name="images[]" class="form-control">
                </div>    
                <div class="col-lg-5 col-md-5 col-sm-5">
                <input type="text" name="options[]" class="form-control" placeholder="Option">
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2">
                <button type="button" class="btn btn-danger remove_option" color: white;">Remove</button>
               </div>
               </div>`;

               $('.multiple_options').append(html);

        });
    </script>

        <script type="text/javascript">
    $(document).on('click','.remove_option',function(){
$(this).closest('.row').remove();
})
    </script>
    @break;

    @case('profile_question_list')

     <script src="{{ asset('admin/plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/jszip.min.js') }}"></script>    
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/buttons.print.min.js') }}"></script>

        <script>
        $('#html5-extension').DataTable( {
            "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            buttons: {
                buttons: [
                    { extend: 'copy', className: 'btn btn-sm' },
                    { extend: 'csv', className: 'btn btn-sm' },
                    { extend: 'excel', className: 'btn btn-sm' },
                    { extend: 'print', className: 'btn btn-sm' }
                ]
            },
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        } );
    </script> 
  

     <script type="text/javascript">

        $(document).on('click' , '.view_options' , function(){

         let id= $(this).attr('data-id');
         $('#'+id).modal('show');

        }); 
     </script>
       <script type="text/javascript">
    $(document).on('click' , '.delete_option' , function(){
    
       let id = $(this).attr('data-id');
        $('#delete-'+id).modal('show');

    });
    </script>
     
    @break

    @case('package_list')

    
     <script src="{{ asset('admin/plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/jszip.min.js') }}"></script>    
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/buttons.print.min.js') }}"></script>

        <script>
        $('#html5-extension').DataTable( {
            "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            buttons: {
                buttons: [
                    { extend: 'copy', className: 'btn btn-sm' },
                    { extend: 'csv', className: 'btn btn-sm' },
                    { extend: 'excel', className: 'btn btn-sm' },
                    { extend: 'print', className: 'btn btn-sm' }
                ]
            },
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        } );
    </script>

    <script type="text/javascript">
    $(document).on('click' , '.delete_option' , function(){
    
    let id = $(this).attr('data-id');
    $('#'+id).modal('show');

    });
    </script>
    @break

    

    @case('users_list')

         <script src="{{ asset('admin/plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/jszip.min.js') }}"></script>    
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/buttons.print.min.js') }}"></script>

        <script>
        $('#html5-extension').DataTable( {
            "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            buttons: {
                buttons: [
                    { extend: 'copy', className: 'btn btn-sm' },
                    { extend: 'csv', className: 'btn btn-sm' },
                    { extend: 'excel', className: 'btn btn-sm' },
                    { extend: 'print', className: 'btn btn-sm' }
                ]
            },
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        } );
    </script>
            <script type="text/javascript">
    $(document).on('click' , '.delete_option' , function(){
        
       let id = $(this).attr('data-id');
        $('#delete-'+id).modal('show');

    });
</script>
 <script type="text/javascript">
     $(document).on('change' , '.searchusersbypackage' , function(){

        let package_id=$(this).val();
        $.ajax({
       url : '{{ url('/searchuserbypackage') }}/'+package_id,
       type : 'POST',
       data : {package_id : package_id , _token : '{{ csrf_token() }}'},
       dataType : 'html',
       beforeSend: function(){
       $('#userstable').hide();
       $('#loading-image').css('margin-top' , '150px');
       $("#loading-image").show();

       },
       success:function(data){
       $('.showusers').html(data);
        $('#loading-image').hide();
        $('#userstable').show(); 
        
       }
       }); 

       });
  </script>
  {{-- <script type="text/javascript">
         var f3 = flatpickr(document.getElementById('rangeCalendarFlatpickr'), {
    mode: "range"
});
  </script> --}}
 <script type="text/javascript">
 
    $(document).on('change' , '.datefilter' , function(){
     let start_date=$('#startdate').val();
     let end_date=$('#enddate').val();
     
     if(start_date != '' && end_date != ''){
       
       $.ajax({
        
        url:'{{ url('/searchuserbydate') }}',
        type : 'POST',
        data:{start_date:start_date , end_date:end_date , _token:'{{ csrf_token() }}'},
        beforeSend: function(){
       $('#userstable').hide();
       $('#loading-image').css('margin-top' , '150px');
       $("#loading-image").show();

       },
       success:function(response){
       $('.showusers').html(response);
        $('#loading-image').hide();
        $('#userstable').show(); 
        
       }
     
      });
}

 else{

   alert('Please Select End Date');
 }      
    });
 </script>
    @break

     @case('create_package')
     <script type="text/javascript">
        $(document).on('change' , '.symbolic_description' , function(){

         let value=$(this).val();

         if(value != 0){

            $('.checkmarked_description').show();
         }
         else
         {
            $('.checkmarked_description').hide();
         }
        });

        $(document).on('click' , '.add_more_description' , function(){
        
        let html=`<div class="row mt-3">
                  <div class="col-lg-7 col-md-7 col-sm-7">
                  <textarea name="checkmark_description[]" class="form-control" placeholder="Symbolic Description"></textarea>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 mt-1">
                 <button type="button" class="btn btn-danger remove_description" color: white;"> Remove</button>
                 </div>
                 </div>`;

            $('.checkmarked_description').append(html);     

        });
     </script>
       <script type="text/javascript">
    $(document).on('click','.remove_description',function(){
$(this).closest('.row').remove();
})
    </script>

     <script>
        ClassicEditor
            .create( document.querySelector( '#ck_editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
     @break

     @case('edit_package')
       
       <script type="text/javascript">
        $(document).on('change' , '.symbolic_description' , function(){

         let value=$(this).val();

         if(value != 0){

            $('.checkmarked_description').show();
         }
         else
         {
            $('.checkmarked_description').hide();
         }
        });

        $(document).on('click' , '.add_more_description' , function(){
        
        let html=`<div class="row mt-3">
                  <div class="col-lg-7 col-md-7 col-sm-7">
                  <textarea name="checkmark_description[]" class="form-control" placeholder="Symbolic Description"></textarea>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 mt-1">
                 <button type="button" class="btn btn-danger remove_description" color: white;"> Remove</button>
                 </div>
                 </div>`;

            $('.checkmarked_description').append(html);     

        });
     </script>
       <script type="text/javascript">
    $(document).on('click','.remove_description',function(){
$(this).closest('.row').remove();
})
    </script>

     <script>
        ClassicEditor
            .create( document.querySelector( '#ck_editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
     @break;

{{--      
     @case('profile_question_list'.$package->id)
      
              <script src="{{ asset('admin/plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/jszip.min.js') }}"></script>    
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/buttons.print.min.js') }}"></script>

        <script>
        $('#html5-extension').DataTable( {
            "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            buttons: {
                buttons: [
                    { extend: 'copy', className: 'btn btn-sm' },
                    { extend: 'csv', className: 'btn btn-sm' },
                    { extend: 'excel', className: 'btn btn-sm' },
                    { extend: 'print', className: 'btn btn-sm' }
                ]
            },
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        } );
    </script> 

    
     <script type="text/javascript">
        $(document).on('click' , '.view_options' , function(){
         let id= $(this).attr('data-id');
         $('#'+id).modal('show');

        }); 
     </script>
       <script type="text/javascript">
    $(document).on('click' , '.delete_option' , function(){
       let id = $(this).attr('data-id');
        $('#delete-'+id).modal('show');

    });
    </script>


     @break --}}

     @case('add_exercise_category')
     
      <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
     <script type="text/javascript">
        $('#lfm').filemanager('file');
     </script>
     

     @break

     @case('exercise_category_list')
     
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/jszip.min.js') }}"></script>    
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/buttons.print.min.js') }}"></script>

        <script>
        $('#html5-extension').DataTable( {
            "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            buttons: {
                buttons: [
                    { extend: 'copy', className: 'btn btn-sm' },
                    { extend: 'csv', className: 'btn btn-sm' },
                    { extend: 'excel', className: 'btn btn-sm' },
                    { extend: 'print', className: 'btn btn-sm' }
                ]
            },
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        } );
    </script> 

        <script type="text/javascript">
    $(document).on('click' , '.delete_option' , function(){
       let id = $(this).attr('data-id');
        $('#delete-'+id).modal('show');

    });
    </script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
     <script type="text/javascript">
        $('#lfm').filemanager('file');
     </script>
     
     @break

     @case('add_exercise')

         <script type="text/javascript">
         $(document).on('click' , '.add_more' , function(){
        
         html=`<div class="row mt-3">
                                        <div class="col-lg-5 col-md-5 col-sm-5">
                                        <input type="text" name="sets" class="form-control">
                                        </div>    
                                        <div class="col-lg-5 col-md-5 col-sm-5">
                                        <input type="text" name="training_weight" class="form-control" placeholder="Enter Trainig Weight">
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2">
                                        <button type="button" class="btn add_more" style="background-color: #1abc9c; color: white;">+ Add More</button>
                                        </div>
                                        </div>>`;

               $('.multiple_options').append(html);

        });
    </script>

        <script type="text/javascript">
    $(document).on('click','.remove_option',function(){
$(this).closest('.row').remove();
})
    </script>
     

     <script>
         CKEDITOR.replace('ck_editor_1');
    </script>
    
    <script>
         CKEDITOR.replace('ck_editor');
    </script>
    <script>
CKEDITOR.replace( 'summary-ckeditor', {
    filebrowserUploadUrl: "",
    filebrowserUploadMethod: 'form'
});
</script>

     <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
     <script type="text/javascript">
        $('#lfm').filemanager('file');
        $('#lfm_1').filemanager('file');
     </script>
     <script type="text/javascript">
         var lfm = function(id, type, options) {
  let button = document.getElementById(id);

  button.addEventListener('click', function () {
    var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
    var target_input = document.getElementById(button.getAttribute('data-input'));
    var target_preview = document.getElementById(button.getAttribute('data-preview'));

    window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
    window.SetUrl = function (items) {
      var file_path = items.map(function (item) {
        return item.url;
      }).join(',');

      // set the value of the desired input to image url
      target_input.value = file_path;
      target_input.dispatchEvent(new Event('change'));

      // clear previous preview
      target_preview.innerHtml = '';

      // set or change the preview image src
      items.forEach(function (item) {
        let img = document.createElement('img')
        img.setAttribute('style', 'height: 5rem')
        img.setAttribute('src', item.thumb_url)
        target_preview.appendChild(img);
      });

      // trigger change event
      target_preview.dispatchEvent(new Event('change'));
    };
  });
};
     </script>

     @break

     @case('edit_exercise')

      <script type="text/javascript">
         $(document).on('click' , '.add_more' , function(){
        
         html=`<div class="row mt-3">
                                        <div class="col-lg-5 col-md-5 col-sm-5">
                                        <input type="text" name="sets" class="form-control">
                                        </div>    
                                        <div class="col-lg-5 col-md-5 col-sm-5">
                                        <input type="text" name="training_weight" class="form-control" placeholder="Enter Trainig Weight">
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2">
                                        <button type="button" class="btn add_more" style="background-color: #1abc9c; color: white;">+ Add More</button>
                                        </div>
                                        </div>>`;

               $('.multiple_options').append(html);

        });
    </script>

        <script type="text/javascript">
    $(document).on('click','.remove_option',function(){
$(this).closest('.row').remove();
})
    </script>
     

     <script>
         CKEDITOR.replace('ck_editor_1');
    </script>
    
    <script>
         CKEDITOR.replace('ck_editor');
    </script>
    <script>
CKEDITOR.replace( 'summary-ckeditor', {
    filebrowserUploadUrl: "",
    filebrowserUploadMethod: 'form'
});
</script>

     <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
     <script type="text/javascript">
        $('#lfm').filemanager('file');
        $('#lfm_1').filemanager('file');
        $('#lfm_2').filemanager('file');
     </script>
     <script type="text/javascript">
         var lfm = function(id, type, options) {
  let button = document.getElementById(id);

  button.addEventListener('click', function () {
    var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
    var target_input = document.getElementById(button.getAttribute('data-input'));
    var target_preview = document.getElementById(button.getAttribute('data-preview'));

    window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
    window.SetUrl = function (items) {
      var file_path = items.map(function (item) {
        return item.url;
      }).join(',');

      // set the value of the desired input to image url
      target_input.value = file_path;
      target_input.dispatchEvent(new Event('change'));

      // clear previous preview
      target_preview.innerHtml = '';

      // set or change the preview image src
      items.forEach(function (item) {
        let img = document.createElement('img')
        img.setAttribute('style', 'height: 5rem')
        img.setAttribute('src', item.thumb_url)
        target_preview.appendChild(img);
      });

      // trigger change event
      target_preview.dispatchEvent(new Event('change'));
    };
  });
};
     </script>
    
     @break;

     @case('exercise_list')
     
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/jszip.min.js') }}"></script>    
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/buttons.print.min.js') }}"></script>

        <script>
        $('#html5-extension').DataTable( {
            "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            buttons: {
                buttons: [
                    { extend: 'copy', className: 'btn btn-sm' },
                    { extend: 'csv', className: 'btn btn-sm' },
                    { extend: 'excel', className: 'btn btn-sm' },
                    { extend: 'print', className: 'btn btn-sm' }
                ]
            },
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        } );
    </script> 

        <script type="text/javascript">
    $(document).on('click' , '.delete_option' , function(){

       let id = $(this).attr('data-id');
        $('#delete-'+id).modal('show');

    });
    </script>
     
     @break

     @case('edit_exercise')
      
       <script>
        ClassicEditor
            .create( document.querySelector( '#ck_editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>


     @break

     @case('workout_plans')

         <script src="{{ asset('admin/plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/jszip.min.js') }}"></script>    
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/buttons.print.min.js') }}"></script>

        <script>
        $('#html5-extension').DataTable( {
            "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            buttons: {
                buttons: [
                    { extend: 'copy', className: 'btn btn-sm' },
                    { extend: 'csv', className: 'btn btn-sm' },
                    { extend: 'excel', className: 'btn btn-sm' },
                    { extend: 'print', className: 'btn btn-sm' }
                ]
            },
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        } );
    </script> 

        <script type="text/javascript">
    $(document).on('click' , '.delete_option' , function(){
       let id = $(this).attr('data-id');
        $('#delete-'+id).modal('show');

    });
    </script>
     @break

     @case('article_category_list')

              <script src="{{ asset('admin/plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/jszip.min.js') }}"></script>    
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/buttons.print.min.js') }}"></script>

        <script>
        $('#html5-extension').DataTable( {
            "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            buttons: {
                buttons: [
                    { extend: 'copy', className: 'btn btn-sm' },
                    { extend: 'csv', className: 'btn btn-sm' },
                    { extend: 'excel', className: 'btn btn-sm' },
                    { extend: 'print', className: 'btn btn-sm' }
                ]
            },
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        } );
    </script> 

        <script type="text/javascript">
    $(document).on('click' , '.delete_option' , function(){
       let id = $(this).attr('data-id');
        $('#delete-'+id).modal('show');

    });
    </script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
     <script type="text/javascript">
        $('#lfm').filemanager('file');
     </script>

     @break

     @case('add_article')

            <script>
                CKEDITOR.replace('ck_editor');
       
    </script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
     <script type="text/javascript">
        $('#lfm').filemanager('file');
     </script>

     @break

     @case('articles_list')

      <script src="{{ asset('admin/plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/jszip.min.js') }}"></script>    
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/buttons.print.min.js') }}"></script>

        <script>
        $('#html5-extension').DataTable( {
            "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            buttons: {
                buttons: [
                    { extend: 'copy', className: 'btn btn-sm' },
                    { extend: 'csv', className: 'btn btn-sm' },
                    { extend: 'excel', className: 'btn btn-sm' },
                    { extend: 'print', className: 'btn btn-sm' }
                ]
            },
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        } );
    </script> 

        <script type="text/javascript">
    $(document).on('click' , '.delete_option' , function(){
       let id = $(this).attr('data-id');
        $('#delete-'+id).modal('show');

    });
    </script>



     @break;

      @case('user_profile_data')
       
     <script>

function printReport(value) {
    var divToPrint = document.getElementById(value);

    var newWin = window.open('', 'Print-Window');
    newWin.document.open();
    newWin.document.write('<html><link href="./vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"><link href="./vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet"><link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"><link href="./vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet"><body onload="window.print()">' + divToPrint.innerHTML + '</body></html>');
    newWin.document.close();

    // setTimeout(function() { newWin.close(); }, 10);
}
</script>
    @break


    @case('author_list')

    
              <script src="{{ asset('admin/plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/jszip.min.js') }}"></script>    
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/buttons.print.min.js') }}"></script>

        <script>
        $('#html5-extension').DataTable( {
            "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            buttons: {
                buttons: [
                    { extend: 'copy', className: 'btn btn-sm' },
                    { extend: 'csv', className: 'btn btn-sm' },
                    { extend: 'excel', className: 'btn btn-sm' },
                    { extend: 'print', className: 'btn btn-sm' }
                ]
            },
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        } );
    </script> 

        <script type="text/javascript">
    $(document).on('click' , '.delete_option' , function(){
       let id = $(this).attr('data-id');
        $('#delete-'+id).modal('show');

    });
    </script>

    @break

    @case('add_workout_plans')

      <script>
         CKEDITOR.replace('ck_editor');
    </script>
        <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script type="text/javascript">
        let total_headings = Number($('.headings').val()) + 1;
        $('.headings').val(total_headings)
 
         $(document).on('click' , '.add_more' , function(){
          
         html=`<div class="row mt-3">
                        <div class="col-lg-5 col-md-5 col-sm-5">
                                                <label>Equipement Name</label>
                                                <input type="text" name="equiment_name[]" class="form-control" placeholder="Enter Equipement Name">
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 mt-4">
                                                <button type="button" class="btn btn-danger remove_option">Remove</button>
                                            </div>
                                        </div>`;

               $('.multiple_options').append(html);



        });
    </script>
    <script type="text/javascript">
      
      $('#lfm').filemanager('file');
      $('#lfm_2').filemanager('file');
      $('#lfm_3').filemanager('file');
      $('#lfm_4').filemanager('file');
      $('#lfm_4').filemanager('file');

      $('#lfm_5').filemanager('file');
      $('#lfm_workout').filemanager('file');

    </script>

        <script type="text/javascript">
    $(document).on('click','.remove_option',function(){
$(this).closest('.row').remove();
})
    </script>
    @break
  

   @case('recipe_category_list')
   

    
              <script src="{{ asset('admin/plugins/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/jszip.min.js') }}"></script>    
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/table/datatable/button-ext/buttons.print.min.js') }}"></script>

        <script>
        $('#html5-extension').DataTable( {
            "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            buttons: {
                buttons: [
                    { extend: 'copy', className: 'btn btn-sm' },
                    { extend: 'csv', className: 'btn btn-sm' },
                    { extend: 'excel', className: 'btn btn-sm' },
                    { extend: 'print', className: 'btn btn-sm' }
                ]
            },
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7 
        } );
    </script>

        <script type="text/javascript">
    $(document).on('click' , '.delete_option' , function(){
       let id = $(this).attr('data-id');
        $('#delete-'+id).modal('show');

    });
    </script>

   @break;
    
    @endswitch
    @endif 

