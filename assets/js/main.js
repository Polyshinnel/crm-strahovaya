"use strict";

//Реализация боковой прокрутки колонок
const slider = document.querySelector('.elems-wrapper');
let isDown = false;
let startX;
let scrollLeft;

slider.addEventListener('mousedown', e => {
  isDown = true;
  slider.classList.add('active');
  startX = e.pageX - slider.offsetLeft;
  scrollLeft = slider.scrollLeft;
});
slider.addEventListener('mouseleave', () => {
  isDown = false;
  slider.classList.remove('active');
});
slider.addEventListener('mouseup', () => {
  isDown = false;
  slider.classList.remove('active');
});
slider.addEventListener('mousemove', e => {
  console.log(isDown);
  if (!isDown){
    return e.preventDefault();
  }
  
  const x = e.pageX - slider.offsetLeft;
  const walk = (x - startX) * 1;
  slider.scrollLeft = scrollLeft - walk;
});

function clearSelection() {
    if (window.getSelection) {
        window.getSelection().removeAllRanges();
    } else {
        document.selection.empty();
    }
}

//Реализация drag'n'drop карточек
let elems = document.querySelectorAll('.card-elem');
let columns = document.querySelectorAll('.elems-columns__wrapper');
let current;




elems.forEach(function(elem){
    elem.addEventListener('dragstart',function(event){
        current = this;
        let idNumber = current.dataset.item;
        event.dataTransfer.setData('text',idNumber);
    });
    elem.addEventListener('dragstart',function(event){
        slider.classList.remove('active');
        isDown = false;
    });
});

columns.forEach(function(column){
    column.addEventListener('dragover',function(event){
        event.preventDefault();
        this.style.background = '#EAE9E9';
    });

    column.addEventListener('dragleave',function(event){
        event.preventDefault();
        this.style.background = '#D9D7D7';
    });
    
    
    column.addEventListener('drop',function(event){
        console.log(event.dataTransfer.getData('text'));
        this.style.background = '#D9D7D7';
        this.append(current);
        slider.classList.remove('active');
        isDown = false;
    });
});


