<?php
// Notas de los estudiantes en cada grupo
$grades = [
    [
        'grogup' => 'group a',
        'student_name' => 'Miguel Aguilar',
        'scores' => [
            'mat' => 3.4,
            'eng' => 4.5,
            'spa' => 2.0
        ]
    ],
    [
        'grogup' => 'group b',
        'student_name' => 'Pablo Perez',
        'scores' => [
            'mat' => 4.7,
            'eng' => 2.5,
            'spa' => 5.0
        ]
    ],
    [
        'grogup' => 'group a',
        'student_name' => 'Esteban Velasquez',
        'scores' => [
            'mat' => 4.4,
            'eng' => 4.2,
            'spa' => 4.0
        ]
    ],
    [
        'grogup' => 'group c',
        'student_name' => 'Ana Ospina',
        'scores' => [
            'mat' => 2.4,
            'eng' => 2.5,
            'spa' => 3.0
        ]
    ],
    [
        'grogup' => 'group b',
        'student_name' => 'Jorge Arango',
        'scores' => [
            'mat' => 3.7,
            'eng' => 1.2,
            'spa' => 2.5
        ]
    ],
    [
        'grogup' => 'group b',
        'student_name' => 'Estiven Muñoz',
        'scores' => [
            'mat' => 3.3,
            'eng' => 4.3,
            'spa' => 3.0
        ]
    ],
    [
        'grogup' => 'group a',
        'student_name' => 'Aracelly Henao',
        'scores' => [
            'mat' => 1.2,
            'eng' => 4.3,
            'spa' => 2.4
        ]
    ],
    [
        'grogup' => 'group c',
        'student_name' => 'Jhon Doe',
        'scores' => [
            'mat' => 2.5,
            'eng' => 1.3,
            'spa' => 2.2
        ]
    ],
    [
        'grogup' => 'group b',
        'student_name' => 'Josefina Zapata',
        'scores' => [
            'mat' => 2.1,
            'eng' => 2.2,
            'spa' => 4.5
        ]
    ],
    [
        'grogup' => 'group b',
        'student_name' => 'Isabel Castrillon',
        'scores' => [
            'mat' => 2.5,
            'eng' => 2.8,
            'spa' => 2.9
        ]
    ],
    [
        'grogup' => 'group a',
        'student_name' => 'Beto Velez',
        'scores' => [
            'eng' => 1.5,
            'spa' => 4.0
        ]
    ]
];

// Con las notas anteriores:

// 1. Calcular la nota promedio de todos los grupos en matemáticas:
// El promedio sólo puede mostrar 2 decimales.
$cont_m = 0;
$acum_m = 0;

// Solución parcial, se debe de analizar qué le falta al ejercicio:
foreach ($grades as $gradek => $gradev) {
    $acum_m = $gradev['scores']['eng'];
    $cont_m++;
}

$promedio = $acum_m/$cont_m;

print("Promedio notas de todos los grupos: {$promedio}\n");
print("\n");

// 2. Mostrar el nombre del alumno con el mejor promedio
// Avance parcial de la solución:
foreach ($grades as $gradek => $gradev) {
    $student_name = $gradev['student_name'];
    $acum_grades = 0;
    foreach ($gradev['scores'] as $scorek => $scorev) {
        $acum_grades = $scorev;
    }
    print("Promedio notas de {$student_name}: {$acum_grades}\n");
}

