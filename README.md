# Enroll System – Student Enrollment & Prerequisite Checker

This is a web-based enrollment system built using Laravel that manages student academic progress and ensures proper subject enrollment based on prerequisites.

The system is designed to simulate how schools handle subject enrollment, where students must complete required subjects before advancing.

## Features

* Add, edit, and manage student records
* Manage subjects, levels, and curriculum structure
* Assign prerequisite subjects
* Track completed and ongoing subjects per student
* Automatic eligibility checking before enrollment
* View student progress (completed, ongoing, eligible subjects)

## Screenshots

*(On Progress)*

## How It Works

When enrolling a student into a subject, the system checks:

* If the subject has prerequisites
* If the student has already completed those prerequisites

If the requirements are not met, the system prevents enrollment.
This ensures that students follow the correct academic path.

## Tech Stack

* Laravel
* PHP
* MySQL
* Blade
* HTML / CSS

## Notes

This project was built to practice backend logic, particularly handling relationships between data (students, subjects, and prerequisites) and enforcing business rules in a real-world scenario.

The system can still be expanded with features like authentication, dashboards, and reporting.
