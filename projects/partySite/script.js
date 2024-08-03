let main1 = document.querySelector('.main1');
let main2 = document.querySelector('.main2');

let select1 = document.querySelector('#select1');
let select2 = document.querySelector('#select2');
document.addEventListener('DOMContentLoaded',()=>{
     main1.classList.remove('d-none');
})
select1.addEventListener('click',()=>{
     main1.classList.remove('d-none');
     main2.classList.add('d-none');
     select1.attributes.add('checked')
})
select2.addEventListener('click',()=>{
     main2.classList.remove('d-none');
     main1.classList.add('d-none');
     select2.attributes.add('checked')
})