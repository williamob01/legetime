<?php

use App\Specialty;
use Illuminate\Database\Seeder;

class SpecialtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Specialty::create([
            'name' => 'Medicina General',
            'description' => 'Primer nivel de atención médica. La consulta está orientada al abordaje integral del paciente en su aspecto físico, mental y social',
        ]);

        Specialty::create([
            'name' => 'Otorrinolaringología',
            'description' => 'Especialidad médica que se encarga de la evaluación y curación de las enfermedades del oído, la nariz y la garganta, así como sus alteraciones',
        ]);

        Specialty::create([
            'name' => 'Neumología',
            'description' => 'Especialidad médica que se encarga del estudio de la fisiología y la patología del aparato respiratorio, así como de las técnicas diagnósticas, terapéuticas',
        ]);
    }
}