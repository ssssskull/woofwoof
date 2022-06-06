import "https://flackr.github.io/scroll-timeline/dist/scroll-timeline.js";
/*
Victor
*/
// Scroll progress bar on frontpage

const scrollTracker = document.querySelector(".scroll-tracker");

if (scrollTracker) {
  const scrollTrackingTimeline = new ScrollTimeline({
    source: document.scrollingElement,
    orientation: "block",
    scrollOffsets: [CSS.percent(0), CSS.percent(100)],
  });

  scrollTracker.animate(
    {
      transform: ["scaleX(0)", "scaleX(1)"],
    },
    {
      duration: 1,
      timeline: scrollTrackingTimeline,
    }
  );
}
