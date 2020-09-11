<div class="coverdiv loader">
    <div class="inner_div">
        <div class="shadow"></div>
        <?xml version="1.0" encoding="utf-8"?>
        <!-- Generator: Adobe Illustrator 23.0.6, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
        <svg class="loaderimg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">

                <circle class="circle_big" cx="20" cy="20" r="20"/>
                <circle class="circle_small" cx="20" cy="20" r="17.1"/>
        </svg>
        <svg class="svgl1" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">


                <path class="lines l1" d="M21.9,28.2c-0.3,0.6-0.1,1.3,0.4,1.6c0.6,0.3,1.3,0.1,1.6-0.4l0,0L36.1,8.2c-0.5-0.7-1-1.3-1.6-1.9L21.9,28.2
                L21.9,28.2z"/>
        </svg>

        <svg class="svgl2" version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">


                <path class="lines l2" d="M18.1,11.8c0.3-0.6,0.1-1.3-0.4-1.6s-1.3-0.1-1.6,0.4l0,0L3.9,31.8c0.5,0.7,1,1.3,1.6,1.9L18.1,11.8L18.1,11.8z
            "/>
        </svg>
        <svg class="svgl3" version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">

                <path class="lines l3" d="M26.1,11.8c0.3-0.6,0.1-1.3-0.4-1.6c-0.6-0.3-1.3-0.1-1.6,0.4l0,0L13.9,28.2l0,0c-0.3,0.6-0.1,1.3,0.4,1.6
                c0.6,0.3,1.3,0.1,1.6-0.4l0,0L26.1,11.8L26.1,11.8z"/>
    </svg>
    </div>
</div>
<style>
.loaderimg {
  width: 100px;
  height: auto; }

.coverdiv {
  width: 100%;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center; }

.inner_div {
  position: relative; }

.shadow {
  position: absolute;
  left: 0;
  top: 0;
  background: transparent;
  z-index: 5;
  width: 100px;
  height: 100px;
  border-radius: 50%;
  animation: shadow-pulse 1s infinite linear;
  animation-delay: 1s; }

.circle_big {
  fill: transparent;
  stroke-width: 6px;
  stroke: #1EB6DB;
  r: 17;
  stroke-dasharray: 107;
  stroke-dashoffset: -107;
  animation-name: circle_big;
  animation-duration: 1s;
  animation-fill-mode: forwards; }

.circle_small {
  fill: #2E435E;
  animation-name: circle_small;
  animation-duration: 1s; }

.inner_div {
  animation-name: inner_div;
  animation-duration: 1s;
  animation-delay: 1s;
  animation-iteration-count: infinite;
  animation-timing-function: linear; }

.lines {
  fill: #fff; }

.svgl1, .svgl2, .svgl3 {
  position: absolute;
  left: 0;
  top: 0;
  width: 100px; }

.svgl1 {
  animation-name: svgl1;
  animation-duration: 1s; }

.svgl2 {
  animation-name: svgl2;
  animation-duration: 1s; }

.svgl3 {
  animation-name: svgl3;
  animation-duration: 1s; }

@keyframes inner_div {
  0% {
    transform: scale(1); }
  50% {
    transform: scale(1.1); }
  100% {
    transform: scale(1); }
 }
@keyframes shadow-pulse {
  0% {
    box-shadow: 0 0 0 0px rgba(0, 0, 0, 0); }
  50% {
    box-shadow: 0 0 0 50px rgba(0, 0, 0, 0.05); }
  100% {
    box-shadow: 0 0 0 100px rgba(0, 0, 0, 0); }
 }
@keyframes svgl1 {
  0% {
    top: -117px;
    left: 71.2564px; }
  50% {
    top: -117px;
    left: 71.2564px; }
  100% {
    top: 0;
    left: 0; }
 }
@keyframes svgl2 {
  0% {
    top: 117px;
    left: -71.2564px; }
  50% {
    top: 117px;
    left: -71.2564px; }
  100% {
    top: 0;
    left: 0; }
 }
@keyframes svgl3 {
  0% {
    transform: scale(0); }
  50% {
    transform: scale(0); }
  100% {
    transform: scale(1); }
 }
/* The animation code */
@keyframes circle_small {
  0% {
    r: 0; }
  50% {
    r: 17; }
  100% {
    r: 17; }
 }
@keyframes circle_big {
  0% {
    stroke-dashoffset: -107; }
  50% {
    stroke-dashoffset: -107; }
  100% {
    stroke-dashoffset: 0; }
 }
/*# sourceMappingURL=loader.css.map */
</style>