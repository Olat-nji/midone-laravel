<div>
    @section('header')
    <a href="{{url('settings')}}" class="sm:hidden">{{ __('Settings') }}</a>
    <i data-feather="chevron-right" class="breadcrumb__icon sm:hidden"></i>
    <a href="" class="breadcrumb--active">Pricing</a>
    @endsection
    <div x-data="{ tab : 'index' }">
        <div x-show="tab === 'index'">
            <x-pricing.prices :pricings="$pricings" />
        </div>

        <div x-show="tab === 'create'">
            <x-pricing.new />
        </div>



    </div>
</div>
