<x-app-layout>
    <x-slot name="header">
        
            {{ __('Dashboard') }}
        
    </x-slot>

<x-welcome />
            
        
      
    
    @section('scripts')
<script>

    
// var tour = new Tour({
//     name: "{{ Str::uuid() }}",
    
//     backdrop: true,
//   steps: [
    
  
//   {
//     element: "#tour1",
//    title:'Welcome' ,
    
//     content: "You can directly view your stats here"
//   }
// ],
// template:'@include('tailwind-components.tour-modal')',
// onStart: function (tour) {
//     const body = document.querySelector('body')
//       const modal = document.querySelector('.modal')
      
//       body.classList.toggle('modal-active')
// },});

// // Initialize the tour
// tour.init();

// // Start the tour
// tour.start();

// var tou = new Tour({
//     name: "aslkds",
//     backdrop: true,
//   steps: [
    
//   {
//     element: "#profile",
    
//     title:'Profile',
    
//     content: "Manage settings like Personal details, Two factor authentication, Browser Sessions and also delete your account here"
    
//   }
  
// ],
// template:'@include('tailwind-components.tour-modal')'
// });

// // Initialize the tour
// tou.init();



// function startTour(){
  
  
// // Start the tour
//   tou.start();
//     };
</script>
@endsection
</x-app-layout>


