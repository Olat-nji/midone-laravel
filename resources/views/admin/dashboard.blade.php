

<div>
    @section("header")
        
          <a href="" class="breadcrumb--active">  {{ __('Dashboard') }} </a>
        
    @endsection

@if(is_admin())
{{-- <x-welcome /> --}}
@include('components.welcome')
@else
{{-- <x-welcome-guest /> --}}
@include('components.welcome-guest')
@endif
            
        
      
    
   @push('scripts')
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        @this.on('triggerDelete', id => {
            Swal.fire({
                title: 'Are You Sure?',
                text: 'This record will be deleted!',
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#aaa',
                confirmButtonText: 'Delete!'
            }).then((result) => {
         //if user clicks on delete
                if (result.value) {
             // calling destroy method to delete
                    @this.call('delete',id)
             // success response
                    Swal.fire({title: 'Record deleted successfully!', icon: 'success'});
                } else {
                    Swal.fire({
                        title: 'Operation Cancelled!',
                        icon: 'success'
                    });
                }
            });
        });
    })
</script>
@endpush

   
   </div>


