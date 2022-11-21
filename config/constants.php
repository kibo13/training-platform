<?php

return [

    'users' => [
        [
            'name'    => 'test.admin',
            'email'   => 'admin@platform.kz',
            'role_id' => 1,
        ],
        [
            'name'    => 'test.teacher',
            'email'   => 'teacher@platform.kz',
            'role_id' => 2,
        ],
        [
            'name'    => 'test.student',
            'email'   => 'student@platform.kz',
            'role_id' => 3,
        ],
    ],

    'roles' => [
        [
            'name' => 'Админ',
            'slug' => 'admin',
        ],
        [
            'name' => 'Учитель',
            'slug' => 'teacher',
        ],
        [
            'name' => 'Ученик',
            'slug' => 'student',
        ],
    ],

];
