<div class="row">
    <div class="mb-3 md:col-6 lg:col-4">
        <x-input name="name" label="Name" :value="$user->name" required></x-input>
    </div>
    <div class="mb-3 md:col-6 lg:col-4">
        <x-input name="email" label="Email" type="email" :value="$user->email" required></x-input>
    </div>
    <div class="mb-3 md:col-6 lg:col-4">
        <x-input name="password" label="Password" type="password" :value="$user->password" required></x-input>
    </div>
{{--    <div class="mb-3 md:col-6 lg:col-4">--}}
{{--        <x-input name="depo_id" label="Depo ID" :value="$user->depo_id" required></x-input>--}}
{{--    </div>--}}
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
{{--   s--}}
</div>
