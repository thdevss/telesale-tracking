<x-app-layout>
    <x-slot name="header">
        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Campaign Report: Customer list') }}
            <span class="float-right leading-tight">
                <a href="{{ route('admin.campaign.add') }}" class="bg-blue-500 hover:bg-blue-700 text-sm text-white font-bold py-1 mb-2 px-4 rounded-full">
                    + Add new Campaign
                </a>
            </span>
        </h2>
        
    </x-slot>

    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex">
                
                <div class="px-5 w-full">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <table class="table-auto w-full">
                                <thead class="bg-white border-b">
                                    <tr>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                            Contact Date
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                            Customer Info
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                            Status
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                            Remark
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $i => $customer)
                                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $customer->updated_at }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <p>Name: {{ $customer->customer->full_name }} ({{ $customer->customer->nick_name }})</p>
                                            <p>Telephone Number: [{{ $customer->customer->telephone_number }}]</p>
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">
                                                {{ $customer->status->name }}
                                            </span>
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{ $customer->remark }}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="mt-5 mb-5">
                                {{ $customers->links() }}
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
            



        </div>
    </div>
</x-app-layout>
