<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('organizations-add') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="location" value="{{ __('Location') }}" />
                <x-input id="location" class="block mt-1 w-full" type="text" name="location" :value="old('location')" required autocomplete="location" />
            </div>

            <div class="mt-4">
                <label for="emergency_type" class="block font-medium text-sm text-gray-700">Emergency type</label>
                <select name="emergency_type" id="emergency_type" class='border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full'>
                    <option value="Fire">Fire</option>
                    <option value="Medical Emergency">Medical Emergency</option>
                    <option value="Road Accident">Road Accident</option>
                    <option value="Flood">Flood</option>
                    <option value="Drought">Drought</option>
                    <option value="Terrorism">Terrorism</option>
                    <option value="Violence">Violence</option>
                    <option value="Animal Attack">Animal Attack</option>
                    <option value="Building Collapse">Building Collapse</option>
                    <option value="Chemical Spill">Chemical Spill</option>
                    <option value="Food Poisoning">Food Poisoning</option>
                    <option value="Water Contamination">Water Contamination</option>
                    <option value="Missing Person">Missing Person</option>
                    <option value="Child Abduction">Child Abduction</option>
                    <option value="Boat Accident">Boat Accident</option>
                    <option value="Snake Bite">Snake Bite</option>
                    <option value="Electrocution">Electrocution</option>
                    <option value="Industrial Accident">Industrial Accident</option>
                    <option value="Poisoning">Poisoning</option>
                    <option value="Suicide Attempt">Suicide Attempt</option>
                    <option value="Wildfire">Wildfire</option>
                    <option value="Road Collapse">Road Collapse</option>
                    <option value="Gas Leak">Gas Leak</option>
                    <option value="Explosion">Explosion</option>
                    <option value="Kidnapping">Kidnapping</option>
                    <option value="Stampede">Stampede</option>
                    <option value="Landslide">Landslide</option>
                    <option value="Tropical Disease Outbreak">Tropical Disease Outbreak</option>
                    <option value="Civil Unrest">Civil Unrest</option>
                    <option value="Accidental Shooting">Accidental Shooting</option>
                    <option value="Fire Outbreak">Fire Outbreak</option>
                    <option value="Industrial Fire">Industrial Fire</option>
                    <option value="Storm">Storm</option>
                    <option value="Mass Casualty Incident">Mass Casualty Incident</option>
                    <option value="Heart Attack">Heart Attack</option>
                    <option value="Stroke">Stroke</option>
                    <option value="Severe Bleeding">Severe Bleeding</option>
                    <option value="Choking">Choking</option>
                    <option value="Seizure">Seizure</option>
                    <option value="Breathing Difficulty">Breathing Difficulty</option>
                    <option value="Allergic Reaction">Allergic Reaction</option>
                    <option value="Broken Bones">Broken Bones</option>
                    <option value="Burns">Burns</option>
                    <option value="Unconsciousness">Unconsciousness</option>
                    <option value="Fainting">Fainting</option>
                    <option value="Diabetic Emergency">Diabetic Emergency</option>
                    <option value="Hypothermia">Hypothermia</option>
                    <option value="Heat Exhaustion">Heat Exhaustion</option>
                    <option value="Electrical Injury">Electrical Injury</option>
                    <option value="Childbirth">Childbirth</option>
                </select>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif



                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
    <script>
    document.body.style.backgroundImage = "url('/images/Emergency.jpg')";
    document.body.style.backgroundSize = "cover";
</script>
</x-guest-layout>
