<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Blogger']);

        Permission::create(['name' => 'admin.home', 
                            'description' => 'Ver Dashboard'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.users.index', 
                            'description' => 'Ver listado de usuarios'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.edit', 
                            'description' => 'Editar un usuario'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.update', 
                            'description' => 'Actualizar un usuario'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.roles.index', 
                            'description' => 'Ver listado de roles'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.create', 
                            'description' => 'Crear un nuevo rol'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.edit', 
                            'description' => 'Editar un rol'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.destroy', 
                            'description' => 'Eliminar un rol'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.categories.index', 
                            'description' => 'Listado de categorias'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.categories.create', 
                            'description' => 'Crear una nueva categoría'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.edit', 
                            'description' => 'Editar una categoría'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.destroy', 
                            'description' => 'Eliminar una categoría'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.tags.index', 
                            'description' => 'Listado de etiquetas'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.tags.create', 
                            'description' => 'Crear una etiqueta'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.tags.edit', 
                            'description' => 'Editar una categoría'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.tags.destroy', 
                            'description' => 'Eliminar una categoría'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.posts.index', 
                            'description' => 'Listado de posts'])->syncRoles([$role2]);
        Permission::create(['name' => 'admin.posts.create', 
                            'description' => 'Crear un post'])->syncRoles([$role2]);
        Permission::create(['name' => 'admin.posts.edit', 
                            'description' => 'Editar un post'])->syncRoles([$role2]);
        Permission::create(['name' => 'admin.posts.destroy', 
                            'description' => 'Eliminar un post'])->syncRoles([$role2]);

        
    }
}
