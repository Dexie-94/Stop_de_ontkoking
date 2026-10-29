gsap.registerPlugin(ScrollSmoother) 

ScrollSmoother.create({
	smooth: 1,
	effects: true
});

gsap.registerPlugin(SplitText);
const split = SplitText.create(".whitebox", { type: "chars" });

gsap.from(split.chars, {
  opacity: 0.1, scale: 0.8, filter: "blur(4px)",
  stagger: { each: 0.06, from: "center" },
  duration: 0.4, ease: "power2.out"
});

gsap.from(".card", {
  y: 100,
  opacity: 0,
  stagger: { each: 0.1, from: "center", grid: "auto" },
});