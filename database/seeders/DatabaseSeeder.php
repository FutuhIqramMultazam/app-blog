<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => "Futuh Iqram Multazam",
            'email' => "Futuhiqram@gmail.com",
            'password' => bcrypt('icamganteng'),
        ]);
        User::create([
            'name' => "Fadilah Fatwa",
            'email' => "fadilah@gmail.com",
            'password' => bcrypt('fadilahcantik'),
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'The Wedding',
            'slug' => 'the-wedding'
        ]);
        Category::create([
            'name' => 'Religius',
            'slug' => 'religius'
        ]);

        Post::create([
            'category_id' => '1',
            'user_id' => '1',
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias dolor quisquam quod debitis...',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias dolor quisquam quod debitis, similique doloremque exercitationem quam sequi in possimus, eos facere temporibus hic quidem esse fugiat nihil, consectetur tenetur dignissimos nobis! Repellendus dignissimos facere quidem nihil omnis? Obcaecati consequuntur libero id deserunt ipsam quis iusto, possimus velit blanditiis tempora explicabo saepe eveniet dolorem dicta. Voluptate, minima animi repudiandae tempora corrupti sunt eveniet non vel, aperiam cumque consequuntur ea. Minus!',
        ]);

        Post::create([
            'category_id' => '2',
            'user_id' => '2',
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias dolor quisquam quod debitis....',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias dolor quisquam quod debitis, similique doloremque exercitationem quam sequi in possimus, eos facere temporibus hic quidem esse fugiat nihil, consectetur tenetur dignissimos nobis! Repellendus dignissimos facere quidem nihil omnis? Obcaecati consequuntur libero id deserunt ipsam quis iusto, possimus velit blanditiis tempora explicabo saepe eveniet dolorem dicta. Voluptate, minima animi repudiandae tempora corrupti sunt eveniet non vel, aperiam cumque consequuntur ea. Minus!',
        ]);
        Post::create([
            'category_id' => '3',
            'user_id' => '1',
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias dolor quisquam quod debitis....',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias dolor quisquam quod debitis, similique doloremque exercitationem quam sequi in possimus, eos facere temporibus hic quidem esse fugiat nihil, consectetur tenetur dignissimos nobis! Repellendus dignissimos facere quidem nihil omnis? Obcaecati consequuntur libero id deserunt ipsam quis iusto, possimus velit blanditiis tempora explicabo saepe eveniet dolorem dicta. Voluptate, minima animi repudiandae tempora corrupti sunt eveniet non vel, aperiam cumque consequuntur ea. Minus!',
        ]);
        Post::create([
            'category_id' => '1',
            'user_id' => '2',
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias dolor quisquam quod debitis....',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias dolor quisquam quod debitis, similique doloremque exercitationem quam sequi in possimus, eos facere temporibus hic quidem esse fugiat nihil, consectetur tenetur dignissimos nobis! Repellendus dignissimos facere quidem nihil omnis? Obcaecati consequuntur libero id deserunt ipsam quis iusto, possimus velit blanditiis tempora explicabo saepe eveniet dolorem dicta. Voluptate, minima animi repudiandae tempora corrupti sunt eveniet non vel, aperiam cumque consequuntur ea. Minus!',
        ]);
    }
}
