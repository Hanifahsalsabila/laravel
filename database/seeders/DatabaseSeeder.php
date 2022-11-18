<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        // User::create([
        //     'name' => 'Sandhika Galih',
        //     'email' => 'sandhikagalih@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'Adriella',
        //     'email' => 'adriella@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit blanditiis, voluptatum veritatis omnis placeat atque consectetur exercitationem laborum similique aliquid illum consequatur magnam. Accusamus, sed rem. Libero architecto tempora voluptates quasi totam perferendis! Doloribus, praesentium! Provident inventore suscipit, dolorem ut, eum excepturi magnam minus praesentium fugiat commodi, voluptates reiciendis eos doloribus consequatur vel. Impedit accusamus assumenda explicabo sit labore! Velit totam possimus quibusdam iste incidunt necessitatibus, harum nobis accusamus impedit laudantium eum fugiat voluptatibus exercitationem? Quia necessitatibus, dolorum nam consectetur similique a eum tempora numquam voluptatum nostrum ipsa, illo nesciunt exercitationem possimus rerum delectus architecto, mollitia distinctio! Quae, sit obcaecati.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit blanditiis, voluptatum veritatis omnis placeat atque consectetur exercitationem laborum similique aliquid illum consequatur magnam. Accusamus, sed rem. Libero architecto tempora voluptates quasi totam perferendis! Doloribus, praesentium! Provident inventore suscipit, dolorem ut, eum excepturi magnam minus praesentium fugiat commodi, voluptates reiciendis eos doloribus consequatur vel. Impedit accusamus assumenda explicabo sit labore! Velit totam possimus quibusdam iste incidunt necessitatibus, harum nobis accusamus impedit laudantium eum fugiat voluptatibus exercitationem? Quia necessitatibus, dolorum nam consectetur similique a eum tempora numquam voluptatum nostrum ipsa, illo nesciunt exercitationem possimus rerum delectus architecto, mollitia distinctio! Quae, sit obcaecati.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);


        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit blanditiis, voluptatum veritatis omnis placeat atque consectetur exercitationem laborum similique aliquid illum consequatur magnam. Accusamus, sed rem. Libero architecto tempora voluptates quasi totam perferendis! Doloribus, praesentium! Provident inventore suscipit, dolorem ut, eum excepturi magnam minus praesentium fugiat commodi, voluptates reiciendis eos doloribus consequatur vel. Impedit accusamus assumenda explicabo sit labore! Velit totam possimus quibusdam iste incidunt necessitatibus, harum nobis accusamus impedit laudantium eum fugiat voluptatibus exercitationem? Quia necessitatibus, dolorum nam consectetur similique a eum tempora numquam voluptatum nostrum ipsa, illo nesciunt exercitationem possimus rerum delectus architecto, mollitia distinctio! Quae, sit obcaecati.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);


        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit blanditiis, voluptatum veritatis omnis placeat atque consectetur exercitationem laborum similique aliquid illum consequatur magnam. Accusamus, sed rem. Libero architecto tempora voluptates quasi totam perferendis! Doloribus, praesentium! Provident inventore suscipit, dolorem ut, eum excepturi magnam minus praesentium fugiat commodi, voluptates reiciendis eos doloribus consequatur vel. Impedit accusamus assumenda explicabo sit labore! Velit totam possimus quibusdam iste incidunt necessitatibus, harum nobis accusamus impedit laudantium eum fugiat voluptatibus exercitationem? Quia necessitatibus, dolorum nam consectetur similique a eum tempora numquam voluptatum nostrum ipsa, illo nesciunt exercitationem possimus rerum delectus architecto, mollitia distinctio! Quae, sit obcaecati.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
