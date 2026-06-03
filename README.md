<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AI Resume Analyzer - Laravel 13</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6;">

    <h1>📄 AI Resume Analyzer (Laravel 13)</h1>

    <p>
        An intelligent <b>AI-powered Resume Analyzer</b> built with <b>Laravel 13</b>,
        integrated with <b>laravel/ai package</b> and <b>Google Gemini API</b>.
        It analyzes resumes and provides smart career insights including ATS score,
        strengths, weaknesses, and improvement suggestions.
    </p>

    <hr>

    <h2>🚀 Features</h2>
    <ul>
        <li>📊 <b>ATS Score Calculation</b> - Evaluates resume compatibility with ATS systems</li>
        <li>🤖 <b>AI-Powered Analysis</b> using Google Gemini API</li>
        <li>💪 <b>Strength Detection</b> - Highlights key strengths in resume</li>
        <li>⚠️ <b>Weakness Identification</b> - Finds missing skills and gaps</li>
        <li>📈 <b>Improvement Suggestions</b> - Provides actionable feedback</li>
        <li>🧠 <b>Smart Insights</b> - Overall resume evaluation report</li>
    </ul>

    <hr>

    <h2>🛠 Tech Stack</h2>
    <ul>
        <li><b>Backend:</b> Laravel 13</li>
        <li><b>AI Package:</b> laravel/ai</li>
        <li><b>AI Model:</b> Google Gemini API</li>
        <li><b>Language:</b> PHP 8+</li>
        <li><b>Frontend:</b> Blade / Bootstrap</li>
    </ul>

    <hr>

    <h2>⚙️ How It Works</h2>
    <ol>
        <li>User uploads or enters resume data</li>
        <li>System extracts and processes content</li>
        <li>Data is sent to Gemini AI API</li>
        <li>AI returns structured analysis:
            <ul>
                <li>ATS Score</li>
                <li>Strengths</li>
                <li>Weaknesses</li>
                <li>Improvement Suggestions</li>
            </ul>
        </li>
        <li>Results are shown in dashboard</li>
    </ol>

    <hr>

    <h2>📊 Sample Output</h2>
    <ul>
        <li><b>ATS Score:</b> 78%</li>
        <li><b>Strengths:</b> Strong technical skills, good project experience</li>
        <li><b>Weaknesses:</b> Missing certifications, lack of achievements</li>
        <li><b>Improvements:</b> Add measurable results, optimize keywords</li>
    </ul>

    <hr>

    <h2>🔧 Installation</h2>
    <pre>
git clone https://github.com/your-username/ai-resume-analyzer.git
cd ai-resume-analyzer
composer install
npm install && npm run dev
cp .env.example .env
php artisan key:generate
    </pre>

    <h2>🔑 Environment Variables</h2>
    <pre>
GEMINI_API_KEY=your_gemini_api_key
    </pre>

    <h2>▶️ Run Project</h2>
    <pre>
php artisan serve
    </pre>

    <p>Visit: <b>http://localhost:8000</b></p>

    <hr>

    <h2>📌 Future Improvements</h2>
    <ul>
        <li>PDF Resume Upload Support</li>
        <li>Multi-language Analysis</li>
        <li>Job Role Matching System</li>
        <li>Resume History Tracking</li>
        <li>Export as PDF Report</li>
    </ul>

    <hr>

    <h2>👨‍💻 Developer</h2>
    <p>Built with ❤️ using Laravel 13 + Gemini AI Integration</p>

</body>
</html>
