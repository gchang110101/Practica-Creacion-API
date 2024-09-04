<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Evento;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evento>
 */
class EventoFactory extends Factory
{
    protected $model = Evento::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
     public function definition(): array
    {
         $base_ejemplo_eventos = [
            [
                'titulo' => 'Premiación de Equipo de Baloncesto',
                'descripcion' => 'Se premia al equipo femenino de baloncesto por haber ganado la liga nacional de Nicaragua.',
                'facultad' => 'FACDEP',
                'deporte' => 'Baloncesto',
                'tipo_evento' => 'Premiación',
                'estado' => 'pendiente',
                'etiquetas' => 'deporte, baloncesto, premiación, liga'
            ],
            [
                'titulo' => 'Conferencia sobre Innovación Educativa',
                'descripcion' => 'Expertos en educación discuten nuevas metodologías de enseñanza aplicadas en universidades modernas.',
                'facultad' => 'FIA',
                'deporte' => null,
                'tipo_evento' => 'Conferencia',
                'estado' => 'activo',
                'etiquetas' => 'educación, innovación, conferencia'
            ],
            [
                'titulo' => 'Partido de Fútbol Interfacultades',
                'descripcion' => 'Partido de fútbol entre la facultad de Ciencias y la facultad de Ingeniería.',
                'facultad' => 'VIDA ESTUDIANTIL',
                'deporte' => 'Fútbol',
                'tipo_evento' => 'Partido',
                'estado' => 'activo',
                'etiquetas' => 'deporte, fútbol, interfacultades, partido'
            ],
            [
                'titulo' => 'Torneo de Ajedrez Universitario',
                'descripcion' => 'Torneo de ajedrez donde competirán los mejores jugadores de cada facultad.',
                'facultad' => 'FCAE',
                'deporte' => 'Ajedrez',
                'tipo_evento' => 'Torneo',
                'estado' => 'pendiente',
                'etiquetas' => 'ajedrez, torneo, deporte, intelectual'
            ],
            [
                'titulo' => 'Feria de Salud Mental',
                'descripcion' => 'Evento para concientizar sobre la importancia de la salud mental en el ámbito universitario.',
                'facultad' => 'FACMED',
                'deporte' => null,
                'tipo_evento' => 'Feria',
                'estado' => 'activo',
                'etiquetas' => 'salud, mental, feria, concientización'
            ],
            [
                'titulo' => 'Clínica de Natación para Principiantes',
                'descripcion' => 'Curso práctico para enseñar natación a estudiantes que deseen aprender las bases del deporte.',
                'facultad' => 'VIDA ESTUDIANTIL',
                'deporte' => 'Natación',
                'tipo_evento' => 'Taller',
                'estado' => 'pendiente',
                'etiquetas' => 'natación, taller, deporte, estudiantes'
            ],
            [
                'titulo' => 'Festival de Cultura y Arte Universitaria',
                'descripcion' => 'Presentaciones de música, teatro y exposiciones artísticas de diferentes facultades.',
                'facultad' => 'FDIH',
                'deporte' => null,
                'tipo_evento' => 'Festival',
                'estado' => 'activo',
                'etiquetas' => 'cultura, arte, festival, música, teatro'
            ],
            [
                'titulo' => 'Charlas sobre el Impacto del Cambio Climático',
                'descripcion' => 'Científicos discuten cómo afecta el cambio climático a las regiones vulnerables de América Latina.',
                'facultad' => 'Ciencias',
                'deporte' => null,
                'tipo_evento' => 'Charla',
                'estado' => 'pendiente',
                'etiquetas' => 'charla, ciencia, cambio climático'
            ],
            [
                'titulo' => 'Congreso Internacional de Robótica',
                'descripcion' => 'Un evento de tres días donde se presentarán proyectos y avances en el campo de la robótica.',
                'facultad' => 'FIA',
                'deporte' => null,
                'tipo_evento' => 'Congreso',
                'estado' => 'activo',
                'etiquetas' => 'tecnología, robótica, congreso, ingeniería'
            ],
            [
                'titulo' => 'Competencia de E-Sports entre Facultades',
                'descripcion' => 'Las mejores facultades compiten en torneos de videojuegos como parte de la semana tecnológica.',
                'facultad' => 'VIDA ESTUDIANTIL',
                'deporte' => 'E-Sports',
                'tipo_evento' => 'Competencia',
                'estado' => 'pendiente',
                'etiquetas' => 'E-Sports, videojuegos, competencia, facultades'
            ],
            [
                'titulo' => 'Taller de Inteligencia Artificial',
                'descripcion' => 'Un taller para aprender los fundamentos de la inteligencia artificial aplicada en la vida diaria.',
                'facultad' => 'FIA',
                'deporte' => null,
                'tipo_evento' => 'Taller',
                'estado' => 'activo',
                'etiquetas' => 'inteligencia artificial, taller, tecnología'
            ],
            [
                'titulo' => 'Partido de Voleibol Mixto',
                'descripcion' => 'Partido amistoso de voleibol entre equipos mixtos de las facultades de Medicina y Derecho.',
                'facultad' => 'FACMED',
                'deporte' => 'Voleibol',
                'tipo_evento' => 'Partido',
                'estado' => 'pendiente',
                'etiquetas' => 'voleibol, deporte, medicina, derecho'
            ],
            [
                'titulo' => 'Premiación de Innovación Tecnológica',
                'descripcion' => 'Se premia a los mejores proyectos tecnológicos presentados durante el congreso de ingeniería.',
                'facultad' => 'FIA',
                'deporte' => null,
                'tipo_evento' => 'Premiación',
                'estado' => 'terminado',
                'etiquetas' => 'tecnología, premiación, innovación, ingeniería'
            ],
            [
                'titulo' => 'Simposio sobre Derechos Humanos',
                'descripcion' => 'Especialistas en derechos humanos presentan ponencias sobre la situación actual en Latinoamérica.',
                'facultad' => 'FDIH',
                'deporte' => null,
                'tipo_evento' => 'Simposio',
                'estado' => 'activo',
                'etiquetas' => 'derechos humanos, simposio, FDIH'
            ],
            [
                'titulo' => 'Carrera Universitaria 5K',
                'descripcion' => 'Carrera de 5 kilómetros abierta a estudiantes de todas las facultades.',
                'facultad' => 'VIDA ESTUDIANTIL',
                'deporte' => 'Atletismo',
                'tipo_evento' => 'Carrera',
                'estado' => 'activo',
                'etiquetas' => 'deporte, atletismo, carrera, estudiantes'
            ],
            [
                'titulo' => 'Partido de Fútbol Sala',
                'descripcion' => 'Torneo de fútbol sala para equipos de diferentes carreras de la facultad de ciencias.',
                'facultad' => 'Ciencias',
                'deporte' => 'Fútbol Sala',
                'tipo_evento' => 'Torneo',
                'estado' => 'pendiente',
                'etiquetas' => 'fútbol sala, torneo, ciencias, deporte'
            ],
            [
                'titulo' => 'Semana del Emprendimiento',
                'descripcion' => 'Feria y charlas sobre emprendimiento, con ponentes invitados de diferentes industrias.',
                'facultad' => 'FCAE',
                'deporte' => null,
                'tipo_evento' => 'Feria',
                'estado' => 'activo',
                'etiquetas' => 'emprendimiento, feria, economía, negocios'
            ],
            [
                'titulo' => 'Conferencia sobre Nutrición y Salud',
                'descripcion' => 'Especialistas en salud discuten los beneficios de una buena alimentación en la vida universitaria.',
                'facultad' => 'FACMED',
                'deporte' => null,
                'tipo_evento' => 'Conferencia',
                'estado' => 'terminado',
                'etiquetas' => 'nutrición, salud, conferencia, medicina'
            ],
            [
                'titulo' => 'Torneo Interfacultades de Natación',
                'descripcion' => 'Competencia de natación donde participan los mejores nadadores de cada facultad.',
                'facultad' => 'VIDA ESTUDIANTIL',
                'deporte' => 'Natación',
                'tipo_evento' => 'Torneo',
                'estado' => 'activo',
                'etiquetas' => 'natación, deporte, torneo, interfacultades'
            ],
            [
                'titulo' => 'Feria de Emprendedores Septiembre Q1',
                'descripcion' => 'Primer mercadito UAM de Septiembre, correspondiente a la quincena 1',
                'facultad' => 'VIDA ESTUDIANTIL',
                'deporte' => null,
                'tipo_evento' => 'Feria',
                'estado' => 'finalizado',
                'etiquetas' => 'mercadito', 'mercadito uam', 'comida', 'artesanía', 'venta', 'productos'
            ]
        ];

        // busca un elemento random del arreglo
        $indice_evento = $this->faker->numberBetween(0, count($base_ejemplo_eventos) - 1);
        $evento_seleccionado = $base_ejemplo_eventos[$indice_evento];

        return array_merge($evento_seleccionado, 
        [
            'fecha_hora_inicio' => $this->faker->dateTimeBetween('+0 days', '+1 month'),
            'fecha_hora_fin' => $this->faker->dateTimeBetween('+1 hour', '+2 month'),
            'ubicacion' => $this->faker->address,
            'organizador' => $this->faker->name,
            'capacidad' => $this->faker->numberBetween(50, 500),
            'requiere_inscripcion' => $this->faker->boolean,
        ]);
        
    }
}
