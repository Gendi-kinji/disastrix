<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Emergency;

class EmergencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $incidentTypes = [
            'Fire', 'Medical Emergency', 'Road Accident', 'Flood', 'Drought', 'Terrorism', 'Violence', 'Animal Attack', 'Building Collapse', 'Chemical Spill', 'Food Poisoning', 'Water Contamination', 'Missing Person', 'Child Abduction', 'Boat Accident', 'Snake Bite', 'Electrocution', 'Industrial Accident', 'Poisoning', 'Suicide Attempt', 'Wildfire', 'Road Collapse', 'Gas Leak', 'Explosion', 'Kidnapping', 'Stampede', 'Landslide', 'Tropical Disease Outbreak', 'Civil Unrest', 'Accidental Shooting', 'Fire Outbreak', 'Industrial Fire', 'Storm', 'Mass Casualty Incident', 'Heart Attack', 'Stroke', 'Severe Bleeding', 'Choking', 'Seizure', 'Breathing Difficulty', 'Allergic Reaction', 'Broken Bones', 'Burns', 'Unconsciousness', 'Fainting', 'Diabetic Emergency', 'Hypothermia', 'Heat Exhaustion', 'Electrical Injury', 'Childbirth'
        ];


        $priorities = [];
        foreach ($incidentTypes as $index => $type) {
            // Assign a random priority between 1 and 10
            $priorities[$index] = mt_rand(1, 10);

            // Insert into the database with a random priority
            Emergency::create([
                'type' => $type,
                'priority_level' => $priorities[$index] // Assuming you have a 'priority' column
            ]);
        }
    }
}
