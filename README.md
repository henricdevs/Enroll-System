# IT Curriculum Progression & Eligibility Tracking System

This project is a web-based system built using Laravel.  
Its purpose is to track student academic progress and determine if a student is eligible to enroll in subjects based on prerequisites.


## About the Project

This system simulates how schools manage student progress using a curriculum.  
It checks if students have completed required subjects before allowing them to enroll in higher-level subjects.


## Features

- Add, edit, and manage students
- Manage subjects and levels
- Assign prerequisite subjects
- Track completed and ongoing subjects
- Automatically check if a student is eligible to enroll
- Show student progress (completed, ongoing, eligible subjects)


## How It Works

Each subject can have prerequisites.  
Before a student can enroll in a subject, the system checks if all required subjects are already completed.

If not, enrollment will be blocked.


## Technologies Used

- Laravel
- PHP
- MySQL
- Blade (for UI)
- HTML/CSS
