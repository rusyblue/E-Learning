
    
    <style>
    
.container2 {
  display: inline-block;
  color: #EEE;
  padding: 1em;
  position: absolute;
  top: 20%;
  left: 0;
  text-align: right;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  width: 61.8%;
  white-space: nowrap;
}
@media screen and (max-width: 36rem) {
    .container2 {
        top: 20%;
  }
}

.buy, .try {
  vertical-align: middle;
}

.follow, .share {
  display: inline-block;
  cursor: default;
  padding: 0;
  margin: 0 .5em;
  position: relative;
  text-align: center;
}
.follow:hover .label, .share:hover .label {
  opacity: 0;
  -webkit-transition: opacity .5s .125s ease-out;
  transition: opacity .5s .125s ease-out;
}
.follow:hover .icon, .share:hover .icon {
  border-radius: 1em;
  margin: 0 0;
}

.icon, .label {
  background-color: #1f7a7a;
  line-height: 2rem;
}

.label {
  border-radius: 1rem;
  position: absolute;
  font-size: .618em;
  font-weight: 900;
  letter-spacing: .0816em;
  top: 0;
  left: 0;
  right: 0;
  opacity: 1;
  pointer-events: none;
  text-transform: uppercase;
  -webkit-transition: opacity .5s .75s ease-out;
  transition: opacity .5s .75s ease-out;
}

.icon {
  border-radius: 0;
  cursor: pointer;
  display: inline-block;
  height: 2em;
  margin: 0 -.5em;
  -webkit-transition: background-color .5s ease-out, border-radius .5s .25s ease-out, margin .5s .25s ease-out;
  transition: background-color .5s ease-out, border-radius .5s .25s ease-out, margin .5s .25s ease-out;
  width: 2em;
}
.icon.first {
  border-bottom-left-radius: 1em;
  border-top-left-radius: 1em;
  margin-left: 0;
}
.icon.last {
  border-bottom-right-radius: 1em;
  border-top-right-radius: 1em;
  margin-right: 0;
}
.icon:hover {
  background-color: #ebc247;
  color: #111;
}

button {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  border-radius: 50%;
  border: 0;
  background-color: #1f7a7a;
  color: #EEE;
  cursor: pointer;
  font-family: inherit;
  font-weight: 900;
  letter-spacing: .0816em;
  position: relative;
  text-transform: uppercase;
  -webkit-transition: background-color .25s ease-out, -webkit-transform .5s ease-out;
  transition: background-color .25s ease-out, -webkit-transform .5s ease-out;
  transition: background-color .25s ease-out, transform .5s ease-out;
  transition: background-color .25s ease-out, transform .5s ease-out, -webkit-transform .5s ease-out;
}
button:hover {
  background-color: #ebc247;
  color: #111;
}

.try {
  font-size: .618rem;
  height: 3rem;
  width: 3rem;
  margin: 0 .5rem;
}
.try:hover {
  -webkit-transform: scale(1.3333);
          transform: scale(1.3333);
}
.try:hover .text {
  display: inline-block;
  -webkit-transform: scale(0.75);
          transform: scale(0.75);
}
.try:hover ~ .buy {
  -webkit-transform: scale(0.75);
          transform: scale(0.75);
}
.try .text {
  -webkit-transition: -webkit-transform .5s ease-out;
  transition: -webkit-transform .5s ease-out;
  transition: transform .5s ease-out;
  transition: transform .5s ease-out, -webkit-transform .5s ease-out;
  -webkit-transform: scale(1);
          transform: scale(1);
}

.buy {
  width: 5rem;
  height: 5rem;
  background-color: #ebc247;
  color: #111;
}
.buy .price, .buy .text {
  -webkit-transition: opacity .25s ease-out;
  transition: opacity .25s ease-out;
}
.buy .price {
  font-size: 1.618em;
  opacity: 1;
}
.buy .text {
  display: block;
  font-size: .618em;
  font-weight: 900;
  letter-spacing: .0816em;
  position: absolute;
  opacity: 0;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  vertical-align: baseline;
}
.buy:hover .price {
  opacity: 0;
}
.buy:hover .text {
  opacity: 1;
}
    </style>