<div>

    @section("header")
        <h2 class="font-semibold text-xl text-gray-800 leading-tight"  >
            {{ __('Users') }}
        </h2>
    @endsection

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                
                <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                      <th class="px-4 py-3">Client</th>
                      <th class="px-4 py-3">Projects</th>
                      
                      <th class="px-4 py-3">Time Registered</th>
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >
                  @foreach($users as $key => $value)
                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                          <!-- Avatar with inset shadow -->
                          <div
                            class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                          >
                            <img
                              class="object-cover w-full h-full rounded-full"
                              src="{{ $value->profile_photo_url }}"
                              alt="{{ $value->name }}"
                              loading="lazy"
                            />
                            <div
                              class="absolute inset-0 rounded-full shadow-inner"
                              aria-hidden="true"
                            ></div>
                          </div>
                          <div>
                            <p class="font-semibold">{{ $value->name }}</p>
                            <p class="text-xs text-gray-600 dark:text-gray-400">
                            @php
                                $teams=$value->allTeams();
                            @endphp
                              @for($i=0; $i<count($teams) ;$i++)
                                  {{ $teams[$i]->name }} @if($i<count($value->allTeams())-1 )|@endif
                              @endfor
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        0
                      {{-- </td>
                      <td class="px-4 py-3 text-xs">
                        <span
                          class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                          Approved
                        </span>
                      </td> --}}
                      <td class="px-4 py-3 text-sm">
                        {{ $value->created_at->diffForHumans() }}
                      </td>
                    </tr>  
                  @endforeach
                    
                  </tbody>
                </table>
              </div>
          
          {{ $users->links('livewire.includes.pagination') }}
            </div>


                
            </div>
        </div>
    </div>

</div>