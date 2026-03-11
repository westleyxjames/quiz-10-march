// Quiz data
const quizzes = [
    {
        name: "General Knowledge Master",
        category: "General Knowledge",
        time: "15 mins",
        questions: 20,
        reward: "500 Points",
        difficulty: "Medium",
        color: "linear-gradient(to bottom right, #00d9ff, #4dd5eb)",
        icon: `<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                <circle cx="12" cy="12" r="10"/>
                <path d="M12 16v-4M12 8h.01"/>
               </svg>`
    },
    {
        name: "Tech Trivia Challenge",
        category: "Technology",
        time: "12 mins",
        questions: 15,
        reward: "400 Points",
        difficulty: "Hard",
        color: "linear-gradient(to bottom right, #7c3aed, #a78bfa)",
        icon: `<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                <polyline points="16 18 22 12 16 6"/>
                <polyline points="8 6 2 12 8 18"/>
               </svg>`
    },
    {
        name: "Sports Legends Quiz",
        category: "Sports",
        time: "10 mins",
        questions: 12,
        reward: "300 Points",
        difficulty: "Easy",
        color: "linear-gradient(to bottom right, #6366f1, #818cf8)",
        icon: `<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6M18 9h1.5a2.5 2.5 0 0 0 0-5H18M4 22h16M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22M18 2H6v7a6 6 0 0 0 12 0V2z"/>
               </svg>`
    },
    {
        name: "Music & Movies Mania",
        category: "Entertainment",
        time: "15 mins",
        questions: 18,
        reward: "450 Points",
        difficulty: "Medium",
        color: "linear-gradient(to bottom right, #ec4899, #f472b6)",
        icon: `<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                <path d="M9 18V5l12-2v13"/>
                <circle cx="6" cy="18" r="3"/>
                <circle cx="18" cy="16" r="3"/>
               </svg>`
    },
    {
        name: "World Geography Explorer",
        category: "Geography",
        time: "20 mins",
        questions: 25,
        reward: "600 Points",
        difficulty: "Hard",
        color: "linear-gradient(to bottom right, #10b981, #34d399)",
        icon: `<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                <circle cx="12" cy="12" r="10"/>
                <line x1="2" y1="12" x2="22" y2="12"/>
                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
               </svg>`
    },
    {
        name: "Gaming History Challenge",
        category: "Gaming",
        time: "10 mins",
        questions: 15,
        reward: "350 Points",
        difficulty: "Medium",
        color: "linear-gradient(to bottom right, #f97316, #fb923c)",
        icon: `<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                <line x1="6" y1="12" x2="10" y2="12"/>
                <line x1="8" y1="10" x2="8" y2="14"/>
                <line x1="15" y1="13" x2="15.01" y2="13"/>
                <line x1="18" y1="11" x2="18.01" y2="11"/>
                <rect x="2" y="6" width="20" height="12" rx="2"/>
               </svg>`
    },
    {
        name: "Literature & Arts Quiz",
        category: "Literature",
        time: "15 mins",
        questions: 20,
        reward: "500 Points",
        difficulty: "Medium",
        color: "linear-gradient(to bottom right, #8b5cf6, #a78bfa)",
        icon: `<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>
               </svg>`
    },
    {
        name: "Mixed Challenge Special",
        category: "Mixed",
        time: "25 mins",
        questions: 30,
        reward: "800 Points",
        difficulty: "Hard",
        color: "linear-gradient(to bottom right, #d946ef, #f0abfc)",
        icon: `<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
               </svg>`
    }
];

// Function to get difficulty badge class
function getDifficultyClass(difficulty) {
    switch (difficulty) {
        case "Easy":
            return "difficulty-easy";
        case "Medium":
            return "difficulty-medium";
        case "Hard":
            return "difficulty-hard";
        default:
            return "";
    }
}

// Generate quiz cards
function generateQuizCards() {
    const quizGrid = document.getElementById('quizGrid');
    if (!quizGrid) return;

    quizzes.forEach((quiz, index) => {
        const quizCard = document.createElement('div');
        quizCard.className = 'quiz-card fade-in-up';
        quizCard.style.animationDelay = `${index * 0.1}s`;

        quizCard.innerHTML = `
            <div class="quiz-icon" style="background: ${quiz.color}">
                ${quiz.icon}
            </div>
            <h3>${quiz.name}</h3>
            <p class="quiz-category">${quiz.category}</p>
            
            <div class="quiz-stats">
                <div class="quiz-stat">
                    <span class="quiz-stat-label">Time:</span>
                    <span class="quiz-stat-value">${quiz.time}</span>
                </div>
                <div class="quiz-stat">
                    <span class="quiz-stat-label">Questions:</span>
                    <span class="quiz-stat-value">${quiz.questions}</span>
                </div>
                <div class="quiz-stat">
                    <span class="quiz-stat-label">Reward:</span>
                    <span class="quiz-stat-value quiz-reward">${quiz.reward}</span>
                </div>
            </div>

            <div class="difficulty-badge ${getDifficultyClass(quiz.difficulty)}">
                ${quiz.difficulty}
            </div>

            <div class="quiz-labels">
                <span class="quiz-label label-primary">Free Challenge</span>
                <span class="quiz-label label-secondary">Reward Unlock</span>
            </div>

            <button class="quiz-button" style="background: ${quiz.color}">
                Start Challenge
            </button>
        `;

        quizGrid.appendChild(quizCard);
    });

    // Add click event to all quiz buttons
    const quizButtons = quizGrid.querySelectorAll('.quiz-button');
    quizButtons.forEach((button, index) => {
        button.addEventListener('click', () => {
            alert(`Starting ${quizzes[index].name}! This is a demo - quiz functionality would be implemented here.`);
        });
    });
}

// Initialize when DOM is loaded
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', generateQuizCards);
} else {
    generateQuizCards();
}
