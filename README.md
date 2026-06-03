#📄 AI Resume Analyzer (Laravel 13)

An intelligent AI-powered Resume Analyzer built with Laravel 13, integrating the laravel/ai package and Google Gemini API to evaluate resumes and provide smart career insights.

🚀 Features
📊 ATS Score Calculation
Automatically evaluates resume compatibility with Applicant Tracking Systems (ATS)
Provides a percentage-based score
🤖 AI-Powered Analysis (Gemini API)
Uses Google Gemini AI to deeply analyze resume content
💪 Strengths Detection
Highlights key strengths in skills, experience, and profile
⚠️ Weakness Identification
Detects missing skills, formatting issues, and improvements needed
📈 Improvement Suggestions
Provides actionable recommendations to improve resume quality
🧠 Smart Resume Insights
Overall profile evaluation with AI-based feedback
🛠️ Tech Stack
Backend: Laravel 13
AI Integration: laravel/ai package
AI Model: Google Gemini API
Language: PHP 8+
Frontend: Blade / Bootstrap (optional depending on your UI)
⚙️ How It Works
User uploads or inputs resume data
System parses resume content
Data is sent to Gemini AI API
AI returns structured analysis:
ATS Score
Strengths
Weaknesses
Improvement Suggestions
Results are displayed in a user-friendly dashboard
📊 Output Example
ATS Score: 78%
Strengths:
Strong technical skills
Good project experience
Weaknesses:
Missing certifications
Lack of quantifiable achievements
Improvements:
Add measurable results (e.g., increased sales by 20%)
Improve keyword optimization for ATS systems
🔧 Installation
git clone https://github.com/your-username/ai-resume-analyzer.git
cd ai-resume-analyzer
composer install
npm install && npm run dev
cp .env.example .env
php artisan key:generate
🔑 Environment Variables

Add your API keys in .env:

GEMINI_API_KEY=your_gemini_api_key
▶️ Run Project
php artisan serve

Visit: http://localhost:8000

📌 Future Improvements
PDF Resume Upload Support
Multi-language Resume Analysis
Job Role Matching System
Resume Score History Tracking
Export Analysis as PDF Report
👨‍💻 Developer

Built with ❤️ using Laravel 13 + AI Integration
