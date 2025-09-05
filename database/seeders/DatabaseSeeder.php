<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $factories = [
//            \Database\Factories\FarmerContractFactory::class,
            \Database\Factories\FarmerFactory::class,
            \Database\Factories\FarmerGroupFactory::class,
            \Database\Factories\FarmerPaymentFactory::class,
            \Database\Factories\FarmerProfileAttributeFactory::class,
            \Database\Factories\FarmerProfileAttributeValueFactory::class,
            \Database\Factories\FarmerProfileTemplateAttributeFactory::class,
            \Database\Factories\FarmerProfileTemplateFieldFactory::class,
            \Database\Factories\FarmerProfileTemplateFactory::class,
            \Database\Factories\FarmerProfileValueFactory::class,
            \Database\Factories\FarmerTemplateAssignmentFactory::class,
            \Database\Factories\GardenFactory::class,
            \Database\Factories\ParishFactory::class,
            \Database\Factories\UserFactory::class,
        ];

        foreach ($factories as $factory) {
            $factory::new()->count(10)->create();
        }
    }
}
