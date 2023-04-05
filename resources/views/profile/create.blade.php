<div class="mt-6 row md:mt-12">
    <div class="mx-auto lg:col-10">
        <div class="p-6 bg-white shadow-md">
            <form method="POST" action="{{ route('profile.store') }}" enctype="multipart/form-data">
                @csrf
                <p class="mb-4 text-xl font-semibold">
                    Add User
                </p>
                <div class="py-6 border-gray-200 border-y-2">
                    @include('profile._form', ['user' => new App\Models\User])
                </div>
                <div class="flex items-center justify-between mt-4">
                    <button href="{{ route ('profile.index')}}">
                        Cancel
                    </button>
                    <button primary type="submit" size="md">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
