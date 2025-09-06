<aside class="w-64 min-h-screen" aria-label="Sidebar">
    <div class="overflow-y-auto py-4 px-3">
        <div class="flex items-center mb-5 justify-center">
            <svg class="h-8 w-8 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V7m-5 4l-5 5m0 0l-5-5m5 5V4"></path></svg>
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-black ml-2">ARSIPKU</span>
        </div>
        <hr class="my-3 border-gray-200 dark:border-gray-700">
        <ul class="space-y-2 mt-8">

            <li>
                <a href="{{ route('dashboard') }}" class="flex items
                    -center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-black hover:bg-gray-100 dark:hover:bg-purple-300 group">
                    <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('kategori.index') }}" class="flex items-center p-2
                    text-base font-normal text-gray-900 rounded-lg dark:text-black hover:bg-gray-100 dark:hover:bg-purple-300 group">
                    <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a4 4 0 01-4 4H7a4 4 0 01-4-4V5z"></path></svg>
                    <span class="ml-3">Kategori Surat</span>
                </a>
            </li>
            <li>
                <a href="{{ route('about') }}" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-black hover:bg-gray-100 dark:hover:bg-purple-300 group">
                    <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <span class="ml-3">About</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
