/*::* SCROLL TO TOP ON LOAD *::*/
jQuery(document).ready(function ($) {
    // Disable browser's automatic scroll restoration
    if ("scrollRestoration" in history) {
        history.scrollRestoration = "manual";
    }

    // Force scroll to top
    $("html, body").scrollTop(0);

    // Backup scroll after a short delay
    setTimeout(function () {
        $("html, body").scrollTop(0);
    }, 100);
});

/*::* INDEX LANDING *::*/
jQuery(document).ready(function ($) {
    const $landing = $(".index-landing");
    const $header = $("#header");

    function handleLandingAnimation() {
        $(window).on("load", function () {
            $("html").addClass("no-scroll");

            $header.addClass("hide-elements");

            setTimeout(() => {
                $landing.addClass("letter-in");

                setTimeout(() => {
                    $landing.fadeOut(500, function () {
                        $(this).remove();
                        $("html").removeClass("no-scroll");
                        $header.removeClass("hide-elements");
                        $(".cky-consent-container").addClass("slideInFromRight");
                    });
                }, 3500);
            }, 500);
        });
    }

    if ($landing.length) {
        handleLandingAnimation();
    }
});

/*::* MARKERS *::*/
jQuery(document).ready(function ($) {
    // Function to initialize marker tracking
    function initMarkerTracking(options = {}) {
        const { sectionSelector, markerSelector, cardSelector, threshold, rootMargin } = options;

        if (!$(sectionSelector).length) return;

        const $markerItems = $(markerSelector);
        const cards = document.querySelectorAll(cardSelector);

        // Create Intersection Observer
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    const cardId = entry.target.id;
                    const $marker = $(`${markerSelector}[data-marker="${cardId}"]`);

                    if (entry.isIntersecting) {
                        $markerItems.removeClass("active");
                        $marker.addClass("active");
                    }
                });
            },
            {
                threshold,
                rootMargin,
            }
        );

        cards.forEach((card) => {
            observer.observe(card);
        });
    }

    initMarkerTracking({
        sectionSelector: '[data-section="index-award"]',
        markerSelector: ".content-marker-item",
        cardSelector: '[data-card="award"]',
        threshold: 0.5,
        rootMargin: "-20% 0px",
    });

    initMarkerTracking({
        sectionSelector: '[data-section="team"]',
        markerSelector: ".content-marker-item",
        cardSelector: '[data-section="team"] .card-container',
        threshold: 0.5,
        rootMargin: "-20% 0px",
    });
});

/*::* INDEX PRESS *::*/
jQuery(document).ready(function ($) {
    if (!$('[data-section="index-press"]').length) return;
    const indexPress = document.querySelector('[data-section="index-press"]');

    const contentText = document.querySelector('[data-section="index-press"] .content-text');
    const blockContent = contentText.querySelector(".block-content-start");

    onWindowResizeInstant(() => {
        const contentTextRect = contentText.getBoundingClientRect();
        const blockContentRect = blockContent.getBoundingClientRect();

        const relativeRight = contentTextRect.right - blockContentRect.right;
        const relativeBottom = contentTextRect.bottom - blockContentRect.bottom;

        indexPress.style.setProperty("--relative-right", `${relativeRight}px`);
        indexPress.style.setProperty("--relative-bottom", `${relativeBottom}px`);
    });
});

/*::* TEAM *::*/
jQuery(document).ready(function ($) {
    if (!$('[data-section="team"]').length) return;
    const team = document.querySelector('[data-section="team"]');
});

/*::* FILTER SELECTION *::*/
jQuery(document).ready(function ($) {
    if (!$(".filter-container").length) return;
    const $filterContainer = $(".filter-container");
    const $filterItem = $filterContainer.find(".filter-item");
    const $popupContent = $filterContainer.find(".popup-content");

    $filterItem.on("click", function () {
        $filterItem.removeClass("active");
        $(this).addClass("active");
        $popupContent.removeClass("active");
    });
});
