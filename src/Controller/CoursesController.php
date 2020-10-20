<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CoursesController extends AbstractController
{
    /**
     * @Route("/courses", name="courses")
     */
    public function index()
    {
        $courses = [
            [
                'lesson' => "Mathématiques",
                'next_course' => "Aujourd'hui",
                'teacher_name' => "Mehdi",
                'schedule' => "Lundi et Mardi",
                'starting_day' => "samedi 3 octobre",
                'duration' => "1h30 par jour",
                'starting_hour' => "14h30",
                'whatever' => "Jérémy",
            ],
            [
                'lesson' => "Philosophie",
                'next_course' => "lundi 5 octobre",
                'teacher_name' => "Serge",
                'schedule' => "Lundi",
                'starting_day' => "lundi 5 octobre",
                'duration' => "1h00 par jour",
                'starting_hour' => "10h30",
                'whatever' => "Sandy",
            ],
            [
                'lesson' => "Physique",
                'next_course' => "Aujourd'hui",
                'teacher_name' => "Kevin",
                'schedule' => "Mardi et Mercredi",
                'starting_day' => "mardi 6 octobre",
                'duration' => "1h30 par jour",
                'starting_hour' => "8h30",
                'whatever' => "Dexiong",
            ],
            [
                'lesson' => "Biochimie",
                'next_course' => "Aujourd'hui",
                'teacher_name' => "Cornélia",
                'schedule' => "Lundi et Vendredi",
                'starting_day' => "samedi 3 octobre",
                'duration' => "1h30 par jour",
                'starting_hour' => "15h00",
                'whatever' => "Amel",
            ],
        ];

        return $this->render('courses/index.html.twig', [
            'courses' => $courses,
        ]);
    }
}
