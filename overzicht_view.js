gsap.registerPlugin(ScrollTrigger, ScrollSmoother, SplitText);

const KLEUR = "#cb6526";
const vol = { left: 0, top: 0, width: "100%", height: "100%" };
const div = p => { const d = document.body.appendChild(document.createElement("div")); gsap.set(d, { position: "fixed", zIndex: 9999, ...p }); return d; };

if (document.querySelector("#smooth-wrapper")) ScrollSmoother.create({ smooth: 1 });

const start = () => {
  if (document.querySelector(".splitten"))
    gsap.from(SplitText.create(".splitten", { type: "chars" }).chars, { opacity: .1, scale: .8, stagger: { each: .03, from: "center" }, duration: .4 });
  gsap.from(".recept", { skewX: 30, x: -100, opacity: 0, duration: 1, ease: "power3.out" });
  gsap.from(".sub-recept", { skewX: 30, x: -100, opacity: 0, duration: 2, ease: "power3.out" });
  gsap.from(".card", { y: 100, opacity: 0, stagger: .1 });
};

// klik: oranje vlak fadet in en groeit vanaf de knop
document.querySelectorAll(".hoverknop").forEach(a => a.onclick = e => {
  e.preventDefault();
  const r = a.getBoundingClientRect();
  const c = div({ background: KLEUR, opacity: 0, left: r.left, top: r.top, width: r.width, height: r.height, borderRadius: "50%" });
  gsap.to(c, { opacity: 1, duration: .3 });
  gsap.to(c, {
    left: 0, top: 0, width: "100vw", height: "100vh", borderRadius: 0, duration: .8, ease: "power2.inOut",
    onComplete: () => { sessionStorage.cover = 1; location = a.href; }
  });
});

if (sessionStorage.cover) {            // nieuwe pagina: oranje vlak fadet weg
  sessionStorage.removeItem("cover");
  const c = div({ background: KLEUR, pointerEvents: "none", ...vol });
  document.documentElement.classList.remove("wacht");   // de CSS-versie uit de <head> wordt vervangen
  gsap.to(c, { opacity: 0, delay: .2, duration: .9, ease: "power2.inOut", onComplete: () => c.remove() });
  gsap.delayedCall(.4, start);
} else {                               // laad animatie
  const l = div({ background: "#fcf7f0", display: "flex", alignItems: "center", justifyContent: "center", ...vol });
  l.innerHTML = '<img src="./assets/food4thought.svg" width="150">';
  const puls = gsap.to(l.firstChild, { scale: 1.2, opacity: .5, duration: .5, repeat: -1, yoyo: true });
  addEventListener("load", () => gsap.delayedCall(.6, () => {
    puls.kill();
    gsap.to(l, { opacity: 0, onComplete: () => l.remove() });
    start();
  }));
}