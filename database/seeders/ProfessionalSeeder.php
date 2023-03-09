<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProfessionalSeeder extends Seeder
{
    public function run()
    {
        $professionals = array(
            array(
                'name' => 'Catherine Andrea Zambrano Styl',
                'specialties_id' => 4,
                'order' => 0,
                'img' => 'catherine_zambrano.png',
                'registros' => ['Registro Superintendencia de salud N°100405','Registro Ministerio de educación N°5738'],
                'titulos' => ['Diplomada en Psicoterapia infanto juvenil, Diplomada en Aprendizaje basado en competencias
                y Coaching Educacional de la Universidad de Complutense de Madrid.'],
                'experiencias' => [
                    'Su experiencia clínica se basa en diversas áreas de los trastornos del neurodesarrollo (desarrollo infantil, trastornos del espectro autista, déficit atencional, trastornos de aprendizaje, ansiedad, depresión y desregulación emocional), evaluación y aprendizaje infantil, entrenamiento comunicacional, apoyo familiar en formación de hábitos y otros.',
                    'Conjuntamente se ha desarrollado en el ámbito público y privado, desde el área de la docencia y dirección en educación superior en InstituTo Profesional Aiep, Universidad de Los Lagos, Universidad Santo Tomás,  relatorías y capacitaciones dentro y fuera de la región.'
                    ]
            ),
            array(
                'name' => 'Rosana Andrea Espinosa Silva',
                'specialties_id' => 4,
                'order' => 0,
                'img' => 'rosana_espinosa.png',
                'registros' => ['Registro Superintendencia de salud N° 438406'],
                'titulos' => ['Diplomada en Psicopatologías infanto juvenil y actualmente cursando Magister en Neuropsicología.'],
                'experiencias' => ['Su experiencia en el área clínica, en salud y organizacional se ha desarrollado en diversos ámbitos, entre ellos su desarrollo en la Unidad de paciente crítico (UPC) tanto en pacientes adultos como pediátricos, intervención en crisis, primeros auxilios psicológicos, manejo de estrés, resolución de conflictos, trastornos de ansiedad y depresión, proceso de duelo, adherencia al tratamiento y trastornos del neurodesarrollo, entre otros.']
            ),
            array(
                'name' => 'Daniela Karina Vega Moreno',
                'specialties_id' => 8,
                'order' => 0,
                'img' => 'daniela_vega.png',
                'registros' => ['Registro Ministerio de salud N° 264459'],
                'titulos' => [],
                'experiencias' => ['Su experiencia en atención clínica en el área infantil, adultos y adultos mayores, específicamente se ha desarrollado como médico cirujano en servicio de urgencias, hospitalizados, policlínico, servicio de hemodiálisis, atención primaria de salud en diversos CESFAM y hospitales de comunas en la región.','Conjuntamente se desarrolla en el área de la docencia en educación superior en Universidad Mayor y Universidad Mayor de Temuco.']
            ),
            array(
                'name' => 'Nicole Alejandra Orellana Álvarez',
                'specialties_id' => 5,
                'order' => 0,
                'img' => 'nicole_orellana.png',
                'registros' => ['Registro Ministerio de educación N° 321684'],
                'titulos' => ['Diplomada en dificultades específicas del aprendizaje y actualmente cursando Magister en Dificultades específicas de aprendizaje.'],
                'experiencias' => ['Su experiencia en el área educativa en nivel pre básica y básica completa, está basada en el desarrollo de intervenciones específicas en necesidades educativas permanentes y transitorias.',
                'Su rol al interior del aula, está orientado a entregar apoyo diferenciado a niños de programa de integración escolar y apoyo directo en adecuaciones diferenciadas, nivelación en primer ciclo básico, evaluaciones, intervenciones psicopedagógicas y apoyo educativo a las familias.']
            ),
            array(
                'name' => 'Marite Calliñir Escobar',
                'specialties_id' => 1,
                'order' => 0,
                'img' => 'marite_callinir.png',
                'registros' => ['Registro Superintendencia de salud N° 506210'],
                'titulos' => [],
                'experiencias' => ['Su experiencia en atención clínica en el área infantil juvenil se basa el desarrollo en evaluación e intervención en el área de integración sensorial y desarrollo psicomotor, entregando apoyo a los niños y sus familias, en coordinación con su contexto educativo, siempre formando parte de equipos multidisciplinarios donde se permita un trabajo en equipo en pro del bienestar de los pacientes.',
                'Conjuntamente se desarrolla en el ámbito educativo, desde el área de la docencia en educación superior en la facultad técnica de la Universidad Católica de Temuco.']
            ),
            array(
                'name' => 'Angélica Pardo Salazar',
                'specialties_id' => 2,
                'order' => 0,
                'img' => 'angelica_pardo.png',
                'registros' => ['Registro Superintendencia de salud N°207107','Registro Ministerio de educación N°77159'],
                'titulos' => ['Diplomada en autismo, Certificada en test IDTEL Universidad de Valparaíso, formación en Reorganización Neurofuncional a través del Método Padovan; Atención Temprana, Síndrome de Down, así como evaluación e intervención en lectoescritura.'],
                'experiencias' => ['Su experiencia en el ámbito educativo se basa en formas parte quipos de programas de integración escolar, y además encargada de evaluar e intervenir habla, lenguaje y comunicación.']
            ),
            array(
                'name' => 'María Victoria Coffré Labbé',
                'specialties_id' => 2,
                'order' => 0,
                'img' => 'maria_coffre.png',
                'registros' => ['Registro Superintendencia de salud N° 504690'],
                'titulos' => ['Diplomada en Trastornos Específicos del Lenguaje, Certificaciones en Terapia en Alimentación Nivel 1, PROMPT, Certificación en PEP-3, Metodología TEACH y PECS.'],
                'experiencias' => ['Su experiencia se ha desarrollado en intervención de población infantil, incorporando en sus terapias el juego como eje central del aprendizaje, además de experiencia en atención temprana, Trastornos del Desarrollo del lenguaje y Síndrome de Down.']
            ),
            array(
                'name' => 'Annelore Fernández Angulo',
                'specialties_id' => 2,
                'order' => 0,
                'img' => 'annelore_fernandez.png',
                'registros' => ['Registro Superintendencia de salud N° 206960','Registro Ministerio de educación N°77249'],
                'titulos' => ['Diplomada en Trastorno del espectro autista y Certificación clínica para Aplicación de ADOS-2.'],
                'experiencias' => ['Su experiencia se ha desarrollado en el área clínica infanto juvenil, específicamente en intervención de niños y jóvenes con trastorno del espectro autista, e intervención en área de lenguaje y habla infantil.']
            ),
            array(
                'name' => 'Javiera Paz Neira Currin',
                'specialties_id' => 2,
                'order' => 0,
                'img' => 'javiera_neira.png',
                'registros' => ['Registro Superintendencia de salud N° 624231'],
                'titulos' => ['Diplomada en Autismo con enfoque en intervención clínica en Hyperpraxis, Argentina.'],
                'experiencias' => ['Su experiencia en áreas de intervención Amplia gama de estrategias de intervención en autismo, tales como TEACCH, ABA y floortime. Además de aplicación de pruebas estandarizadas para apoyar al diagnóstico de autismo, como ADOS 2.']
            ),
            array(
                'name' => 'Claudia Fernández Flores',
                'specialties_id' => 2,
                'order' => 0,
                'img' => 'claudia_fernandez.png',
                'registros' => ['Registro Superintendencia de salud N° 658143','Registro Ministerio de educación N° 310447'],
                'titulos' => ['Certificada en Instrumento de diagnóstico para los Trastornos especificos del lenguaje','Certificada en Autismo y modalidades de intervención','Certificada en Otoscopia y Lavado de oidos y actualmente cursando Diplomado en Neurorehabilitación.'],
                'experiencias' => ['Su experiencia en atención clínica en el área infantil, adultos y adultos mayores, especificamente en evaluaciones e intervenciones en trastornos de habla, lenguaje, deglución, audición y voz. Además desarrollo de experiencia en talleres de estimulación cognitiva con grupos de adultos mayores, uso adecuado de la voz en docentes y trabajadores de retail.']
            ),
            array(
                'name' => 'Alison Bustos Martínez',
                'specialties_id' => 6,
                'order' => 0,
                'img' => 'alison_bustos.png',
                'registros' => ['Registro Ministerio de educación N° 89902'],
                'titulos' => ['Educadora diferencial con mención en Deficiencia Mental y Déficit Múltiples','Postítulo en Audición y Lenguaje con Integración Escolar.'],
                'experiencias' => ['En el área educativa, su experiencia con niños y adolescentes en diferentes etapas escolares, con y sin necesidades educativas, basando su trabajo específicamente en diagnóstico, intervención e implementación estratégica de apoyo educativo. Además de implementar una flexibilidad curricular innovadora, expresada a través de la aplicación de adaptaciones curriculares, en aulas de escuelas especiales o aulas comunes para propiciar aprendizajes significativos.']
            ),
            array(
                'name' => 'Melisa Hauri Coronado',
                'specialties_id' => 3,
                'order' => 0,
                'img' => 'melisa_hauri.png',
                'registros' => ['Registro Ministerio de salud N° 616593'],
                'titulos' => ['Diplomada en Endocrinología y diabetes en niños, acreditada en Antropometrista ISAK 1.'],
                'experiencias' => ['Su formación profesional en complicaciones y síndrome de realimentación el área infantil, adulto y adulto Mayor; nutrición en el espectro autista le ha permitido desarrollar servicios de rehabilitación, nutrición deportiva y salud física, nutrición intrahospitalaria en servicios de Medicina, Pediatría y Maternidad.']
            ),
        );
        foreach ($professionals as $pro) {
            
            DB::table('professionals')->insert([
                'name'      => $pro['name'],
                'specialties_id'       => $pro['specialties_id'],
                'order'     => $pro['order'],
                'img'     => $pro['img'],
                'registros'  => implode('|',$pro['registros']),
                'titulos'   => implode('|',$pro['titulos']),
                'experiencias'   => implode('|',$pro['experiencias'])
            ]);
        }
    }
}
