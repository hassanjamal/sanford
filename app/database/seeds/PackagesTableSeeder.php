<?php

// Composer: "fzaninotto/faker": "v1.3.0"

class PackagesTableSeeder extends Seeder {

    public function run()
    {

    	// PAckage 1
        $package = Package::create([
            'description' => 'Package 1',
            'value'       => 3150,
            'created_at'  => \Carbon\Carbon::now(),
            'updated_at'  => \Carbon\Carbon::now(),
        ]);

        $item    = new PackageItem([
            'description' => 'Gift Voucher',
            'value'       => 1500,
            'quantity'    => 15,
            'created_at'  => \Carbon\Carbon::now(),
            'updated_at'  => \Carbon\Carbon::now(),
        ]);

        Package::find($package->id)->packageitems()->save($item);

        $item = new PackageItem([
            'description' => 'Accidental Insurance for 3 Years',
            'value'       => 50000,
            'created_at'  => \Carbon\Carbon::now(),
            'updated_at'  => \Carbon\Carbon::now(),
        ]);

        Package::find($package->id)->packageitems()->save($item);

        $item = new PackageItem([
            'description' => 'Business Sales Material',
            'created_at'  => \Carbon\Carbon::now(),
            'updated_at'  => \Carbon\Carbon::now(),
        ]);

        Package::find($package->id)->packageitems()->save($item);

        $item = new PackageItem([
            'description' => 'LifeTime MemeberShip Card',
            'created_at'  => \Carbon\Carbon::now(),
            'updated_at'  => \Carbon\Carbon::now(),
        ]);

        Package::find($package->id)->packageitems()->save($item);

        // package 2
        $package = Package::create([
            'description' => 'Package 2',
            'value'       => 4150,
            'created_at'  => \Carbon\Carbon::now(),
            'updated_at'  => \Carbon\Carbon::now(),
        ]);

         $item    = new PackageItem([
            'description' => 'Gift Voucher',
            'value'       => 2250,
            'quantity'    => 15,
            'created_at'  => \Carbon\Carbon::now(),
            'updated_at'  => \Carbon\Carbon::now(),
        ]);

        Package::find($package->id)->packageitems()->save($item);

        $item = new PackageItem([
            'description' => 'Accidental Insurance for 5 Years',
            'value'       => 100000,
            'created_at'  => \Carbon\Carbon::now(),
            'updated_at'  => \Carbon\Carbon::now(),
        ]);

        Package::find($package->id)->packageitems()->save($item);

        $item = new PackageItem([
            'description' => 'Business Sales Material',
            'created_at'  => \Carbon\Carbon::now(),
            'updated_at'  => \Carbon\Carbon::now(),
        ]);

        Package::find($package->id)->packageitems()->save($item);

        $item = new PackageItem([
            'description' => 'LifeTime MemeberShip Card',
            'created_at'  => \Carbon\Carbon::now(),
            'updated_at'  => \Carbon\Carbon::now(),
        ]);

        Package::find($package->id)->packageitems()->save($item);

        $item = new PackageItem([
            'description' => 'Lucky Draw Coupan',
            'created_at'  => \Carbon\Carbon::now(),
            'updated_at'  => \Carbon\Carbon::now(),
        ]);

        Package::find($package->id)->packageitems()->save($item);
        // Package 3
        $package = Package::create([
            'description' => 'Package 3',
            'value'       => 1950,
            'created_at'  => \Carbon\Carbon::now(),
            'updated_at'  => \Carbon\Carbon::now(),
        ]);


         $item    = new PackageItem([
            'description' => 'Gift Voucher',
            'value'       => 800,
            'quantity'    => 8,
            'created_at'  => \Carbon\Carbon::now(),
            'updated_at'  => \Carbon\Carbon::now(),
        ]);

        Package::find($package->id)->packageitems()->save($item);

        $item = new PackageItem([
            'description' => 'Accidental Insurance for 1 Years',
            'value'       => 50000,
            'created_at'  => \Carbon\Carbon::now(),
            'updated_at'  => \Carbon\Carbon::now(),
        ]);

        Package::find($package->id)->packageitems()->save($item);

        $item = new PackageItem([
            'description' => 'Business Sales Material',
            'created_at'  => \Carbon\Carbon::now(),
            'updated_at'  => \Carbon\Carbon::now(),
        ]);

        Package::find($package->id)->packageitems()->save($item);

        $item = new PackageItem([
            'description' => 'LifeTime MemeberShip Card',
            'created_at'  => \Carbon\Carbon::now(),
            'updated_at'  => \Carbon\Carbon::now(),
        ]);

        Package::find($package->id)->packageitems()->save($item);


    }

}
