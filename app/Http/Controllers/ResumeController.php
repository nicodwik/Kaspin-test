<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        $skills = [
            [
                'icon' => 'fa-code',
                'title' => 'Golang',
                'subtitle' => '< 1 year',
            ],
            [
                'icon' => 'fa-code',
                'title' => 'Laravel & PHP',
                'subtitle' => '> 2 years',
            ],
            [
                'icon' => 'fa-code',
                'title' => 'Node JS & Express JS',
                'subtitle' => '< 1 year',
            ],
            [
                'icon' => 'fa-code',
                'title' => 'Vue JS',
                'subtitle' => '> 1 year',
            ],
            [
                'icon' => 'fa-database',
                'title' => 'MYSQL',
                'subtitle' => '> 2 years',
            ],
            [
                'icon' => 'fa-database',
                'title' => 'Mongo DB',
                'subtitle' => '> 1 year',
            ],
            [
                'icon' => 'fa-code',
                'title' => 'Bootstrap & Jquery',
                'subtitle' => '> 2 years',
            ],
        ];

        $experiences = [
            [
                'title' => 'Fullstack Web Developer',
                'company' => 'PT. Nalar Naluri Indonesia',
                'date' => 'Aug 2020 - Aug 2021',
                'desc' => 'Developing website app (Inventory Management System) from scratch with latest version of Laravel, Jquery and Vue JS. Building API for mobile app needs, all done with small team (2 person) and targetted timeline',
            ],
            [
                'title' => 'Backend Developer',
                'company' => 'Meka Media Creative - Freelance',
                'date' => 'Apr 2021 - Jun 2021',
                'desc' => 'Developed a new Company Web Profile integrated with database and admin pages for provide data dynamically',
            ],
            [
                'title' => 'Fullstack Web Developer',
                'company' => 'Freelance',
                'date' => 'Jun 2020 - Sept 2020',
                'desc' => 'Developing a project management website for my friend who worked in the shipping industry. All done for 3 months from 5 months agreement.',
            ],
        ];

        return view('pages.resume', compact('skills', 'experiences'));
    }
}
