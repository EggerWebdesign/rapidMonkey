<x-app-layout title="Create Post">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Create Post
        </h2>
        <div class="z-0 bg-white rounded-lg shadow-md dark:bg-gray-800" x-data="{tab: 1}">
            <form type="post" action="">
                <!-- Tabs -->
                <div class="flex justify-start border-b border-solid rounded-t-lg">
                    <a class="z-10 block px-6 py-3 text-center text-gray-700 border-b-2 border-solid cursor-pointer dark:text-gray-400"
                        :class="{'border-purple-600': tab === 1, 'border-0': tab !== 1}" @click.prevent="tab = 1">
                        {{__('Post content')}}
                    </a>
                    <a class="z-10 block px-6 py-3 text-center text-gray-700 border-b-2 border-solid cursor-pointer dark:text-gray-400"
                        :class="{'border-purple-600': tab === 2, 'border-0': tab !== 2}" @click.prevent="tab = 2"
                        @click.prevent="tab = 2">
                        {{ __('General') }}
                    </a>
                    <a class="z-10 block px-6 py-3 text-center text-gray-700 border-b-2 border-solid cursor-pointer dark:text-gray-400"
                        :class="{'border-purple-600': tab === 3, 'border-0': tab !== 3}" @click.prevent="tab = 3"
                        @click.prevent="tab = 3">
                        {{ __('SEO') }}
                    </a>
                    <a class="z-10 block px-6 py-3 text-center text-gray-700 border-b-2 border-solid cursor-pointer dark:text-gray-400"
                        :class="{'border-purple-600': tab === 4, 'border-0': tab !== 4}" @click.prevent="tab = 4"
                        @click.prevent="tab = 3">
                        {{ __('Social media') }}
                    </a>
                    <a class="z-10 block px-6 py-3 text-center text-gray-700 border-b-2 border-solid cursor-pointer dark:text-gray-400"
                        :class="{'border-purple-600': tab === 5, 'border-0': tab !== 5}" @click.prevent="tab = 5"
                        @click.prevent="tab = 3">
                        {{ __('Metadta') }}
                    </a>
                    <a class="z-10 block px-6 py-3 text-center text-gray-700 border-b-2 border-solid cursor-pointer dark:text-gray-400"
                        :class="{'border-purple-600': tab === 6, 'border-0': tab !== 6}" @click.prevent="tab = 6"
                        @click.prevent="tab = 4">
                        {{ __('Settings') }}
                    </a>
                </div>

                <!-- Post content -->
                <div class="px-4 pt-8 pb-3 mb-2 text-gray-700 rounded-b-lg dark:text-gray-400" x-show="tab === 1">
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Title</span>
                        <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Post Title" />
                    </label>
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Message</span>
                        <textarea class="w-full mt-1 text-sm tinymce dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="20" placeholder="Enter some long post content."></textarea>
                    </label>
                </div>

                <!-- General -->
                <div class="px-4 pt-8 pb-3 mb-2 text-gray-700 rounded-b-lg dark:text-gray-400" x-show="tab === 2">
                    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                        {{__('Type')}}
                    </h4>
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">
                            {{__('Post / Page')}}
                        </span>
                        <select class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">
                            <option value="post">Post</option>
                            <option value="page">Page</option>
                        </select>
                    </label>
                    <h4 class="mt-6 mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                        {{__('Title')}}
                    </h4>
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">{{__('Slug')}}</span>
                        <div class="flex items-center">
                            <span class="border-none brounded-r-none dark:bg-gray-700 dark:text-gray-300 dark:focus:shadow-outline-gray form-input">{{url()->to('/')}}/</span>
                        <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="{{__('Slug')}}" />
                        </div>
                    </label>
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">{{__('Alternative Navigation Title')}}</span>
                        <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="{{__('Alternative Navigation Title')}}" />
                    </label>
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">{{__('Subtitle')}}</span>
                        <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="{{__('Subtitle')}}" />
                    </label>
                </div>

                <!-- SEO-->
                <div class="px-4 pt-8 pb-3 mb-2 text-gray-700 rounded-b-lg dark:text-gray-400" x-show="tab === 3">
                    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                        {{__('General SEO settings')}}
                    </h4>
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Title</span>
                        <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Meta Title" />
                        <span class="text-gray-500 dark:text-gray-600">{{__('The page title is displayed in the browser title and on search engines')}}</span>
                    </label>
                    <h4 class="mt-6 mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                        {{__('Robot instructions')}}
                    </h4>
                    <div class="flex text-sm">
                        <label class="flex items-center dark:text-gray-400">
                            <input type="checkbox" class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"/>
                            <span class="ml-2">
                                {{__('Do not index this page (noindex)')}}
                            </span>
                        </label>
                    </div>
                    <div class="flex mt-4 text-sm">
                        <label class="flex items-center dark:text-gray-400">
                            <input type="checkbox" class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"/>
                            <span class="ml-2">
                                {{__('Do not follow this page (nofollow)')}}
                            </span>
                        </label>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="px-4 pt-8 pb-3 mb-2 text-gray-700 rounded-b-lg dark:text-gray-400" x-show="tab === 4">
                    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                        {{__('Open Graph (Facebook)')}}
                    </h4>
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">{{__('Title')}}</span>
                        <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="{{__('Title')}}" />
                    </label>
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">{{__('Description')}}</span>
                        <textarea class="w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="{{__('Enter some description.')}}"></textarea>
                    </label>
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">{{__('Image')}}</span>
                        <input type="file" accept="image/png, image/jpeg" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" />
                        <span class="text-gray-500 dark:text-gray-600">{{__('It must be a png or jpg image.')}}</span>
                    </label>

                    <h4 class="mt-6 mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                        {{__('Twitter Cards')}}
                    </h4>
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">{{__('Title')}}</span>
                        <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="{{__('Title')}}" />
                    </label>
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">{{__('Description')}}</span>
                        <textarea class="w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="{{__('Enter some description.')}}"></textarea>
                    </label>
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">{{__('Image')}}</span>
                        <input type="file" accept="image/png, image/jpeg" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" />
                        <span class="text-gray-500 dark:text-gray-600">{{__('It must be a png or jpg image.')}}</span>
                    </label>
                </div>

                <!-- Metadata -->
                <div class="px-4 pb-3 mb-2 text-gray-700 rounded-b-lg dark:text-gray-400" x-show="tab === 5">
                    <h4 class="mt-6 mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                        {{__('Abstract')}}
                    </h4>
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">{{__('Abstract')}}</span>
                        <textarea class="w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="6" placeholder="{{__('Enter some short Text about content from the post / page.')}}"></textarea>
                    </label>

                    <h4 class="mt-6 mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                        {{__('Meta Tags')}}
                    </h4>
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">{{__('Keywords')}}</span>
                        <textarea class="w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="{{__('Enter some keywords and separate each keyword with a comma.')}}"></textarea>
                        <span class="text-gray-500 dark:text-gray-600">{{__('Separate each keyword with a comma.')}}</span>
                    </label>
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">{{__('Description')}}</span>
                        <textarea class="w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="{{__('Enter some description.')}}"></textarea>
                    </label>

                    <h4 class="mt-6 mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                        {{__('Editorial')}}
                    </h4>
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">{{__('Author Name')}}</span>
                        <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="{{__('Author Name')}}" />
                    </label>
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">{{__('Author E-Mail')}}</span>
                        <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="{{__('Author E-Mail')}}" />
                    </label>
                </div>

                <!-- Settings -->
                <div class="px-4 pt-8 pb-3 mb-2 text-gray-700 rounded-b-lg dark:text-gray-400" x-show="tab === 6">
                    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                        {{__('Visibility')}}
                    </h4>
                    <div class="flex mt-4 text-sm">
                        <label class="flex items-center dark:text-gray-400">
                            <input type="checkbox" class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" checked/>
                            <span class="ml-2">
                                {{__('Page public')}}
                            </span>
                        </label>
                    </div>
                    <h4 class="mt-6 mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                        {{__('Publication information')}}
                    </h4>
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">{{__('Release date')}}</span>
                        <input type="date"  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="{{__('Release date')}}" />
                    </label>
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">{{__('Expiry Date')}}</span>
                        <input type="date" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="{{__('Expiry Date')}}" />
                    </label>
                </div>
                <button type="submit" class="px-4 py-2 m-4 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg mpx-4 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    {{__('Save Post')}}
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
