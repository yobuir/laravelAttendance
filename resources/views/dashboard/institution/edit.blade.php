<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Institution') }}
        </h2>
    </x-slot>

    <div class="relative p-4 w-fullflex justify-center">
        <!-- Modal content -->
        <div class="relative">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Edit institution
                </h3>
                <form class="" method="POST" action="{{ route('institutions.destroy', $institution->id) }}">
                    @csrf
                    <x-danger-button type="submit" class="">
                        Delete
                    </x-danger-button>
                </form>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <form class="max-w-sm mx-auto" method="POST"
                    action="{{ route('institutions.update', $institution->id) }}">
                    @csrf
                    <div class="mb-5">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                            email</label>
                        <input type="email" id="email" value="{{ $institution->email }}"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="" name="email" required />
                    </div>
                    <div class="mb-5">
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">name</label>
                        <input type="text" id="name" name="name" value="{{ $institution->name }}"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            required />
                    </div>
                    <div class="mb-5">
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            address</label>
                        <input type="text" id="address" name="address" value="{{ $institution->address }}"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            required />
                    </div>
                    <div class="mb-5">
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            phone</label>
                        <input type="tel" id="phone" name="phone" value="{{ $institution->phone }}"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            required />
                    </div>

                    <div class="mb-5">
                        <label for="url" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            url</label>
                        <input type="text" id="url" name="url" value="{{ $institution->url }}"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            required />
                    </div>

                    <x-button type="submit" class="">Save
                        institution</x-button>
                </form>

            </div>
        </div>
    </div>
    </div>



</x-app-layout>
