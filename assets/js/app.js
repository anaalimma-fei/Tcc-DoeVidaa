document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.querySelector('.menu-toggle');
    const nav = document.querySelector('.nav-links');
    if (toggle && nav) {
        toggle.addEventListener('click', () => {
            const active = nav.classList.toggle('active');
            toggle.setAttribute('aria-expanded', active);
        });
    }

    document.querySelectorAll('.faq button').forEach(btn => {
        btn.addEventListener('click', () => {
            const item = btn.closest('.faq');
            item.classList.toggle('open');
            btn.setAttribute('aria-expanded', item.classList.contains('open'));
        });
    });

    const search = document.querySelector('[data-search]');
    if (search) {
        search.addEventListener('input', () => {
            const term = search.value.toLowerCase();
            document.querySelectorAll('[data-search-item]').forEach(item => {
                item.hidden = !item.textContent.toLowerCase().includes(term);
            });
        });
    }
});
