<h1> 🎓 Mini Course Tracker  </h1>
<p> A mini course tracker with a progress bar for every module.
Built with Laravel (backend) and Tailwind CSS (frontend). </p>

<h1>👨‍💻 Members </h1>
- Richard Narvaez
- Aj Mae Saco
- Chazteen Seraspe

<h2> 🚀 Getting Started </h2>

📋 Prerequisites
- PHP (version 8.2 or higher)
- Composer
- Node.js (version 16 or higher)
- MySQL

<h1> 🔧 Installation </h1> 
1. Clone the Repository

```bash
git clone https://github.com/chztn29/Mini-Course-Tracker.git
cd Mini-Course-Tracker

2. Install Dependencies

```bash
Composer install
npm install

3.  Environment Configuration

```bash
cp .env.example .env
php artisan key:generate

4. Database Setup
```bash
php artisan migrate	


5. Run the development server
```bash
#For Node.js:
npm run dev
npm run build

#For Laravel:
php artisan serve

6. Open http://localhost:8000 in your browser to see the Laravel application. 

<h1> 📚 Features Overview </h1>

- Users can *register* or *log in*.
- After authentication, users are redirected to the *dashboard*.
- The dashboard displays the user's total lessons and courses completed, ongoing courses, and in-progress courses.
- Users can *view lessons* within each course.
- Users can *track their progress* and *mark lessons as completed*.

### 🔐 Admin Features

- Admin has a separate *admin dashboard*.
- The admin can *view statistics*, including:
  - Total number of users
  - Total courses
  - Total lessons
  - Number of completed lessons across all users
- The admin can *create*, *edit*, and *delete*:
  - Courses
  - Lessons
