<?php

use Illuminate\Database\Seeder;
use App\Contest;
use App\Position;
use App\Department;

class ContestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Crear departamentos de la Facultad de Ciencias Exactas;
        $department = new Department;
        $department->name = 'Física';
        $department->save();

        $department = new Department;
        $department->name = 'Informática';
        $department->save();

        $department = new Department;
        $department->name = 'Matemática';
        $department->save();

        $department = new Department;
        $department->name = 'Química';
        $department->save();           

        // Crear cargos de los llamados a inscripcion
        $position = new Position;
        $position->name = 'Jefe de Trabajos Practicos';
        $position->save();

        $position = new Position;
        $position->name = 'Auxiliar de 1ra Categoría';
        $position->save();

        $position = new Position;
        $position->name = 'Auxiliar de 2da Categoría';
        $position->save();

        $position = new Position;
        $position->name = 'Auxiliar Adscripto';
        $position->save();

        $position = new Position;
        $position->name = 'Graduado Adscripto';
        $position->save();

        $position = new Position;
        $position->name = 'Beca de Formación';
        $position->save();

        $position = new Position;
        $position->name = 'Tutores Estudiantes';
        $position->save();

    }
}
