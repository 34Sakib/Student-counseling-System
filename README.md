<img width="1883" height="755" alt="image" src="https://github.com/user-attachments/assets/1d4fc294-3c94-4250-b0e9-29b6fe20ad01" />



# Student Counseling System

A web-based application for managing student counseling sessions, built with [Laravel](https://laravel.com/).

## Features

- Student registration and management
- Counselor assignment
- Session scheduling and tracking
- Notes and feedback for each session
- Secure authentication for students and counselors

## Requirements

- PHP >= 8.1
- Composer
- MySQL or compatible database
- Node.js & npm (for frontend assets)

## Installation

1. **Clone the repository:**
   ```sh
   git clone https://github.com/yourusername/student-counseling-system.git
   cd student-counseling-system
   ```

2. **Install dependencies:**
   ```sh
   composer install
   npm install
   ```

3. **Copy `.env` and set up environment variables:**
   ```sh
   cp .env.example .env
   ```
   - Set your database credentials in `.env`.

4. **Generate application key:**
   ```sh
   php artisan key:generate
   ```

5. **Run migrations:**
   ```sh
   php artisan migrate
   ```

6. **Build frontend assets:**
   ```sh
   npm run dev
   ```

7. **Start the development server:**
   ```sh
   php artisan serve
   ```

## Usage

- Access the app at `http://localhost:8000`
- Register as a student or counselor and begin managing sessions

## Contributing

Pull requests are welcome! For major changes, please open an issue first to discuss what you would like to change.

## License

This project is open-sourced under the [MIT license](https://opensource.org/licenses/MIT).

---
