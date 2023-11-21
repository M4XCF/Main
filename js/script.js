function toggleAnswer(answerId) {
    const answer = document.getElementById(answerId);
    const faqItem = answer.parentElement;

    faqItem.classList.toggle('active');
}