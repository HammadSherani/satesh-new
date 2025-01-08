<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\City;
use App\Models\Service;
use App\Models\State;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $roles = ['admin','user'];
        foreach ($roles as $role) {
            Role::create([
                'name' => $role,
                'guard_name' => 'web'
            ]);
        }

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password')
        ]);

        $admin->assignRole('admin');
        $states = [
            'Andhra Pradesh' => ['Visakhapatnam', 'Vijayawada', 'Guntur', 'Nellore', 'Kurnool'],
            'Arunachal Pradesh' => ['Itanagar', 'Tawang', 'Ziro', 'Pasighat', 'Bomdila'],
            'Assam' => ['Guwahati', 'Dibrugarh', 'Silchar', 'Jorhat', 'Tezpur'],
            'Bihar' => ['Patna', 'Gaya', 'Bhagalpur', 'Muzaffarpur', 'Darbhanga'],
            'Chhattisgarh' => ['Raipur', 'Bhilai', 'Bilaspur', 'Korba', 'Durg'],
            'Goa' => ['Panaji', 'Margao', 'Vasco da Gama', 'Mapusa', 'Ponda'],
            'Gujarat' => ['Ahmedabad', 'Surat', 'Vadodara', 'Rajkot', 'Gandhinagar'],
            'Haryana' => ['Chandigarh', 'Faridabad', 'Gurgaon', 'Ambala', 'Panipat'],
            'Himachal Pradesh' => ['Shimla', 'Manali', 'Dharamshala', 'Solan', 'Mandi'],
            'Jharkhand' => ['Ranchi', 'Jamshedpur', 'Dhanbad', 'Bokaro', 'Hazaribagh'],
            'Karnataka' => ['Bangalore', 'Mysore', 'Mangalore', 'Hubli', 'Belgaum'],
            'Kerala' => ['Thiruvananthapuram', 'Kochi', 'Kozhikode', 'Thrissur', 'Kollam'],
            'Madhya Pradesh' => ['Bhopal', 'Indore', 'Gwalior', 'Jabalpur', 'Ujjain'],
            'Maharashtra' => ['Mumbai', 'Pune', 'Nagpur', 'Nashik', 'Aurangabad'],
            'Manipur' => ['Imphal', 'Bishnupur', 'Thoubal', 'Churachandpur', 'Ukhrul'],
            'Meghalaya' => ['Shillong', 'Tura', 'Jowai', 'Nongstoin', 'Baghmara'],
            'Mizoram' => ['Aizawl', 'Lunglei', 'Saiha', 'Champhai', 'Serchhip'],
            'Nagaland' => ['Kohima', 'Dimapur', 'Mokokchung', 'Tuensang', 'Wokha'],
            'Odisha' => ['Bhubaneswar', 'Cuttack', 'Rourkela', 'Sambalpur', 'Puri'],
            'Punjab' => ['Chandigarh', 'Ludhiana', 'Amritsar', 'Jalandhar', 'Patiala'],
            'Rajasthan' => ['Jaipur', 'Jodhpur', 'Udaipur', 'Kota', 'Bikaner'],
            'Sikkim' => ['Gangtok', 'Namchi', 'Mangan', 'Rangpo', 'Jorethang'],
            'Tamil Nadu' => ['Chennai', 'Coimbatore', 'Madurai', 'Tiruchirappalli', 'Salem'],
            'Telangana' => ['Hyderabad', 'Warangal', 'Nizamabad', 'Khammam', 'Karimnagar'],
            'Tripura' => ['Agartala', 'Udaipur', 'Dharmanagar', 'Ambassa', 'Kailashahar'],
            'Uttar Pradesh' => ['Lucknow', 'Kanpur', 'Varanasi', 'Agra', 'Meerut'],
            'Uttarakhand' => ['Dehradun', 'Haridwar', 'Roorkee', 'Haldwani', 'Nainital'],
            'West Bengal' => ['Kolkata', 'Howrah', 'Durgapur', 'Siliguri', 'Asansol'],
            'Delhi' => ['New Delhi', 'North Delhi', 'South Delhi', 'East Delhi', 'West Delhi'],
            'Jammu and Kashmir' => ['Srinagar', 'Jammu', 'Anantnag', 'Baramulla', 'Udhampur'],
            'Ladakh' => ['Leh', 'Kargil'],
            'Puducherry' => ['Puducherry', 'Karaikal', 'Mahe', 'Yanam'],
            'Chandigarh' => ['Chandigarh'],
            'Andaman and Nicobar Islands' => ['Port Blair', 'Car Nicobar', 'Diglipur'],
            'Lakshadweep' => ['Kavaratti', 'Agatti', 'Amini'],
            'Dadra and Nagar Haveli and Daman and Diu' => ['Daman', 'Diu', 'Silvassa']
        ];

        foreach ($states as $state => $cities) {
            $stateEntry = State::create(['name' => $state]);
            foreach ($cities as $city) {
                City::create(['name' => $city, 'state_id' => $stateEntry->id]);
            }
        }

        $services =  ['Blowjob','Handjob','Girlfriend Experience (GFE)','Kissing','Role Play','Overnight Stays','Cum on Face','Cum in Mouth (CIM)','69 Position','Anal','Threesome','Gang Bang'];
        foreach ($services as $service) {
            Service::create(['name' => $service]);
        }

        $categories = ['Call Girl','Escort'];
        foreach ($categories as $category) {
            Category::create([
                'name' => $category
            ]);
        }
    }
}
