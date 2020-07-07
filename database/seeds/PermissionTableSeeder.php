<?php

use App\Permission;
use App\Role;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $names = ['group', 'post'];

        // foreach ($names as $name) {
        //     DB::table('permissions')->insert([
        //         'code' => $name . '_create',
        //         'name' => ucfirst($name) . ' Create',
        //         'description' => 'User can create ' . $name,
        //         'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        //         'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        //     ]);
        // }

        $admin_role = Role::where('slug','admin')->first();
        $manager_role = Role::where('slug', 'manager')->first();
        
        $viewPost = new Permission();
        $viewPost->code = 'post_view';
        $viewPost->name = 'Read Post';
        $viewPost->description = 'User can read post';
        $viewPost->save();
        $viewPost->roles()->attach($admin_role);
    
        $createPost = new Permission();
        $createPost->code = 'post_create';
        $createPost->name = 'Create Post';
        $createPost->description = 'User can create post';
        $createPost->save();
        $createPost->roles()->attach($admin_role);

        $updatePost = new Permission();
        $updatePost->code = 'post_update';
        $updatePost->name = 'Update Post';
        $updatePost->description = 'User can update post';
        $updatePost->save();
        $updatePost->roles()->attach($admin_role);

        $deletePost = new Permission();
        $deletePost->code = 'post_delete';
        $deletePost->name = 'Delete Post';
        $deletePost->description = 'User can delete post';
        $deletePost->save();
        $deletePost->roles()->attach($admin_role);

        

        $viewRule = new Permission();
        $viewRule->code = 'post_view';
        $viewRule->name = 'Read Post';
        $viewRule->description = 'User can read post';
        $viewRule->save();
        $viewRule->roles()->attach($admin_role);
    
        $createPost = new Permission();
        $createPost->code = 'post_create';
        $createPost->name = 'Create Post';
        $createPost->description = 'User can create post';
        $createPost->save();
        $createPost->roles()->attach($admin_role);

        $updatePost = new Permission();
        $updatePost->code = 'post_update';
        $updatePost->name = 'Update Post';
        $updatePost->description = 'User can update post';
        $updatePost->save();
        $updatePost->roles()->attach($admin_role);

        $deletePost = new Permission();
        $deletePost->code = 'post_delete';
        $deletePost->name = 'Delete Post';
        $deletePost->description = 'User can delete post';
        $deletePost->save();
        $deletePost->roles()->attach($admin_role);
    }
}
