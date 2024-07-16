<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Organization
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{route('update-organization',['id' => $organization->id])}}">
                    @csrf
                    @method('PUT')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="name" class="block font-medium text-sm text-gray-700">Name</label>
                            <x-input type="text" name="name" id="name" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('name', $organization->organization_name) }}" />
                            @error('name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>



                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="password" class="block font-medium text-sm text-gray-700">Location</label>
                            <x-input type="text" name="location" id="location" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ old('location', $organization->location) }}" />
                            @error('password')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
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

                            @error('roles')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <x-button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Edit
                            </x-button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
