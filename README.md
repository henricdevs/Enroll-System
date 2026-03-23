# Enroll System

This is a simple web-based system built using Laravel for tracking student academic progress and checking if a student is eligible to enroll in subjects.


## About the Project

This project was created as part of our ITP106 subject.

The system follows a curriculum structure where subjects can have prerequisites. It checks if a student has completed the required subjects before allowing enrollment.


## Features

- Manage students (add, edit, delete)
- Manage subjects and levels
- Assign prerequisites to subjects
- Track completed and ongoing subjects
- Automatically check enrollment eligibility
- View student progress (completed, ongoing, eligible subjects)


## How It Works

Before a student can enroll in a subject, the system checks:

- If the subject has prerequisites
- If those prerequisites are already completed by the student

If not, the system prevents enrollment.


## Technologies Used

- Laravel
- PHP
- MySQL
- Blade
- HTML/CSS

