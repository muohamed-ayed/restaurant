<x-app-layout>
    <div class="row g-4">
        <div class="col-12"><div class="surface p-4 p-lg-5">@include('profile.partials.update-profile-information-form')</div></div>
        <div class="col-12"><div class="surface p-4 p-lg-5">@include('profile.partials.update-password-form')</div></div>
        <div class="col-12"><div class="surface p-4 p-lg-5">@include('profile.partials.delete-user-form')</div></div>
    </div>
</x-app-layout>
