// Scroll Titles ----------
const titleScroll= document.querySelectorAll('.title');

titleScroll.forEach(currentTitle => {
    // Create the observer
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('scroll-title');
                console.log("animation scroll ", entry);
            return;
            }
            entry.target.classList.remove('scroll-title');
        });
    });

    observer.observe(currentTitle);
});
