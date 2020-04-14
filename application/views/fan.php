<style>
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font: inherit;
  font-size: 100%;
  vertical-align: baseline;
}

html {
  line-height: 1;
}

ol, ul {
  list-style: none;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

caption, th, td {
  text-align: left;
  font-weight: normal;
  vertical-align: middle;
}

q, blockquote {
  quotes: none;
}
q:before, q:after, blockquote:before, blockquote:after {
  content: "";
  content: none;
}

a img {
  border: none;
}

article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
  display: block;
}

html,
body,
main {
  height: 100vh;
  width: 100vw;
  overflow: hidden;
  box-sizing: border-box;
}

body {
  background-color: #222b30;
  color: #f0f0f0;
}

.flexy__center {
  display: flex;
  align-items: center;
  justify-content: center;
}

.plane-background {
  position: absolute;
  left: 0;
  top: 0;
  z-index: 0;
}

.fan {
  width: 20em;
  height: 20em;
  -webkit-transform: rotateY(40deg) rotateX(20deg);
          transform: rotateY(40deg) rotateX(20deg);
  -webkit-perspective: 500px;
          perspective: 500px;
  -webkit-perspective-origin: 50% 50%;
          perspective-origin: 50% 50%;
  -webkit-transform-origin: 50% 50%;
          transform-origin: 50% 50%;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  z-index: 2;
  margin-top: -7.40741em;
  -webkit-animation: lookAround 12s ease-in-out infinite;
          animation: lookAround 12s ease-in-out infinite;
  -webkit-animation-play-state: paused;
          animation-play-state: paused;
}
.fan__container {
  display: flex;
  justify-content: center;
  align-items: center;
}
.fan__blade {
  pointer-events: none;
  position: absolute;
  left: 50%;
  top: 50%;
  width: 7.14286em;
  height: 4em;
  border-radius: 50% 0.4em 100% 4em;
  background-color: #eceae1;
  -webkit-transform: translate(28%, -50%) rotateZ(0) rotateX(25deg);
          transform: translate(28%, -50%) rotateZ(0) rotateX(25deg);
  -webkit-transform-origin: -28% 50%;
          transform-origin: -28% 50%;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  background-image: linear-gradient(#d8d4c2 15%, #d8d4c2 40%, transparent 60%);
}
.fan__blade:nth-child(1) {
  -webkit-transform: translate(28%, -50%) rotateZ(60deg) rotateX(25deg);
          transform: translate(28%, -50%) rotateZ(60deg) rotateX(25deg);
}
.fan__blade:nth-child(2) {
  -webkit-transform: translate(28%, -50%) rotateZ(120deg) rotateX(25deg);
          transform: translate(28%, -50%) rotateZ(120deg) rotateX(25deg);
}
.fan__blade:nth-child(3) {
  -webkit-transform: translate(28%, -50%) rotateZ(180deg) rotateX(25deg);
          transform: translate(28%, -50%) rotateZ(180deg) rotateX(25deg);
}
.fan__blade:nth-child(4) {
  -webkit-transform: translate(28%, -50%) rotateZ(240deg) rotateX(25deg);
          transform: translate(28%, -50%) rotateZ(240deg) rotateX(25deg);
}
.fan__blade:nth-child(5) {
  -webkit-transform: translate(28%, -50%) rotateZ(300deg) rotateX(25deg);
          transform: translate(28%, -50%) rotateZ(300deg) rotateX(25deg);
}
.fan__blade:before {
  content: '';
  box-sizing: border-box;
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  width: 100%;
  height: 100%;
  border-radius: 50% 0.4em 100% 4em;
  border: 0.5em solid transparent;
  border-top-width: 0;
  border-bottom-width: 0;
  border-right-color: #cc0000;
  border-left-width: 2em;
}
.fan__hub {
  width: 4.16667em;
  height: 4.16667em;
  border-radius: 50%;
  background-color: #cc0000;
  position: relative;
  z-index: 1;
  -webkit-perspective: 500px;
          perspective: 500px;
  -webkit-perspective-origin: 50% 50%;
          perspective-origin: 50% 50%;
  -webkit-transform: rotateZ(0);
          transform: rotateZ(0);
  -webkit-transform-origin: 50% 50%;
          transform-origin: 50% 50%;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  box-shadow: 0 0 3em 1em rgba(34, 43, 48, 0.25);
  -webkit-animation: hubRotation 1s linear infinite;
          animation: hubRotation 1s linear infinite;
  -webkit-animation-play-state: paused;
          animation-play-state: paused;
}
.fan__hub:after {
  content: '';
  width: 4.16667em;
  height: 4.16667em;
  border-radius: 50%;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  position: absolute;
  left: 0;
  top: 0;
  z-index: 2;
  -webkit-transform: translateZ(0.35em) rotateZ(0) scale(0.9);
          transform: translateZ(0.35em) rotateZ(0) scale(0.9);
  background-color: #eceae1;
  background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4OTcuMTQyODgiIGhlaWdodD0iODk3LjE0Mjg4Ij4KICAgIDxwYXRoIGZpbGw9Im5vbmUiIHN0cm9rZT0iI2NjMDAwMCIgc3Ryb2tlLXdpZHRoPSI1MCIgc3Ryb2tlLW1pdGVybGltaXQ9IjQiIGQ9Im04ODYuMzY2ODIxLDQ0NC41NDkxNjRhNDM4LjI5NTUzMiw0MzQuNzczMDcxIDAgMSAxIC04NzYuNTkxMDMsMGE0MzguMjk1NTMyLDQzNC43NzMwNzEgMCAxIDEgODc2LjU5MTAzLDB6IiBpZD0icGF0aDIxNjQiIC8+CiAgICA8cGF0aCBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZT0iI2NjMDAwMCIgc3Ryb2tlLXdpZHRoPSI1MCIgc3Ryb2tlLW1pdGVybGltaXQ9IjQiIGQ9Im00MzUuNDQ1NDM1LDQyOS4xNDE4NDZjLTIxLjI1MTQ2NSwwLjc1ODM5MiAtMTEuNTAxNjc4LC0yOC40MjEwODIgLTEuMjUzOTk4LC0zNS41MDQ3NjFjMjcuNzcwNzIxLC0xOS4xOTYwNzUgNjIuMjE0MTExLDUuNzg2MzE2IDcxLjg5NjYzNywzMi45ODM2NzNjMTcuMzE5NjQxLDQ4LjY0OTY1OCAtMjAuNTU0OTMyLDk3LjQxMjY4OSAtNjYuODgwNjQ2LDEwOS4wMzUxMjZjLTY3Ljk4NDY1LDE3LjA1NjMzNSAtMTMyLjIxNTkxMiwtMzUuNTg3MTU4IC0xNDUuMDQ3MjExLC0xMDEuNDcyMDE1Yy0xNy4xMDE5OSwtODcuODE0MDU2IDUwLjI0OTc4NiwtMTY4LjYyODY2MiAxMzUuMDE1MTk4LC0xODIuNTY1NDQ1YzEwNi42Njg0NTcsLTE3LjUzNzk3OSAyMDMuNDE2MTk5LDY1LjQyODQ4MiAyMTguMTk3ODc2LDE2OS45NjAxOWMxNy45MDI0NjYsMTI2LjYwMjExMiAtNzkuOTI2OTQxLDI0MC4zODI5OTYgLTIwMy4xNDk3OCwyNTYuMDk2MDA4Yy0xNDUuMjEzODM3LDE4LjUxNzIxMiAtMjc0LjkwODAzNSwtOTUuMjUyNTAyIC0yOTEuMzQ4NDk1LC0yMzguNDQ4NjA4Yy0xOC45ODEwNzksLTE2NS4zMjU1IDEwOS41OTI0MjIsLTMxMi4zMTU3ODggMjcxLjI4NDMxNywtMzI5LjYyNjM4OWMxODMuNzI0NjQsLTE5LjY2OTM1IDM0Ni41MTY2OTMsMTI1LjA2ODkyNCAzNjQuNDk5MTE1LDMwNi45MzY5NjZjMjAuMTczNTg0LDIwNC4wMjg0NzMgLTEzOS4yNTI1MDIsMzg0LjMyOTk4NyAtMzM5LjQxODgyMyw0MDMuMTU2NzY5Yy0yMjIuMjIyNTY1LDIwLjkwMTMwNiAtNDE4LjE4Mzc2NCwtMTU0Ljg4MTQ3IC00MzcuNjQ5NzI0LC0zNzUuNDI1MjkzYy0wLjY2MDA3MSwtNy40Nzg0NTUgLTEuMTIzMjk4LC0xNC45NzQzNjUgLTEuMzg5NTc1LC0yMi40Nzc0NzgiIGlkPSJwYXRoMjE2OCIgLz4KPC9zdmc+Cg==);
  background-size: cover;
}
.fan__shield, .fan__shield:after, .fan__shield:before, .fan__shield__wires, .fan__shield__wires:after, .fan__shield__wires:before {
  width: 20em;
  height: 20em;
  z-index: 1;
  position: absolute;
  border-radius: 50%;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  box-sizing: border-box;
  -webkit-backface-visibility: visible;
          backface-visibility: visible;
}
.fan__shield {
  left: 0;
  top: 0;
  -webkit-transform: translateZ(0em);
          transform: translateZ(0em);
  border: 3px solid #f0f0f0;
}
.fan__shield:after {
  -webkit-transform: translateZ(-2.22222em) scale(0.5);
          transform: translateZ(-2.22222em) scale(0.5);
}
.fan__shield:before {
  -webkit-transform: translateZ(2.22222em) scale(0.5);
          transform: translateZ(2.22222em) scale(0.5);
}
.fan__shield:after, .fan__shield:before {
  content: '';
  border: 5px solid #f0f0f0;
}
.fan__shield__wires, .fan__shield__wires:after, .fan__shield__wires:before {
  height: 100%;
  width: 4.44444em;
}
.fan__shield__wires {
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%) rotateY(90deg);
          transform: translate(-50%, -50%) rotateY(90deg);
}
.fan__shield__wires:after, .fan__shield__wires:before {
  content: '';
  border: 2px solid #f0f0f0;
  border-radius: 20em;
  border-left-width: .00em;
  border-right-width: .00em;
  border-left-color: transparent;
  border-right-color: transparent;
  background-image: linear-gradient(90deg, #eceae1 2%, transparent 2%, transparent 98%, #eceae1 98%), linear-gradient(90deg, #eceae1 2%, transparent 2%, transparent 98%, #eceae1 98%);
  background-size: 100% 28%, 100% 27%;
  background-repeat: no-repeat;
  background-position: left top, left bottom;
}
.fan__shield__wires:after {
  -webkit-transform: translateZ(2.22222em);
          transform: translateZ(2.22222em);
}
.fan__shield__wires:before {
  -webkit-transform: translateZ(-2.22222em);
          transform: translateZ(-2.22222em);
}
.fan__shield__wires:nth-child(2) {
  -webkit-transform: translate(-50%, -50%) rotateY(90deg) rotateX(90deg);
          transform: translate(-50%, -50%) rotateY(90deg) rotateX(90deg);
}
.fan__base {
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  z-index: 1;
  margin-top: -4.44444em;
}
.fan__base__arm {
  top: 50%;
  left: 50%;
  position: absolute;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  -webkit-transform: translate(-50%, 0%);
          transform: translate(-50%, 0%);
  border-radius: 20em;
  width: 2em;
  height: 10em;
  border: 2px solid #eceae1;
  border-bottom-color: transparent;
  z-index: 2;
}
.fan__base__foot {
  width: 8em;
  height: 8em;
  position: absolute;
  top: 11.76471em;
  border-radius: 80% 50% 100% 50%;
  -webkit-transform: translate(-50%, -30%) rotate(45deg);
          transform: translate(-50%, -30%) rotate(45deg);
  background-color: #cc0000;
  box-shadow: inset -1em -1em 4em 0 rgba(0, 0, 0, 0.65), 0.5em 0.5em 2em 0 rgba(0, 0, 0, 0.25), inset -0.25em -0.25em 0 0 #eceae1, 0.45em 0.45em 1em -0.5em rgba(0, 0, 0, 0.5);
  z-index: 3;
}
.fan__actions {
  top: 50%;
  left: 50%;
  height: 2em;
  display: flex;
  position: absolute;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  z-index: 4;
  -webkit-transform-origin: 50% 100%;
          transform-origin: 50% 100%;
  -webkit-transform: translate(-50%, 350%) rotateX(20deg);
          transform: translate(-50%, 350%) rotateX(20deg);
  -webkit-perspective: 178.57143px;
          perspective: 178.57143px;
  -webkit-perspective-origin: 50% 100%;
          perspective-origin: 50% 100%;
  -webkit-backface-visibility: visible;
          backface-visibility: visible;
  box-shadow: 0 -0.25em 0.5em -1px #b30000;
}
.fan__actions__button {
  display: inline-block;
  width: 1.19048em;
  height: 2.5em;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  -webkit-transform: rotateX(40deg);
          transform: rotateX(40deg);
  -webkit-transform-origin: 50% 0%;
          transform-origin: 50% 0%;
  background-image: linear-gradient(#eceae1, #c4bea3);
  box-shadow: 0 0 1px 0 #c4bea3;
}
.fan__actions__button:before {
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
  top: 2px;
  background-color: black;
  -webkit-transform-origin: 50% 0;
          transform-origin: 50% 0;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  -webkit-transform: rotateX(-30deg);
          transform: rotateX(-30deg);
  opacity: .25;
}
.fan__actions__button:nth-child(2) {
  margin: 0 1px;
}
.fan__input {
  display: none;
}
.fan__input#fan-power:checked ~ .fan .fan__hub {
  -webkit-animation-play-state: running;
          animation-play-state: running;
}
.fan__input#fan-power:checked ~ .fan__actions .fan__actions__button:nth-child(1) {
  -webkit-transform: rotateX(30deg);
          transform: rotateX(30deg);
  background-image: linear-gradient(#eceae1, #b1a883);
}
.fan__input#fan-power:checked ~ .fan__actions .fan__actions__button:nth-child(1):before {
  -webkit-transform: rotateX(-10deg);
          transform: rotateX(-10deg);
}
.fan__input#fan-rotate:checked ~ .fan {
  -webkit-animation-play-state: running;
          animation-play-state: running;
}
.fan__input#fan-rotate:checked ~ .fan__actions .fan__actions__button:nth-child(2) {
  -webkit-transform: rotateX(30deg);
          transform: rotateX(30deg);
  background-image: linear-gradient(#eceae1, #b1a883);
}
.fan__input#fan-rotate:checked ~ .fan__actions .fan__actions__button:nth-child(2):before {
  -webkit-transform: rotateX(-10deg);
          transform: rotateX(-10deg);
}
.fan__input#fan-speed:checked ~ .fan .fan__hub {
  -webkit-animation-duration: .5s;
          animation-duration: .5s;
}
.fan__input#fan-speed:checked ~ .fan__actions .fan__actions__button:nth-child(3) {
  -webkit-transform: rotateX(30deg);
          transform: rotateX(30deg);
  background-image: linear-gradient(#eceae1, #b1a883);
}
.fan__input#fan-speed:checked ~ .fan__actions .fan__actions__button:nth-child(3):before {
  -webkit-transform: rotateX(-10deg);
          transform: rotateX(-10deg);
}

@-webkit-keyframes hubRotation {
  100% {
    -webkit-transform: rotateZ(-360deg);
            transform: rotateZ(-360deg);
  }
}

@keyframes hubRotation {
  100% {
    -webkit-transform: rotateZ(-360deg);
            transform: rotateZ(-360deg);
  }
}
@-webkit-keyframes capRotation {
  100% {
    -webkit-transform: translateZ(0.35em) rotateZ(-360deg) scale(0.9);
            transform: translateZ(0.35em) rotateZ(-360deg) scale(0.9);
  }
}
@keyframes capRotation {
  100% {
    -webkit-transform: translateZ(0.35em) rotateZ(-360deg) scale(0.9);
            transform: translateZ(0.35em) rotateZ(-360deg) scale(0.9);
  }
}
@-webkit-keyframes lookAround {
  0%,
    100% {
    -webkit-transform: rotateY(40deg) rotateX(20deg);
            transform: rotateY(40deg) rotateX(20deg);
  }
  50% {
    -webkit-transform: rotateY(-40deg) rotateX(20deg);
            transform: rotateY(-40deg) rotateX(20deg);
  }
}
@keyframes lookAround {
  0%,
    100% {
    -webkit-transform: rotateY(40deg) rotateX(20deg);
            transform: rotateY(40deg) rotateX(20deg);
  }
  50% {
    -webkit-transform: rotateY(-40deg) rotateX(20deg);
            transform: rotateY(-40deg) rotateX(20deg);
  }
}
</style>
<main class="fan__container">
  <input class="fan__input" id="fan-rotate" type="checkbox"/>
  <input class="fan__input" id="fan-speed" type="checkbox"/>
  <input class="fan__input" id="fan-power" type="checkbox" checked="checked"/>
  <div class="fan flexy__center">
    <div class="fan__hub flexy__center">
      <div class="fan__blade"></div>
      <div class="fan__blade"></div>
      <div class="fan__blade"></div>
      <div class="fan__blade"></div>
      <div class="fan__blade"></div>
      <div class="fan__blade"></div>
    </div>
    <div class="fan__shield">
      <div class="fan__shield__wires"></div>
      <div class="fan__shield__wires"></div>
    </div>
  </div>
  <div class="fan__base">
    <div class="fan__base__arm"></div>
    <div class="fan__base__foot"></div>
  </div>
  <div class="fan__actions">
    <label class="fan__actions__button" for="fan-power"></label>
    <label class="fan__actions__button" for="fan-rotate"></label>
    <label class="fan__actions__button" for="fan-speed"></label>
  </div>
</main>
