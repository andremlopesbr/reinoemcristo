document.addEventListener('DOMContentLoaded', () => {
    // First we get the viewport height and we multiple it by 1% to get a value for a vh unit
    let vh = window.innerHeight * 0.01;
    // Then we set the value in the --vh custom property to the root of the document
    document.documentElement.style.setProperty('--vh', `${vh}px`);

    // We listen for the resize event
    window.addEventListener('resize', () => {
        // We execute the same code as above
        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
        positionScrollHints(); // Adicionado para posicionar o scroll hint
    });
    const mainContent = document.querySelector('main');
    const slides = document.querySelectorAll('.slide');
    const startBtn = document.getElementById('startBtn');
    const restartBtn = document.getElementById('restartBtn');
    const nextBtn = document.getElementById('nextBtn');
    const prevBtn = document.getElementById('prevBtn');
    const navigation = document.getElementById('navigation');
    const slideIndicator = document.getElementById('slide-indicator');
    const appHeader = document.getElementById('app-header');
    const slideTitle = document.getElementById('slide-title');
    const scrollHint = document.getElementById('scroll-hint');
    const swipeHintLeft = document.getElementById('swipe-hint-left');
    const swipeHintRight = document.getElementById('swipe-hint-right');
    let scrollHintVisible = false;

    function isMobileDevice() {
        return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
    }

    function positionScrollHints() {
        if (isMobileDevice()) {
            const footerHeight = navigation.offsetHeight;
            scrollHint.style.bottom = `${footerHeight + 20}px`; // 20px above the footer
            // swipeHintLeft.style.bottom = `${footerHeight + 20}px`; // Removed, handled by CSS
            // swipeHintRight.style.bottom = `${footerHeight + 20}px`; // Removed, handled by CSS
        }
    }

    function adjustMainContentPadding() {
        const headerHeight = appHeader.offsetHeight;
        const footerHeight = navigation.offsetHeight;
        mainContent.style.paddingTop = `${headerHeight}px`;
        mainContent.style.paddingBottom = `${footerHeight}px`;
    }

    // Call adjustMainContentPadding initially and on resize
    adjustMainContentPadding();
    window.addEventListener('resize', adjustMainContentPadding);

    let currentSlide = 0;
    const totalPresentationSlides = slides.length - 1; // Total de slides da apresentação (ignora o slide 0)

    function checkScroll() {
        setTimeout(() => {
            const isScrollable = mainContent.scrollHeight > mainContent.clientHeight;
            const isTargetSlide = currentSlide >= 2 && currentSlide <= 6;

            if (isScrollable && isTargetSlide && isMobileDevice()) { // Added isMobileDevice()
                scrollHint.classList.add('visible');
                scrollHintVisible = true;
            } else {
                scrollHint.classList.remove('visible');
                scrollHintVisible = false;
            }
        }, 100);
    }

    function showSwipeHints() {
        if (currentSlide > 0 && currentSlide < slides.length -1) { // Show only on presentation slides, not first or last
            swipeHintLeft.classList.add('visible');
            swipeHintRight.classList.add('visible');
            setTimeout(() => {
                swipeHintLeft.classList.remove('visible');
                swipeHintRight.classList.remove('visible');
            }, 5000); // Hide after 5 seconds (increased for better visibility)
        } else {
            swipeHintLeft.classList.remove('visible');
            swipeHintRight.classList.remove('visible');
        }
    }

    mainContent.addEventListener('scroll', () => {
        if (scrollHintVisible && mainContent.scrollTop > 50) { // Oculta após rolar um pouco
            scrollHint.classList.remove('visible');
            scrollHintVisible = false;
        }
    });

    function updateHeader(index) {
        const slide = document.getElementById(`slide-${index}`);
        if (slide && slide.dataset.title) {
            slideTitle.textContent = slide.dataset.title;
        } else {
            slideTitle.textContent = '';
        }
    }

    function showSlide(index) {
        mainContent.scrollTop = 0; // Reseta a rolagem ao trocar de slide
        slides.forEach(slide => slide.classList.remove('active'));
        const slideToShow = document.getElementById(`slide-${index}`);
        if (slideToShow) {
            slideToShow.classList.add('active');
        }

        if (index > 0) {
            slideIndicator.textContent = `${index} / ${totalPresentationSlides}`;
        }
        updateHeader(index);
        positionScrollHints(); // Adicionado para posicionar o scroll hint
        checkScroll();
        if (isMobileDevice()) {
            showSwipeHints(); // Call to show swipe hints
        }
    }

    function next() {
        if (currentSlide < slides.length - 1) { // Permite ir até o último slide
            currentSlide++;
            showSlide(currentSlide);
        }
    }

    function prev() {
        if (currentSlide > 1) {
            currentSlide--;
            showSlide(currentSlide);
        }
    }

    startBtn.addEventListener('click', () => {
        currentSlide = 1;
        showSlide(currentSlide);
        appHeader.classList.remove('hidden');
        navigation.classList.remove('hidden');
        adjustMainContentPadding(); // Adjust padding after header/footer become visible
    });

    restartBtn.addEventListener('click', () => {
        currentSlide = 0;
        showSlide(currentSlide);
        appHeader.classList.add('hidden');
        navigation.classList.add('hidden');
        adjustMainContentPadding(); // Adjust padding after header/footer become hidden
    });

    nextBtn.addEventListener('click', next);
    prevBtn.addEventListener('click', prev);

    document.addEventListener('keydown', (e) => {
        if (currentSlide > 0) {
            if (e.key === 'ArrowRight') next();
            else if (e.key === 'ArrowLeft') prev();
        }
    });

    // Swipe gestures for mobile
    let touchStartX = 0;
    let touchStartY = 0;
    const swipeThreshold = 50; // Minimum horizontal distance for a swipe
    const verticalThreshold = 30; // Maximum vertical movement allowed for a horizontal swipe

    mainContent.addEventListener('touchstart', (e) => {
        touchStartX = e.touches[0].clientX;
        touchStartY = e.touches[0].clientY;
    });

    mainContent.addEventListener('touchmove', (e) => {
        const touchCurrentX = e.touches[0].clientX;
        const touchCurrentY = e.touches[0].clientY;

        const deltaX = touchCurrentX - touchStartX;
        const deltaY = touchCurrentY - touchStartY;

        // Se o movimento for predominantemente horizontal e exceder um pequeno limiar, previne a rolagem vertical
        if (Math.abs(deltaX) > Math.abs(deltaY) && Math.abs(deltaX) > 10) { // Limiar de 10px para evitar acionamento acidental
            e.preventDefault();
        }
    });

    mainContent.addEventListener('touchend', (e) => {
        const touchEndX = e.changedTouches[0].clientX;
        const touchEndY = e.changedTouches[0].clientY;

        const deltaX = touchEndX - touchStartX;
        const deltaY = touchEndY - touchStartY;

        // Check if it's primarily a horizontal swipe and exceeds the threshold
        if (Math.abs(deltaX) > swipeThreshold && Math.abs(deltaY) < verticalThreshold) {
            if (deltaX > 0) { // Swiped right
                prev();
            } else { // Swiped left
                next();
            }
        }
    });

    showSlide(0);
});