<!-- success toast -->
@if (session()->has('success'))
    <div id="toast-success" class="toast flex fixed right-10 bottom-5 z-50 items-center p-4 mb-4 w-full max-w-xs text-gray-200 rounded bg-[#0d1117] border border-gray-700 shadow  animate__animated animate__fadeInRight" role="alert">
        <div class="inline-flex justify-center items-center w-6 h-6 bg-lime-500 rounded-full text-white">
            <svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Check icon</span>
        </div>
        <div class="ml-3 text-sm font-normal text-gray-200">{{ session('success') }}</div>
        <button type="button" class="close-toast-btn ml-auto -mx-1.5 -my-1.5  text-white" data-dismiss-target="#toast-success" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
    </div>
@endif

<!-- error toast -->
@if (session()->has('error'))
<div id="toast-error" class="toast flex fixed right-10 bottom-5 z-50 items-center p-4 mb-4 w-full max-w-xs text-gray-200 rounded bg-[#0d1117] border border-gray-700 shadow  animate__animated animate__fadeInRight" role="alert">
    <div class="inline-flex justify-center items-center w-6 h-6 rounded-full text-white">
        <svg class="w-6 h-6" viewBox="0 0 32 32" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g id="Error_1_"><g id="Error"><circle cx="16" cy="16" id="BG" r="16" style="fill:#D72828;"/><path d="M14.5,25h3v-3h-3V25z M14.5,6v13h3V6H14.5z" id="Exclamatory_x5F_Sign" style="fill:#E6E6E6;"/></g></g></g></svg>
        <span class="sr-only">Check icon</span>
    </div>
    <div class="ml-3 text-sm font-normal text-gray-200">{{ session('error') }}</div>
    <button type="button" class="close-toast-btn ml-auto -mx-1.5 -my-1.5  text-white" data-dismiss-target="#toast-error" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
</div>
@endif