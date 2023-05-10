<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Muhammad Hafiz Al Fitri',
            'username' =>'ImMocha',
            'email' => 'alfitrihafiz@gmail.com',
            'password' => bcrypt('Kandangan999')
        ]);

        // User::create([
        //     'name' => 'Pretty Swastika',
        //     'email' => 'tika@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos exercitationem veniam odit fuga deserunt reprehenderit, deleniti repudiandae beatae doloribus modi?',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos exercitationem veniam odit fuga deserunt reprehenderit, deleniti repudiandae beatae doloribus modi? Asperiores consequuntur ex iusto tempora. Harum non quam vero eligendi dolor at possimus nesciunt omnis quo cumque exercitationem voluptatibus vitae, voluptates accusantium et neque beatae ipsa doloribus ex facilis iure vel veniam iste blanditiis? Distinctio cupiditate itaque, autem pariatur temporibus quos amet quas voluptate sint, porro dolores doloremque nobis maxime beatae. Excepturi quibusdam quam vitae vel aperiam quasi consectetur facilis incidunt perspiciatis sit? Necessitatibus rem voluptas placeat earum sapiente non? At ab neque dolorem quis mollitia est voluptatem harum voluptatum',
        //     'category_id' => '1',
        //     'user_id' => '2',
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos exercitationem veniam odit fuga deserunt reprehenderit, deleniti repudiandae beatae doloribus modi?',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos exercitationem veniam odit fuga deserunt reprehenderit, deleniti repudiandae beatae doloribus modi? Asperiores consequuntur ex iusto tempora. Harum non quam vero eligendi dolor at possimus nesciunt omnis quo cumque exercitationem voluptatibus vitae, voluptates accusantium et neque beatae ipsa doloribus ex facilis iure vel veniam iste blanditiis? Distinctio cupiditate itaque, autem pariatur temporibus quos amet quas voluptate sint, porro dolores doloremque nobis maxime beatae. Excepturi quibusdam quam vitae vel aperiam quasi consectetur facilis incidunt perspiciatis sit? Necessitatibus rem voluptas placeat earum sapiente non? At ab neque dolorem quis mollitia est voluptatem harum voluptatum',
        //     'category_id' => '1',
        //     'user_id' => '1',
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos exercitationem veniam odit fuga deserunt reprehenderit, deleniti repudiandae beatae doloribus modi?',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos exercitationem veniam odit fuga deserunt reprehenderit, deleniti repudiandae beatae doloribus modi? Asperiores consequuntur ex iusto tempora. Harum non quam vero eligendi dolor at possimus nesciunt omnis quo cumque exercitationem voluptatibus vitae, voluptates accusantium et neque beatae ipsa doloribus ex facilis iure vel veniam iste blanditiis? Distinctio cupiditate itaque, autem pariatur temporibus quos amet quas voluptate sint, porro dolores doloremque nobis maxime beatae. Excepturi quibusdam quam vitae vel aperiam quasi consectetur facilis incidunt perspiciatis sit? Necessitatibus rem voluptas placeat earum sapiente non? At ab neque dolorem quis mollitia est voluptatem harum voluptatum',
        //     'category_id' => '2',
        //     'user_id' => '1',
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos exercitationem veniam odit fuga deserunt reprehenderit, deleniti repudiandae beatae doloribus modi?',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos exercitationem veniam odit fuga deserunt reprehenderit, deleniti repudiandae beatae doloribus modi? Asperiores consequuntur ex iusto tempora. Harum non quam vero eligendi dolor at possimus nesciunt omnis quo cumque exercitationem voluptatibus vitae, voluptates accusantium et neque beatae ipsa doloribus ex facilis iure vel veniam iste blanditiis? Distinctio cupiditate itaque, autem pariatur temporibus quos amet quas voluptate sint, porro dolores doloremque nobis maxime beatae. Excepturi quibusdam quam vitae vel aperiam quasi consectetur facilis incidunt perspiciatis sit? Necessitatibus rem voluptas placeat earum sapiente non? At ab neque dolorem quis mollitia est voluptatem harum voluptatum',
        //     'category_id' => '2',
        //     'user_id' => '2',
        // ]);

    }
}

