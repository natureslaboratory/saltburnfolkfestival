(()=>{var e={782:()=>{!function(){"use strict";function e(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}var t=function(){function t(n){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,t),e(this,"node",void 0),e(this,"animationDelay",void 0),e(this,"timeout",void 0),this.node=n,this.node.dataset.animationDelay&&(this.animationDelay=this.node.dataset.animationDelay)}var n;return(n=[{key:"show",value:function(){var e=this;this.animationDelay?this.timeout=setTimeout((function(){e.node.classList.add("show")}),this.animationDelay):this.node.classList.add("show")}}])&&function(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}(t.prototype,n),t}();function n(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,i=new Array(t);n<t;n++)i[n]=e[n];return i}function i(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}for(var o=function(){function e(o){var a=this;!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),i(this,"node",void 0),i(this,"children",[]),i(this,"animationDelay",0),this.node=o;var r,s=this.node.getElementsByClassName("c-animated__child");if(s)for(var l=0;l<s.length;l++){var d=s[l];this.children=[].concat(function(e){if(Array.isArray(e))return n(e)}(r=this.children)||function(e){if("undefined"!=typeof Symbol&&null!=e[Symbol.iterator]||null!=e["@@iterator"])return Array.from(e)}(r)||function(e,t){if(e){if("string"==typeof e)return n(e,t);var i=Object.prototype.toString.call(e).slice(8,-1);return"Object"===i&&e.constructor&&(i=e.constructor.name),"Map"===i||"Set"===i?Array.from(e):"Arguments"===i||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(i)?n(e,t):void 0}}(r)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}(),[new t(d)])}this.node.dataset.animationDelay&&(this.animationDelay=this.node.dataset.animationDelay),this.hasChildren?(window.addEventListener("DOMContentLoaded",(function(){a.animateChildren()})),window.addEventListener("scroll",(function(){a.animateChildren()}))):(window.addEventListener("DOMContentLoaded",(function(){a.animate()})),window.addEventListener("scroll",(function(){a.animate()})))}var o;return(o=[{key:"hasChildren",get:function(){return this.children.length>0}},{key:"isShowing",get:function(){return!!this.node.classList.contains("show")}},{key:"animate",value:function(){var e=this;this.heightCheck(this.node)&&(this.animationDelay?setTimeout((function(){e.show()}),this.animationDelay):this.show())}},{key:"animateChildren",value:function(){this.heightCheck(this.node)&&this.children.forEach((function(e){e.show()}))}},{key:"show",value:function(){this.node.classList.add("show")}},{key:"hide",value:function(){this.node.classList.remove("show")}},{key:"heightCheck",value:function(){return window.scrollY+.8*document.documentElement.clientHeight>this.node.getBoundingClientRect().top+document.documentElement.scrollTop}}])&&function(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}(e.prototype,o),e}(),a=document.getElementsByClassName("c-animated"),r=0;r<a.length;r++)new o(a[r])}()}},t={};function n(i){var o=t[i];if(void 0!==o)return o.exports;var a=t[i]={exports:{}};return e[i](a,a.exports,n),a.exports}n.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return n.d(t,{a:t}),t},n.d=(e,t)=>{for(var i in t)n.o(t,i)&&!n.o(e,i)&&Object.defineProperty(e,i,{enumerable:!0,get:t[i]})},n.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{"use strict";function e(){var e=document.getElementById("header").getBoundingClientRect(),t=e.bottom-e.top;document.getElementsByTagName("body")[0].style.paddingTop="".concat(t,"px"),window.innerWidth<680?function(e){var t=document.getElementById("navigation");t.style.transition="0ms",t.classList.add("mobile"),t.style.top="".concat(e,"px"),t.style.height="".concat(window.innerHeight-e,"px")}(t):(i.classList.remove("mobile"),i.style.top="unset",i.style.height="unset")}n(782);var t=document.getElementById("hamburger_button"),i=document.getElementById("navigation");t.addEventListener("click",(function(){i.style.transition=null,i.classList.toggle("show")})),document.addEventListener("DOMContentLoaded",e),window.addEventListener("resize",e),console.log("loaded")})()})();