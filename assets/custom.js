document.addEventListener('DOMContentLoaded', () => {
    const docsTabs = document.querySelectorAll('.docs__list-item');
    const docsPanes = document.querySelectorAll('.docs__pane');

    if (!docsTabs.length || !docsPanes.length) return;

    docsTabs.forEach((tab, index) => {
        tab.addEventListener('click', () => {
            docsTabs.forEach(t => t.classList.remove('docs__list-item--active'));
            docsPanes.forEach(p => p.classList.remove('docs__pane--active'));

            tab.classList.add('docs__list-item--active');
            if (docsPanes[index]) {
                docsPanes[index].classList.add('docs__pane--active');
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const processList = document.querySelector('.process__steps');
    if (!processList) return;

    let isDown = false;
    let startX, scrollLeft;

    processList.addEventListener('mousedown', e => {
        if (window.innerWidth <= 768) return;
        isDown = true;
        processList.classList.add('is-dragging');
        startX = e.pageX - processList.offsetLeft;
        scrollLeft = processList.scrollLeft;
    });

    document.addEventListener('mouseup', () => {
        isDown = false;
        processList.classList.remove('is-dragging');
    });
    
    processList.addEventListener('mouseleave', () => {
        isDown = false;
        processList.classList.remove('is-dragging');
    });

    processList.addEventListener('mousemove', e => {
        if (!isDown || window.innerWidth <= 768) return;
        e.preventDefault();
        const x = e.pageX - processList.offsetLeft;
        processList.scrollLeft = scrollLeft - (x - startX) * 1.5;
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const track = document.getElementById('engServicesTrack');
    const tabs = document.querySelectorAll('.eng-services__tab');
    const prevBtns = document.querySelectorAll('.eng-services__nav-btn--prev');
    const nextBtns = document.querySelectorAll('.eng-services__nav-btn--next');
    const counter = document.getElementById('engServicesCounter');
    const infos = document.querySelectorAll('.eng-services__info');
    let currentIndex = 0;
    const totalSlides = tabs.length;
    let touchStartX = 0;
    let touchEndX = 0;
    let isAnimating = false;
    
    if(!track) return;

    const updateSlider = (index) => {
        if (isAnimating) return;
        isAnimating = true;
        if (index < 0) index = totalSlides - 1;
        if (index >= totalSlides) index = 0;
        currentIndex = index;
        track.style.transform = `translateX(-${currentIndex * 100}%)`;
        tabs.forEach(tab => tab.classList.remove('eng-services__tab--active'));
        tabs[currentIndex].classList.add('eng-services__tab--active');
        infos.forEach(info => info.classList.remove('eng-services__info--active'));
        infos[currentIndex].classList.add('eng-services__info--active');
        counter.classList.add('eng-services__nav-counter--fade');
        setTimeout(() => {
            counter.textContent = `${currentIndex + 1}/${totalSlides}`;
            counter.classList.remove('eng-services__nav-counter--fade');
            isAnimating = false;
        }, 300);
    };
    tabs.forEach((tab, index) => {
        tab.addEventListener('click', () => updateSlider(index));
    });
    prevBtns.forEach(btn => {
        btn.addEventListener('click', () => updateSlider(currentIndex - 1));
    });
    nextBtns.forEach(btn => {
        btn.addEventListener('click', () => updateSlider(currentIndex + 1));
    });
    track.addEventListener('touchstart', e => {
        touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });
    track.addEventListener('touchend', e => {
        touchEndX = e.changedTouches[0].screenX;
        if (touchEndX < touchStartX - 40) {
            updateSlider(currentIndex + 1);
        }
        if (touchEndX > touchStartX + 40) {
            updateSlider(currentIndex - 1);
        }
    }, { passive: true });
});

document.addEventListener('DOMContentLoaded', () => {
    const list = document.querySelector('.clients__list');
    if (!list) return;
    let isDown = false;
    let startX, scrollLeft;
    list.addEventListener('mousedown', e => {
        isDown = true;
        list.classList.add('is-dragging');
        startX = e.pageX - list.offsetLeft;
        scrollLeft = list.scrollLeft;
    });
    document.addEventListener('mouseup', () => {
        isDown = false;
        list.classList.remove('is-dragging');
    });
    list.addEventListener('mousemove', e => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - list.offsetLeft;
        list.scrollLeft = scrollLeft - (x - startX) * 1.5;
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const sliders = document.querySelectorAll('.cases__slider-outer');
    
    sliders.forEach(slider => {
        const track = slider.querySelector('.cases__track');
        const prevBtn = slider.querySelector('.cases__nav-btn--prev');
        const nextBtn = slider.querySelector('.cases__nav-btn--next');
        const container = slider.closest('.container');
        const dotsContainer = container ? container.querySelector('.cases__dots') : null;
        
        if (!track) return;
        
        const slides = track.querySelectorAll('.cases__slide');
        if (!slides.length) return;

        let current = 0;
        let dots = [];
        const total = slides.length;

const getVisibleCount = () => {
    if (slider.closest('.cases--letters')) {
        return window.innerWidth > 768 ? 4 : 1;
    }

    return window.innerWidth > 768 ? 2 : 1;
};
        const getSlideWidth = () => slides[0].offsetWidth;

        const updateNav = () => {
            const needsNav = total > getVisibleCount();
            if (prevBtn) prevBtn.classList.toggle('cases__nav-btn--hidden', !needsNav);
            if (nextBtn) nextBtn.classList.toggle('cases__nav-btn--hidden', !needsNav);
        };

        const renderDots = () => {
            if (!dotsContainer) return;
            dotsContainer.innerHTML = '';
            dots = [];
            const dotsCount = total - getVisibleCount() + 1;

            if (dotsCount <= 1) return;

            for (let i = 0; i < dotsCount; i++) {
                const dot = document.createElement('button');
                dot.className = 'cases__dot';
                if (i === current) dot.classList.add('cases__dot--active');
                
                dot.addEventListener('click', () => go(i));
                dotsContainer.appendChild(dot);
                dots.push(dot);
            }
        };

        const go = (idx) => {
            const maxIndex = total - getVisibleCount();
            
            if (idx < 0) idx = 0;
            if (idx > maxIndex) idx = maxIndex;
            
            current = idx;
            const w = getSlideWidth() + 20;
            track.style.transform = `translateX(-${current * w}px)`;
            
            dots.forEach((d, i) => d.classList.toggle('cases__dot--active', i === current));
        };

        if (prevBtn) prevBtn.addEventListener('click', () => go(current - 1));
        if (nextBtn) nextBtn.addEventListener('click', () => go(current + 1));

        let tx = 0;
        track.addEventListener('touchstart', e => { 
            tx = e.changedTouches[0].screenX; 
        }, { passive: true });
        
        track.addEventListener('touchend', e => {
            const diff = e.changedTouches[0].screenX - tx;
            if (diff < -40) go(current + 1);
            if (diff > 40) go(current - 1);
        }, { passive: true });

        window.addEventListener('resize', () => {
            const maxIndex = total - getVisibleCount();
            if (current > maxIndex) current = maxIndex;
            renderDots();
            updateNav();
            go(current);
        });

        renderDots();
        updateNav();
    });
});

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.faq__question').forEach(btn => {
        btn.addEventListener('click', () => {
            const item = btn.closest('.faq__item');
            const isOpen = item.classList.contains('faq__item--open');
            document.querySelectorAll('.faq__item--open').forEach(el => el.classList.remove('faq__item--open'));
            if (!isOpen) item.classList.add('faq__item--open');
        });
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const burgerBtn = document.querySelector('.mobile-menu-btn');
    const navMenu = document.querySelector('.header-nav');
    const menuLinks = document.querySelectorAll('.header-menu-list a');
    
    if (burgerBtn && navMenu) {
        burgerBtn.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            document.body.classList.toggle('menu-opened');
            burgerBtn.classList.toggle('is-active');
            
            if (!document.body.classList.contains('menu-opened')) {
                setTimeout(() => {
                    document.querySelectorAll('.header-menu-list > .menu-item-has-children').forEach(item => {
                        item.classList.remove('is-active');
                    });
                }, 300);
            }
        });

        document.addEventListener('click', (e) => {
            if (document.body.classList.contains('menu-opened')) {
                if (!navMenu.contains(e.target) && !burgerBtn.contains(e.target)) {
                    document.body.classList.remove('menu-opened');
                    burgerBtn.classList.remove('is-active');
                    setTimeout(() => {
                        document.querySelectorAll('.header-menu-list > .menu-item-has-children').forEach(item => {
                            item.classList.remove('is-active');
                        });
                    }, 300);
                }
            }
        });

        menuLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                const parentItem = link.parentElement;
                
                if (window.innerWidth <= 1120 && parentItem.classList.contains('menu-item-has-children') && parentItem.parentElement.classList.contains('header-menu-list')) {
                    e.preventDefault();
                    parentItem.classList.toggle('is-active');
                } else {
                    document.body.classList.remove('menu-opened');
                    burgerBtn.classList.remove('is-active');
                }
            });
        });
    }
});

document.addEventListener('DOMContentLoaded', () => {
    const track = document.getElementById('appTrack');
    if (!track) return;
    const slides = track.querySelectorAll('.applications__slide');
    const prevBtn = document.getElementById('appPrev');
    const nextBtn = document.getElementById('appNext');
    if (!slides.length) return;
    let current = 0;
    const total = slides.length;
    const getVisible = () => {
        if (window.innerWidth <= 768) return 1;
        if (window.innerWidth <= 1120) return 2;
        return 3;
    };
    const go = (idx) => {
        if (window.innerWidth <= 1120) return;
        const max = total - getVisible();
        if (idx < 0) idx = 0;
        if (idx > max) idx = max;
        current = idx;
        const slideWidth = slides[0].offsetWidth;
        const gap = parseFloat(window.getComputedStyle(track).gap) || 0;
        track.style.transform = `translateX(-${current * (slideWidth + gap)}px)`;
    };
    if (prevBtn) prevBtn.addEventListener('click', () => go(current - 1));
    if (nextBtn) nextBtn.addEventListener('click', () => go(current + 1));
    let tx = 0;
    track.addEventListener('touchstart', e => { 
        if (window.innerWidth > 1120) {
            tx = e.changedTouches[0].screenX; 
        }
    }, { passive: true });
    track.addEventListener('touchend', e => {
        if (window.innerWidth > 1120) {
            const diff = e.changedTouches[0].screenX - tx;
            if (diff < -40) go(current + 1);
            if (diff > 40) go(current - 1);
        }
    }, { passive: true });
    window.addEventListener('resize', () => {
        if (window.innerWidth <= 1120) {
            track.style.transform = 'translateX(0)';
            current = 0;
        } else {
            go(current);
        }
    });
});


document.addEventListener('DOMContentLoaded', () => {

    const gallery = document.querySelector('.cases--letters');
    if (!gallery) return;

    const slides = [...gallery.querySelectorAll('.cases__slide')];

    const lightbox = document.querySelector('.cases-lightbox');
    const img = lightbox.querySelector('.cases-lightbox__img');
    const prev = lightbox.querySelector('.cases-lightbox__prev');
    const next = lightbox.querySelector('.cases-lightbox__next');
    const close = lightbox.querySelector('.cases-lightbox__close');

    let current = 0;

    function show(index){
        if(index < 0) index = slides.length - 1;
        if(index >= slides.length) index = 0;

        current = index;

        img.src = slides[current].dataset.imgSrc;
        img.alt = slides[current].querySelector('img').alt;

        lightbox.classList.add('is-open');
        document.body.style.overflow = 'hidden';
    }

    slides.forEach((slide,index)=>{
        slide.addEventListener('click',()=>show(index));
    });

    next.addEventListener('click',()=>show(current+1));
    prev.addEventListener('click',()=>show(current-1));

    close.addEventListener('click',closeBox);

    lightbox.addEventListener('click',e=>{
        if(e.target===lightbox) closeBox();
    });

    document.addEventListener('keydown',e=>{
        if(!lightbox.classList.contains('is-open')) return;

        if(e.key==='Escape') closeBox();
        if(e.key==='ArrowRight') show(current+1);
        if(e.key==='ArrowLeft') show(current-1);
    });

    function closeBox(){
        lightbox.classList.remove('is-open');
        document.body.style.overflow='';
    }

});


document.addEventListener('DOMContentLoaded', () => {
    const fileInput = document.getElementById('ctaFile');
    if (!fileInput) return;

    const fileLabel = fileInput.closest('.cta__file-label');
    const fileText = fileLabel.querySelector('span');
    const defaultText = fileText.textContent;

    fileInput.addEventListener('change', () => {
        if (fileInput.files.length > 0) {
            fileText.textContent = `${fileInput.files[0].name} - прикреплен`;
        } else {
            fileText.textContent = defaultText;
        }
    });
});