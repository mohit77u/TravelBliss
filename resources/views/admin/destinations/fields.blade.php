<div class="destionation grid xl:grid-cols-7 grid-cols-1 gap-5" wire:model.debounce.365ms="destination.content" wire:ignore>
    <div class="bg-white p-6 rounded xl:col-span-5">
        <div class="form">
            <!-- top basic information -->
            <h4 class="my-3 text-slate-500 text-md pb-1 inline-block">Basic Information</h4>
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-3 mb-3">
                <!-- name -->
                <div class="form-group">
                    <label class="block text-slate-800 mb-1.5">Destination Name</label>
                    <input type="text" id="name" class="w-full bg-emerald-50/25 text-slate-800 py-2.5 px-2 border border-gray-200 focus:ring-0 focus:border-emerald-400 focus:outline-none" placeholder="Name" wire:model.defer="destination.name">
                </div>
                <!-- state -->
                <div class="form-group">
                    <div class="custom-dropdown relative">
                        <label class="block text-slate-800 mb-1.5">State</label>
                        <!-- <select class="field " id="states" wire:model="state">
                            <option value="1" selected>State one</option>
                            <option value="2">State two</option>
                        </select> -->
                        <!-- <input type="text" class="field hidden" name="state" wire:model="destination.city">     -->
                        <!-- <select class="field hidden" wire:model.defer="destination.state"></select> -->
                        <button type="button" class="relative custom-dropdown-btn flex items-center bg-emerald-50/25 justify-between w-full border border-gray-200 py-2.5 px-3 text-md text-slate-800 focus:ring-0 focus:border-emerald-400 focus:outline-none">
                            <span class="truncate max-w-[150px] text-left block">Select State</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="arrow absolute right-2 top-3 transition-all duration-300 fill-gray-500 w-4 h-4" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </button>
                        <div class="custom-dropdown-menu absolute z-[100] left-0 top-[110%] w-full h-auto bg-white border border-gray-200 rounded rounded-t-none hidden" id="state">
                            <div class="max-h-[250px] overflow-y-auto">
                                <ul>
                                    <li class="dropdown-item block py-2 bg-white border-b border-gray-200 px-3 text-slate-800 cursor-pointer hover:bg-emerald-50/25" data-value="">Select State</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- cities -->
                <div class="form-group">
                    <div class="custom-dropdown relative">
                        <label class="block text-slate-800 mb-1.5">City</label>
                        <input type="text" class="field hidden" name="city" wire:model="destination.city">
                        <!-- <select class="city-field hidden" wire:model.defer="destination.city"></select> -->
                        <button type="button" class="custom-dropdown-btn bg-emerald-50/25 flex items-center justify-between w-full border border-gray-200 py-2.5 px-3 text-md text-slate-800 focus:ring-0 focus:border-emerald-400 focus:outline-none">
                            <span class="truncate max-w-[150px] text-left block">Select City</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="arrow transition-all duration-300 fill-gray-500 w-4 h-4" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </button>
                        <div class="custom-dropdown-menu absolute z-[100] left-0 top-[110%] w-full h-auto bg-white border border-gray-200 rounded rounded-t-none hidden" id="cities">
                            <div class="max-h-[250px] overflow-y-auto">
                                <ul>
                                    <li class="dropdown-item block py-2 bg-white border-b border-gray-200 px-3 text-slate-800 cursor-pointer hover:bg-emerald-50/25" data-value="">Select City</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- descriptions -->
            <div class="form-group mt-4 mb-3">
                <label class="block text-slate-800 mb-1.5">Description</label>
                <textarea rows="6" class="w-full bg-emerald-50/25 text-slate-800 py-2 px-2 border border-gray-200 focus:ring-0 focus:border-emerald-400 focus:outline-none" placeholder="Description" wire:model.defer="destination.description"></textarea>
            </div>


            <!-- content -->
            <div class="form-group mb-3">
                <label class="block text-slate-800 mb-1.5">Content</label>
                <!-- <textarea name="content" rows="6" class="w-full bg-emerald-50/25 text-slate-800 py-2 px-2 border border-gray-200 focus:ring-0 focus:border-emerald-400 focus:outline-none" placeholder="Content"></textarea> -->
                <input id="content" type="hidden" wire:model.defer="destination.content">
                <trix-editor input="content" class="bg-emerald-50/25"></trix-editor>
            </div>

            <!-- featured image -->
            <div class="form-group mb-3">
                <div class="image-upload">
                    <label class="block text-slate-800 mb-1.5">Featured Image</label>
                    <input type="file" class="xl:w-1/3 lg:w-7/12 w-full bg-emerald-50/25 text-slate-800 py-2 px-2 border border-gray-200 focus:ring-0 focus:border-emerald-400 focus:outline-none" wire:model.defer="destination.featured_image">
                </div>
                <!-- for preview purpose -->
                <div class="my-5 hidden">
                    <div class="grid lg:grid-cols-6 md:grid-cols-3 grid-cols-1 gap-4 image-container">
                        <img src="" alt="preview" class="hidden">
                    </div>
                </div>
            </div>

            <!-- images -->
            <div class="form-group mb-3">
                <div class="image-upload">
                    <label class="block text-slate-800 mb-1.5">Gallery Images</label>
                    <input type="file" class="xl:w-1/3 lg:w-7/12 w-full bg-emerald-50/25 text-slate-800 py-2 px-2 border border-gray-200 focus:ring-0 focus:border-emerald-400 focus:outline-none" multiple wire:model.defer="destination.images[]">
                </div>
                <!-- for preview purpose -->
                <div class="my-5 hidden">
                    <div class="grid lg:grid-cols-6 md:grid-cols-3 grid-cols-1 gap-4 image-container">
                        <img src="" alt="preview" class="hidden">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white p-6 rounded xl:col-span-2">
        <h4 class="my-3 text-slate-500 text-md pb-1 inline-block">Other Information</h4>
        <!-- category -->
        <div class="form-group mb-3">
            <div class="custom-dropdown relative">
                <label class="block text-slate-800 mb-1.5">Category</label>
                <input type="text" value="" class="category-field hidden" wire:model.defer="destination.category">
                <button type="button" class="relative custom-dropdown-btn flex items-center bg-emerald-50/25 justify-between w-full border border-gray-200 py-2.5 px-3 text-md text-slate-800 focus:ring-0 focus:border-emerald-400 focus:outline-none">
                    <span class="truncate max-w-[150px] text-left block">Select Category</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="arrow absolute right-2 top-3 transition-all duration-300 fill-gray-500 w-4 h-4" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </button>
                <div class="custom-dropdown-menu absolute z-[100] left-0 top-[110%] w-full h-auto bg-white border border-gray-200 rounded rounded-t-none hidden" id="category">
                    <div class="max-h-[250px] overflow-y-auto">
                        <ul>
                            <li class="dropdown-item block py-2 bg-white border-b border-gray-200 px-3 text-slate-800 cursor-pointer hover:bg-emerald-50/25" data-value="">Select State</li>
                            @foreach (config('access.destination_category') as $key => $category )
                                <li class="dropdown-item block py-2 bg-white border-b border-gray-200 px-3 text-slate-800 cursor-pointer hover:bg-emerald-50/25" data-value="{{$key}}">{{$category}}</li>
                            @endforeach
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
       
        <!-- features -->
        <div class="form-group mb-3 destination-features">
            <div class="flex items-center justify-between">
                <h4 class="my-3 text-slate-500 text-md pb-1 inline-block">Features</h4>
                <button type="button" class="add-row" title="Add Row">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-emerald-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </button>
            </div>
            <div class="features-form flex items-center justify-between gap-2 mb-3">
                <input class="w-full bg-emerald-50/25 text-slate-800 py-2 px-2 border border-gray-200 focus:ring-0 focus:border-emerald-400 focus:outline-none" placeholder="Features" wire:model.defer="destination.features[]">
                <button type="button" class="remove-row hidden" title="Remove Row">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>
                </button>
            </div>
        </div>
        <!-- submit btns -->
        <div class="form-group mt-12 flex flex-col sm:flex-row gap-2 items-center justify-end">
            <a href="#" class="bg-red-500 text-center text-white text-sm px-8 py-3 block sm:w-auto w-full">Cancel</a>
            <button type="button" wire:click.prevent="CreateDestination()" class="bg-emerald-400 text-center text-white text-sm px-8 py-3 block sm:w-auto w-full">Submit</a>
        </div>
    </div>
</div>

@push('before-scripts')
    <!-- <script src="https://cdn.tiny.cloud/1/v34ikzswzxl2j62l23ywmczucwejytrxjjj1c0luhiqv1pvr/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> -->
@endpush