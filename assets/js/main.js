"use strict";

let elems = document.querySelectorAll('.card-elem');
let columns = document.querySelectorAll('.elems-columns');
let current;



elems.forEach(function(elem){
    elem.addEventListener('dragstart',function(event){
        current = this;
        let idNumber = current.dataset.item;
        event.dataTransfer.setData('text',idNumber);
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
    });
});


