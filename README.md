<h1> 🎓 Mini Course Tracker  </h1>
<p> A mini course tracker with a progress bar for every module.
Built with Laravel (backend) and Tailwind CSS (frontend). </p>

## 👯‍♂️ Members

- **Chazteen Joy Seraspe**  
- **Richard Narvaez**  
- **AJ Mae Kudasale Saco**

## 🚀 Getting Started

### 📋 Prerequisites
- PHP (version 8.2 or higher)
- Composer
- Node.js (version 16 or higher)
- MySQL

### Installation
    ``bahs
1. Clone the Repository
   ```bash
git clone https://github.com/chztn29/Mini-Course-Tracker.git
cd Mini-Course-Tracker
     ```bash
2. Install Dependencies

    ```bash
Composer install
npm install
    ```bash
3.  Environment Configuration
   
    ```bash
cp .env.example .env
php artisan key:generate
    ```bash
4. Database Setup
    ```bash
php artisan migrate	


5. Run the development server
'''bash
#For Node.js:
npm run dev
npm run build

#For Laravel:
php artisan serve

6. Open http://localhost:8000 in your browser to see the Laravel application. 

### 📚 Features Overview 

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

7.  Open your browser to [http://localhost:8000](http://localhost:8000) to view the app.

---

## 📁 Project Structure

```
Mini-Course-Tracker/
├── app/
│   ├── Http/Controllers/
│   ├── Models/
│   └── ...
├── resources/
│   ├── views/              # Blade views (layouts, pages, particials)
│   ├── css/                # Style files (e.g., Tailwind, Sass)
│   └── js/                 # JavaScript for interactivity
├── routes/
│   └── web.php             # HTTP routes
├── database/
│   ├── migrations/
│   └── seeders/
├── public/                 # Frontend assets
├── vite.config.js or webpack.mix.js
└── ...
```

---
