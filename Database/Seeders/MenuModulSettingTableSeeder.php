<?php

namespace Modules\Setting\Database\Seeders;

use App\Models\Core\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MenuModulSettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Menu::where('modul', 'Setting')->delete();
        $menu = Menu::create([
            'modul' => 'Setting',
            'label' => 'Setting ',
            'url' => 'setting',
            'can' => serialize(['admin']),
            'icon' => 'fas fa-cogs',
            'urut' => 1,
            'parent_id' => 0,
            'active' => serialize(['setting']),
        ]);
        if ($menu) {
            Menu::create([
                'modul' => 'Setting',
                'label' => 'Hari Libur',
                'url' => 'setting/libur',
                'can' => serialize(['admin']),
                'icon' => 'far fa-circle',
                'urut' => 1,
                'parent_id' => $menu->id,
                'active' => serialize(['setting/libur', 'setting/libur*']),
            ]);
        }
        if ($menu) {
            Menu::create([
                'modul' => 'Setting',
                'label' => 'Jam Kerja',
                'url' => 'setting/jam',
                'can' => serialize(['admin']),
                'icon' => 'far fa-circle',
                'urut' => 1,
                'parent_id' => $menu->id,
                'active' => serialize(['setting/jam', 'setting/jam*']),
            ]);
        }
    }
}
