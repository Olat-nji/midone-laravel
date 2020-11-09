<div>
   @section('header')
    <a href="{{url('settings')}}" class="sm:hidden">{{ __('Settings') }}</a>
    <i data-feather="chevron-right" class="breadcrumb__icon sm:hidden"></i>
    <a href="" class="breadcrumb--active">Services</a>
    @endsection
   
    
      <div x-data="{ tab : 'index' }">
        <div x-show="tab === 'index'">
            <x-services.services :services="$services" />
        </div>

        <div x-show="tab === 'create'">
            <x-services.new />
        </div>



    </div>
    
</div>
