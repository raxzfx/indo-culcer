<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CeritaController extends Controller
{
    public function detailCerita($id)
    {
        $data = [
            'id' => $id,
            'judul' => 'Hutan Rimba',
            'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam tenetur nam sequi doloremque sunt error alias mollitia vel ea ad deserunt quam quibusdam, odio nostrum ex placeat dolores ipsum nulla aliquam fugit, ab impedit. Voluptate nesciunt, vero quisquam iure dignissimos fugiat quidem itaque ratione omnis sed ipsa? Sapiente recusandae dolor, veritatis quis expedita ratione rem minima cum tempora delectus quo corrupti praesentium ex! Velit in ratione voluptates ad facere aliquid aperiam placeat, accusamus rem quidem quibusdam assumenda laudantium necessitatibus facilis molestias voluptate ipsum dolor esse. Qui, tempore! Repudiandae veniam sapiente, debitis minus fugiat sed. Debitis doloremque odit ex fuga accusantium!',
            'kategori' => 'komedi',
        ];

        $lotData = [
            0 => [
                'id' => $id,
                'judul' => 'Mobil Terbang',
                'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam tenetur nam sequi doloremque sunt error alias mollitia vel ea ad deserunt quam quibusdam, odio nostrum ex placeat dolores ipsum nulla aliquam fugit, ab impedit. Voluptate nesciunt, vero quisquam iure dignissimos fugiat quidem itaque ratione omnis sed ipsa? Sapiente recusandae dolor, veritatis quis expedita ratione rem minima cum tempora delectus quo corrupti praesentium ex! Velit in ratione voluptates ad facere aliquid aperiam placeat, accusamus rem quidem quibusdam assumenda laudantium necessitatibus facilis molestias voluptate ipsum dolor esse. Qui, tempore! Repudiandae veniam sapiente, debitis minus fugiat sed. Debitis doloremque odit ex fuga accusantium!',
                'kategori' => 'Horror',
            ],
            1 => [
                'id' => $id,
                'judul' => 'Monyet Pisang',
                'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam tenetur nam sequi doloremque sunt error alias mollitia vel ea ad deserunt quam quibusdam, odio nostrum ex placeat dolores ipsum nulla aliquam fugit, ab impedit. Voluptate nesciunt, vero quisquam iure dignissimos fugiat quidem itaque ratione omnis sed ipsa? Sapiente recusandae dolor, veritatis quis expedita ratione rem minima cum tempora delectus quo corrupti praesentium ex! Velit in ratione voluptates ad facere aliquid aperiam placeat, accusamus rem quidem quibusdam assumenda laudantium necessitatibus facilis molestias voluptate ipsum dolor esse. Qui, tempore! Repudiandae veniam sapiente, debitis minus fugiat sed. Debitis doloremque odit ex fuga accusantium!',
                'kategori' => 'Kuliner',
            ],
            2 => [
                'id' => $id,
                'judul' => 'Buah Naga',
                'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam tenetur nam sequi doloremque sunt error alias mollitia vel ea ad deserunt quam quibusdam, odio nostrum ex placeat dolores ipsum nulla aliquam fugit, ab impedit. Voluptate nesciunt, vero quisquam iure dignissimos fugiat quidem itaque ratione omnis sed ipsa? Sapiente recusandae dolor, veritatis quis expedita ratione rem minima cum tempora delectus quo corrupti praesentium ex! Velit in ratione voluptates ad facere aliquid aperiam placeat, accusamus rem quidem quibusdam assumenda laudantium necessitatibus facilis molestias voluptate ipsum dolor esse. Qui, tempore! Repudiandae veniam sapiente, debitis minus fugiat sed. Debitis doloremque odit ex fuga accusantium!',
                'kategori' => 'Kuliner',
            ],
            3 => [
                'id' => $id,
                'judul' => 'Gelas Pecah',
                'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam tenetur nam sequi doloremque sunt error alias mollitia vel ea ad deserunt quam quibusdam, odio nostrum ex placeat dolores ipsum nulla aliquam fugit, ab impedit. Voluptate nesciunt, vero quisquam iure dignissimos fugiat quidem itaque ratione omnis sed ipsa? Sapiente recusandae dolor, veritatis quis expedita ratione rem minima cum tempora delectus quo corrupti praesentium ex! Velit in ratione voluptates ad facere aliquid aperiam placeat, accusamus rem quidem quibusdam assumenda laudantium necessitatibus facilis molestias voluptate ipsum dolor esse. Qui, tempore! Repudiandae veniam sapiente, debitis minus fugiat sed. Debitis doloremque odit ex fuga accusantium!',
                'kategori' => 'Horror',
            ],
            4 => [
                'id' => $id,
                'judul' => 'Kasur Empuk',
                'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam tenetur nam sequi doloremque sunt error alias mollitia vel ea ad deserunt quam quibusdam, odio nostrum ex placeat dolores ipsum nulla aliquam fugit, ab impedit. Voluptate nesciunt, vero quisquam iure dignissimos fugiat quidem itaque ratione omnis sed ipsa? Sapiente recusandae dolor, veritatis quis expedita ratione rem minima cum tempora delectus quo corrupti praesentium ex! Velit in ratione voluptates ad facere aliquid aperiam placeat, accusamus rem quidem quibusdam assumenda laudantium necessitatibus facilis molestias voluptate ipsum dolor esse. Qui, tempore! Repudiandae veniam sapiente, debitis minus fugiat sed. Debitis doloremque odit ex fuga accusantium!',
                'kategori' => 'Komedi',
            ],
        ];

        return view('detail-cerita', compact('data', 'lotData'));
    }
}
