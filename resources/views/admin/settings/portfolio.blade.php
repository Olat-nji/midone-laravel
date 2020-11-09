<div>
   @section('header')
    <a href="{{url('settings')}}" class="sm:hidden">{{ __('Settings') }}</a>
    <i data-feather="chevron-right" class="breadcrumb__icon sm:hidden"></i>
    <a href="" class="breadcrumb--active">Portfolio</a>
    @endsection
   
    
      <div x-data="{ tab : 'index' }">
        <div x-show="tab === 'index'">
            <x-portfolio.index :portfolios="$portfolios" />
        </div>

        <div x-show="tab === 'create'">
            <x-portfolio.create />
        </div>



    </div>
    
</div>
