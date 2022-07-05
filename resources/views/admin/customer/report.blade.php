<x-app-layout>
    <x-slot name="header">
        
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Campaign Report') }}
            <span class="float-right leading-tight">
                <a href="{{ route('admin.campaign.report.list', [ 'campaign' => $campaign ]) }}" class="bg-blue-500 hover:bg-blue-700 text-sm text-white font-bold py-1 mb-2 px-4 rounded-full">
                    View All Customer list in this campaign.
                </a>
            </span>
        </h2>
        
    </x-slot>

    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex">
                <div class="px-5 w-4/12">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <p class="mb-2">
                                <span>Campaign: </span>
                                <span class="text-md font-semibold">{{ $campaign->name }}</span>
                            </p>
                            <p class="mb-2">
                                <span>Description: </span><br />
                                <span class="text-md font-semibold">{{ ($campaign->description != '') ? $campaign->description : '-' }}</span>
                            </p>
                            <p class="mb-2">
                                <span>Success Target Rate: </span>
                                <span class="text-md font-semibold">70%</span>
                            </p>
                            <p class="mb-2">
                                <span>Start At: </span>
                                <span class="text-md font-semibold">{{ $campaign->start_at }}</span>
                            </p>
                            <p class="mb-2">
                                <span>End At: </span>
                                <span class="text-md font-semibold">{{ $campaign->end_at }}</span>
                            </p>
                            <p class="mb-2">
                                <span>Owner Campaign: </span>
                                <span class="text-md font-semibold">staff-name</span>
                            </p>
                        </div>
                    </div>
                    
                    <div class="mt-5 mb-5 text-center ">
                        

                        
                    </div>

                </div>
                <div class="w-8/12">

                    <div class="flex">
                        <div class="pr-2 w-3/12">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 bg-white border-b border-gray-200">
                                    // badge section
                                </div>
                            </div>
                        </div>

                        <div class="px-2 w-3/12">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 bg-white border-b border-gray-200">
                                    // badge section
                                </div>
                            </div>
                        </div>

                        <div class="px-2 w-3/12">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 bg-white border-b border-gray-200">
                                    // badge section
                                </div>
                            </div>
                        </div>

                        <div class="pl-2 w-3/12">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                <div class="p-6 bg-white border-b border-gray-200">
                                    // badge section
                                </div>
                            </div>
                        </div>


                    </div>

                    
                    <div class="mt-5 mb-5"></div>
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            // graph section
                        </div>
                    </div>
                    <div class="mt-5 mb-5"></div>
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            // graph section
                        </div>
                    </div>
                </div>
            </div>
            



        </div>
    </div>
</x-app-layout>
