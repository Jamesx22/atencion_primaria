const slidePage = document.querySelector(".slide-page");
const nextBtnFirst = document.querySelector(".firstNext");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
const nextBtnThird = document.querySelector(".next-2");
const prevBtnFourth = document.querySelector(".prev-3");
const nextBtnFourth = document.querySelector(".next-3");
const prevBtnFifth = document.querySelector(".prev-4");
const nextBtnFifth = document.querySelector(".next-4");
const prevBtnSixth = document.querySelector(".prev-5");
const submitBtn = document.querySelector(".submit");
const progressText = document.querySelectorAll(".step p");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");
let current = 1;

nextBtnFirst.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-25%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
});
nextBtnSec.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-50%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
});
nextBtnThird.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-75%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
});
nextBtnFourth.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-100%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
});
nextBtnFifth.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-125%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
});
submitBtn.addEventListener("click", function(){
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
  setTimeout(function(){
    alert("Your Form Successfully Signed up");
    location.reload();
  },800);
});

prevBtnSec.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-0%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});
prevBtnThird.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-25%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});
prevBtnFourth.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-50%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});
//added

document.getElementById('masc').addEventListener('change', function(){
  var selecmascota = this.value;
  var showdivmasc = document.getElementById('showmascotas')

  if (selecmascota==='si'){
    showdivmasc.style.display ='block';
  } else if (selecmascota ==='no'){
    showdivmasc.style.display = 'none';
  }
});
document.getElementById('internet').addEventListener('change', function(){
  var selecinternet = this.value;
  var showdivinter = document.getElementById('showinternet')

  if (selecinternet==='si'){
    showdivinter.style.display ='block';
  } else if (selecinternet ==='no'){
    showdivinter.style.display = 'none';
  }
});
document.getElementById('cable').addEventListener('change', function(){
  var seleccable = this.value;
  var showdivcable = document.getElementById('showcable')

  if (seleccable==='si'){
    showdivcable.style.display ='block';
  } else if (seleccable ==='no'){
    showdivcable.style.display = 'none';
  }
});
document.getElementById('divclap').addEventListener('change', function(){
  var selecclap = this.value;
  var showdivclap = document.getElementById('showclap')

  if (selecclap==='si'){
    showdivclap.style.display ='block';
  } else if (selecclap ==='no'){
    showdivclap.style.display = 'none';
  }
});
document.getElementById('bolsanutri').addEventListener('change', function(){
  var selecbolsanutri = this.value;
  var showdivbolsanutri = document.getElementById('showbolsanutri')

  if (selecbolsanutri==='si'){
    showdivbolsanutri.style.display ='block';
  } else if (selecbolsanutri ==='no'){
    showdivbolsanutri.style.display = 'none';
  }
});

VirtualSelect.init({
  ele: '#example-select',
  options: myOptions
});
