<?php
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
        ],
        [
            "nama" => "Kontak"
        ],
    ];
    
function tampilkanMenuBertingkat (array $menu) {
    echo "<ul>";
    foreach ($menu as $key => $item) {
        echo "<li>{$item['nama']}</li>";
        
        //periksa apakah ada submenu dan apakah submenu tersebut adalah array
        if (isset($item['subMenu']) && is_array($item['subMenu'])) {
            //panggil fungsi rekursif untuk menampilkan submenu
            tampilkanMenuBertingkat($item['subMenu']);
        }

        echo "</li>";
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);
?>