# 📄 AI Resume Analyzer (Laravel 13)

An intelligent **AI-powered Resume Analyzer** built with **Laravel 13**, integrated with **laravel/ai package** and **Google Gemini API**.  
It analyzes resumes and provides smart career insights including ATS score, strengths, weaknesses, and improvement suggestions.

---

## 🚀 Features

- 📊 **ATS Score Calculation**
  - Evaluates resume compatibility with ATS systems

- 🤖 **AI-Powered Analysis (Gemini API)**
  - Deep resume analysis using Google Gemini AI

- 💪 **Strengths Detection**
  - Highlights strong points in skills and experience

- ⚠️ **Weakness Identification**
  - Detects missing skills and gaps

- 📈 **Improvement Suggestions**
  - Gives actionable suggestions to improve resume

- 🧠 **Smart Insights**
  - Overall AI-generated career feedback

---

## 🛠 Tech Stack

- **Backend:** Laravel 13  
- **AI Package:** laravel/ai  
- **AI Model:** Google Gemini API  
- **Language:** PHP 8+  
- **Frontend:** Blade / Bootstrap  

---

## ⚙️ How It Works

1. User uploads or enters resume data  
2. System extracts resume content  
3. Data sent to Gemini API  
4. AI returns analysis:
   - ATS Score  
   - Strengths  
   - Weaknesses  
   - Improvements  
5. Results displayed in dashboard  

---

## 📊 Sample Output

- **ATS Score:** 78%
- **Strengths:** Strong technical skills, good projects
- **Weaknesses:** Missing certifications, weak achievements
- **Improvements:** Add measurable results, optimize keywords

---

## 🔧 Installation

```bash
git clone https://github.com/your-username/ai-resume-analyzer.git
cd ai-resume-analyzer
composer install
npm install && npm run dev
cp .env.example .env
php artisan key:generate
