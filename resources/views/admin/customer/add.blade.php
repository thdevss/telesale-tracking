<x-app-layout>
    <x-slot name="header">
        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add new Customer') }}
           
        </h2>
        
    </x-slot>

    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($errors->any())
            <div class="p-4 mb-4 text-sm text-yellow-700 bg-yellow-100 rounded-lg dark:bg-yellow-200 dark:text-yellow-800" role="alert">
                  <strong>Whoops!</strong> There were some problems with your input.<br><br>
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    

                  <form action="{{ route('admin.customer.store') }}" method="post">
                    @csrf
                    <div class="mb-6">
                      <label for="telephone_number" class="block mb-2 text-sm font-medium text-gray-900">Telephone Number</label>
                      <input type="text" value="{{ old('telephone_number') }}" id="telephone_number" name="telephone_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
                    </div>
                    <div class="mb-6">
                      <label for="full_name" class="block mb-2 text-sm font-medium text-gray-900">Full name</label>
                      <input type="text" value="{{ old('full_name') }}" id="full_name" name="full_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
                    </div>
                    <div class="mb-6">
                      <label for="nick_name" class="block mb-2 text-sm font-medium text-gray-900">Nick Name</label>
                      <input type="text" value="{{ old('nick_name') }}" id="nick_name" name="nick_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
                    </div>
                    <div class="mb-6">
                      <label for="remark" class="block mb-2 text-sm font-medium text-gray-900">Remark</label>
                      <input type="text" value="{{ old('remark') }}" id="remark" name="remark" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
                    </div>
                    
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add new Customer</button>
                  </form>

                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
