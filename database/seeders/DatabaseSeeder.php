<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Proposal;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(50)->create();

        User::query()->inRandomOrder()->limit(20)->each(function (User $user) {
            $randomProjectsPerUser = random_int(1, 8);

            Project::factory($randomProjectsPerUser)->create([
                'created_by' => $user->id,
            ])->each(function (Project $project) {
                $randomProposalsPerProject = random_int(1, 20);

                Proposal::factory($randomProposalsPerProject)->create([
                    'project_id' => $project->id,
                ]);
            });
        });
    }
}
