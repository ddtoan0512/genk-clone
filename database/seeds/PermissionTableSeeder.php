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
        $viewRule->code = 'role_view';
        $viewRule->name = 'Read Post';
        $viewRule->description = 'User can read post';
        $viewRule->save();
        $viewRule->roles()->attach($admin_role);
    
        $createRule = new Permission();
        $createRule->code = 'role_create';
        $createRule->name = 'Create role';
        $createRule->description = 'User can create role';
        $createRule->save();
        $createRule->roles()->attach($admin_role);

        $updateRule = new Permission();
        $updateRule->code = 'role_update';
        $updateRule->name = 'Update role';
        $updateRule->description = 'User can update role';
        $updateRule->save();
        $updateRule->roles()->attach($admin_role);

        $deleteRule = new Permission();
        $deleteRule->code = 'role_delete';
        $deleteRule->name = 'Delete role';
        $deleteRule->description = 'User can delete role';
        $deleteRule->save();
        $deleteRule->roles()->attach($admin_role);


        $viewCategory = new Permission();
        $viewCategory->code = 'category_view';
        $viewCategory->name = 'Read category';
        $viewCategory->description = 'User can read category';
        $viewCategory->save();
        $viewCategory->roles()->attach($admin_role);
    
        $createCategory = new Permission();
        $createCategory->code = 'category_create';
        $createCategory->name = 'Create category';
        $createCategory->description = 'User can create category';
        $createCategory->save();
        $createCategory->roles()->attach($admin_role);

        $updateCategory = new Permission();
        $updateCategory->code = 'category_update';
        $updateCategory->name = 'Update category';
        $updateCategory->description = 'User can update category';
        $updateCategory->save();
        $updateCategory->roles()->attach($admin_role);

        $deleteCategory = new Permission();
        $deleteCategory->code = 'category_delete';
        $deleteCategory->name = 'Delete category';
        $deleteCategory->description = 'User can delete category';
        $deleteCategory->save();
        $deleteCategory->roles()->attach($admin_role);
    }
}
