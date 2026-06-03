<?php

namespace App\Http\Controllers;

use App\Ai\Agents\ResumeAnalyzer;
use Illuminate\Http\Request;
use Smalot\PdfParser\Parser;

class ResumeAnalyzerController extends Controller
{
    public function index()
    {
        return view('resume.index');
    }

    public function analyze(Request $request)
    {
        $request->validate([
            'resume' => ['required', 'file', 'mimes:pdf', 'max:5120'],
            'job_description' => ['nullable', 'string', 'max:10000'],
        ]);

        $resumeFile = $request->file('resume');

        $parser = new Parser();
        $pdf = $parser->parseFile($resumeFile->getRealPath());
        $resumeText = $this->cleanPdfText($pdf->getText());

        if(strlen($resumeText) < 100) {
            return back()->withErrors([
                'resume' => 'The resume text is too short to analyze. Please upload a more detailed resume.'
            ]);
        }

        $resumeText = str($resumeText)->limit(15000)->toString(); // Limit to 15,000 characters for analysis

        $jobDescription = $request->input('job_description', null);

        $prompt = <<<PROMPT
            Analyze the following resume text and optional job description. Provide a detailed analysis of the resume's strengths, weaknesses, ATS compatibility, and actionable suggestions for improvement. Tailor feedback to the job description when provided.

            Resume Text:
            {$resumeText}

            Job Description:
            {$jobDescription}

            Give practical feedback for improving this resume for software/technical roles, and suggest realistic roles the candidate may be suitable for based on their experience.
        PROMPT;
        

        // Here you would typically call your ResumeAnalyzer agent and pass the resume text and job description.

        $analysis = (new ResumeAnalyzer())->prompt($prompt);

        return view('resume.result', [
            'analysis' => $analysis,
        ]);
    }

    private function cleanPdfText($text)
    {        // Remove excessive whitespace and newlines
        $cleaned = preg_replace('/\s+/', ' ', $text);
        return trim($cleaned);
    }
}
