<div class="row">
    <div class="mb-3 md:col-6 lg:col-4">
        <x-input name="name" label="Name" :value="$user->first_name" required></x-input>
    </div>
    <div class="mb-3 md:col-6 lg:col-4">
        <x-input name="email" label="Email" type="email" :value="$user->email" required></x-input>
    </div>
    <div class="mb-3 md:col-6 lg:col-4">
        <x-input name="password" label="Password" type="password" :value="$user->password" required></x-input>
    </div>
{{--    <div class="mb-3 md:col-6 lg:col-4">--}}
{{--        <x-select name="gender" for="gender" label="Gender" value="$user->gender">--}}
{{--            @if($user->depo_id !== null)--}}
{{--                <option value="{{ $user->gender }}" class="hidden" selected>{{ ucfirst($user->gender) }}</option>--}}
{{--                <option value="male">Male</option>--}}
{{--                <option value="female">Female</option>--}}
{{--            @else--}}
{{--                <option value="male">Male</option>--}}
{{--                <option value="female">Female</option>--}}
{{--            @endif--}}
{{--        </x-select>--}}
{{--    </div>--}}
{{--    <div class="mb-3 md:col-6 lg:col-4">--}}
{{--        <x-input name="profession" label="Profession" :value="$user->profession"></x-input>--}}
{{--    </div>--}}
{{--    <div class="mb-3 md:col-6 lg:col-4">--}}
{{--        <x-input name="phone" label="Phone" type="tel" placeholder="07X XXX XXX" :value="$user->phone"></x-input>--}}
{{--    </div>--}}
{{--    <div class="mb-3 md:col-6 lg:col-4">--}}
{{--        <x-input name="image" label="Profile Image" type="file" :value="$user->image"></x-input>--}}
{{--    </div>--}}
    @admin
    <label class="mb-2 font-semibold" for="Admin">Admin</label>
    <div class="flex items-center space-x-2">
        <x-radio name="admin" id="aktiv" label="Yes" value="1" :checked="$user->admin == 1 ? 'checked' : null" required></x-radio>
        <x-radio name="admin" id="pasiv" label="No" value="0" :checked="$user->admin == 0 ? 'checked' : null"></x-radio>
    </div>
    @endadmin
</div>
