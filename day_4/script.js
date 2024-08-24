// console.log('Hello');
let head2 = document.getElementById('head-2');// получаю элемент по ID
//console.log(head2);

//head2.textContent = 'Hello';

// при клике на заголовок
head2.addEventListener('click', function(){
    head2.textContent = 'Hello';
});


let elements = document.querySelectorAll('.element');
//console.log(elements);

elements.forEach(function(element, index){
    //console.log(element); 
    // if(index%2 !== 0){
    //     element.style.display = 'none';
    // }  
    
    element.addEventListener('click', function(){
        element.style.display = 'none';
    });
    
});
