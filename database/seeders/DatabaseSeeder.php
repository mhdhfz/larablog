<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
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
        User::truncate();
        Post::truncate();
        Category::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
             'name' => 'Personal',
             'slug' => 'personal'
        ]);

        $family = Category::create([
             'name' => 'Family',
             'slug' => 'family'
        ]);

        $work = Category::create([
             'name' => 'Work',
             'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => 'this post about my family',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis
             facere quidem porro commodi praesentium. Debitis odio et perferendis ea odit
              reprehenderit consequuntur, voluptates magnam incidunt cum. Laboriosam 
              perspiciatis temporibus illo repudiandae iusto dicta ipsum provident culpa? 
              Adipisci dicta provident, consequuntur quasi cum sequi deserunt! Molestiae 
              culpa eveniet quibusdam illum, corrupti repellat sunt vero officia temporibus 
              error delectus, maiores vel reprehenderit neque soluta ipsum. Quaerat ipsa 
              corrupti placeat provident minima maxime blanditiis qui vel. Aliquam provident 
              porro ducimus dolorem quia vero neque, quod vel, eaque iste ipsum sint deleniti 
              voluptatibus at possimus autem nihil iure. Excepturi fugit ut rerum obcaecati 
              mollitia.'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => 'this post about my work',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis
             facere quidem porro commodi praesentium. Debitis odio et perferendis ea odit
              reprehenderit consequuntur, voluptates magnam incidunt cum. Laboriosam 
              perspiciatis temporibus illo repudiandae iusto dicta ipsum provident culpa? 
              Adipisci dicta provident, consequuntur quasi cum sequi deserunt! Molestiae 
              culpa eveniet quibusdam illum, corrupti repellat sunt vero officia temporibus 
              error delectus, maiores vel reprehenderit neque soluta ipsum. Quaerat ipsa 
              corrupti placeat provident minima maxime blanditiis qui vel. Aliquam provident 
              porro ducimus dolorem quia vero neque, quod vel, eaque iste ipsum sint deleniti 
              voluptatibus at possimus autem nihil iure. Excepturi fugit ut rerum obcaecati 
              mollitia.'
        ]);

        


    }
}
