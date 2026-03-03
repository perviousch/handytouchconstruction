(() => {
  const supportsViewTransition = typeof document.startViewTransition === "function";

  // Mobile nav
  const toggle = document.querySelector(".nav-toggle");
  const nav = document.querySelector("[data-nav]");
  if (toggle && nav) {
    toggle.addEventListener("click", () => {
      const open = nav.classList.toggle("is-open");
      toggle.setAttribute("aria-expanded", open ? "true" : "false");
    });

    document.addEventListener("click", (event) => {
      if (!nav.classList.contains("is-open")) return;
      const target = event.target;
      if (!(target instanceof Element)) return;
      if (!nav.contains(target) && !toggle.contains(target)) {
        nav.classList.remove("is-open");
        toggle.setAttribute("aria-expanded", "false");
      }
    });

    nav.querySelectorAll("a").forEach((link) => {
      link.addEventListener("click", () => {
        nav.classList.remove("is-open");
        toggle.setAttribute("aria-expanded", "false");
      });
    });
  }

  // Scroll progress
  const bar = document.querySelector("[data-progress]");
  const header = document.querySelector(".site-header");
  const onScroll = () => {
    const h = document.documentElement;
    const scrolled = (h.scrollTop / (h.scrollHeight - h.clientHeight)) * 100;
    if (bar) bar.style.width = `${Math.max(0, Math.min(100, scrolled))}%`;
    if (header) header.classList.toggle("is-scrolled", h.scrollTop > 10);
  };
  window.addEventListener("scroll", onScroll, { passive: true });
  onScroll();

  // Reveal on viewport entry (IntersectionObserver)
  const els = document.querySelectorAll(".reveal");
  if ("IntersectionObserver" in window) {
    const io = new IntersectionObserver(
      (entries) => {
        entries.forEach((e) => {
          if (e.isIntersecting) {
            const delay = e.target.getAttribute("data-delay");
            if (delay) e.target.style.transitionDelay = `${delay}ms`;
            e.target.classList.add("in");
            io.unobserve(e.target);
          }
        });
      },
      { threshold: 0.14 }
    );
    els.forEach((el) => io.observe(el));
  } else {
    els.forEach((el) => el.classList.add("in"));
  }

  // Highlight key headings when they enter viewport
  const headingHighlights = document.querySelectorAll(".hero h1, .page-hero h1, .section-head h2, .cta h2");
  if ("IntersectionObserver" in window) {
    const highlightObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("is-highlighted");
            highlightObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.45 }
    );
    headingHighlights.forEach((el) => highlightObserver.observe(el));
  } else {
    headingHighlights.forEach((el) => el.classList.add("is-highlighted"));
  }

  // Portfolio filter
  const filterBtns = document.querySelectorAll("[data-filter]");
  const tiles = document.querySelectorAll(".tile");
  if (filterBtns.length && tiles.length) {
    const galleryControls = document.querySelector(".gallery-controls");
    const masonry = document.querySelector(".masonry");
    let autoIndex = 0;
    let autoTimer = null;
    let paused = false;

    const applyFilter = (btn) => {
      filterBtns.forEach((b) => b.classList.remove("is-active"));
      btn.classList.add("is-active");

      const filter = btn.getAttribute("data-filter");
      tiles.forEach((t) => {
        const tag = t.getAttribute("data-tag");
        const show = filter === "all" || tag === filter;
        t.style.display = show ? "" : "none";
      });
    };

    filterBtns.forEach((btn) => {
      btn.addEventListener("click", () => {
        autoIndex = Array.from(filterBtns).indexOf(btn);
        applyFilter(btn);
      });
    });

    const startAutoSlide = () => {
      if (autoTimer || filterBtns.length < 2) return;
      autoTimer = window.setInterval(() => {
        if (paused) return;
        autoIndex = (autoIndex + 1) % filterBtns.length;
        applyFilter(filterBtns[autoIndex]);
      }, 3800);
    };

    const pauseAutoSlide = () => {
      paused = true;
    };

    const resumeAutoSlide = () => {
      paused = false;
    };

    [galleryControls, masonry].forEach((el) => {
      if (!el) return;
      el.addEventListener("mouseenter", pauseAutoSlide);
      el.addEventListener("mouseleave", resumeAutoSlide);
      el.addEventListener("focusin", pauseAutoSlide);
      el.addEventListener("focusout", resumeAutoSlide);
    });

    document.addEventListener("visibilitychange", () => {
      paused = document.hidden;
    });

    startAutoSlide();
  }

  // Viewport page transition for same-origin links
  if (supportsViewTransition) {
    document.addEventListener("click", (event) => {
      if (event.defaultPrevented) return;
      if (event.button !== 0) return;
      if (event.metaKey || event.ctrlKey || event.shiftKey || event.altKey) return;

      const target = event.target;
      if (!(target instanceof Element)) return;

      const anchor = target.closest("a");
      if (!(anchor instanceof HTMLAnchorElement)) return;
      if (!anchor.href) return;
      if (anchor.target && anchor.target !== "_self") return;
      if (anchor.hasAttribute("download")) return;

      const to = new URL(anchor.href, window.location.href);
      if (to.origin !== window.location.origin) return;
      if (to.pathname === window.location.pathname && to.hash) return;

      event.preventDefault();
      document.startViewTransition(() => {
        window.location.assign(to.href);
      });
    });
  }
})();
