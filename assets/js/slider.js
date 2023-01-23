//carousel films

let currentItemFilm = 0;
const itemsFilm = document.querySelectorAll(".item-film");
const maxItemsFilm = itemsFilm.length;

function changeClassFilm () {
   itemsFilm.forEach((itemFilm) => itemFilm.classList.remove("current-item-film"));
   
    itemsFilm[currentItemFilm].scrollIntoView({
    behavior: "smooth",
    inline: "center",
    block: "nearest"
});

    itemsFilm[currentItemFilm].classList.add("current-item-film");
}

function decreaseFilm (){
if (currentItemFilm <=0){
  currentItemFilm = maxItemsFilm;
}
currentItemFilm --;   
console.log(currentItemFilm); 

changeClassFilm();

return;


}

function increaseFilm (){
  
  if (currentItemFilm >= maxItemsFilm){
  currentItemFilm = 0;
  }
 
  currentItemFilm ++;   
 
    changeClassFilm(); 
  
  console.log(currentItemFilm);
  
  }

  if(document.querySelector(".left-film")){
  clickLeft = document.querySelector(".left-film").addEventListener("click", (e) => {decreaseFilm();});
  clickRight = document.querySelector(".right-film").addEventListener("click", (e) => {increaseFilm();});
  }

  

//carousel series

let currentItemSeries = 0;
const itemsSeries = document.querySelectorAll(".item-series");
const maxItemsSeries = itemsSeries.length;

function changeClassSeries () {
   itemsSeries.forEach((itemSeries) => itemSeries.classList.remove("current-item-series"));
   
    itemsSeries[currentItemSeries].scrollIntoView({
    behavior: "smooth",
    inline: "center",
    block: "nearest"
});

    itemsSeries[currentItemSeries].classList.add("current-item-series");
}

function decreaseSeries (){
if (currentItemSeries <=0){
  currentItemSeries = maxItemsSeries;
}
currentItemSeries --;   
console.log(currentItemSeries); 

changeClassSeries();


}

function increaseSeries (){
  
  if (currentItemSeries >= maxItemsSeries){
  currentItemSeries = 0;
  }
 
  currentItemSeries ++;   
 
    changeClassSeries(); 
  
  console.log(currentItemSeries);
  
  }
  if(document.querySelector(".left-series")){
  clickLeft = document.querySelector(".left-series").addEventListener("click", (e) => {decreaseSeries();});
  clickRight = document.querySelector(".right-series").addEventListener("click", (e) => {increaseSeries();});
  }

 
  //carousel documentários

  let currentItemDocs = 0;
const itemsDocs = document.querySelectorAll(".item-docs");
const maxItemsDocs = itemsDocs.length;

function changeClassDocs () {
  itemsDocs.forEach((itemDocs) => itemDocs.classList.remove("current-item-docs"));
  
   itemsDocs[currentItemDocs].scrollIntoView({
   behavior: "smooth",
   inline: "center",
   block: "nearest"
});

   itemsDocs[currentItemDocs].classList.add("current-item-docs");
}


function decreaseDocs (){
if (currentItemDocs <=0){
  currentItemDocs = maxItemsDocs;
}
currentItemDocs --;   
console.log(currentItemDocs); 

changeClassDocs();


}

function increaseDocs (){
  
  if (currentItemDocs >= maxItemsDocs){
  currentItemDocs = 0;
  }
 
  currentItemDocs ++;   
 
    changeClassDocs(); 
  
  console.log(currentItemDocs);
  
  }
  if(document.querySelector(".left-docs")){
  clickLeft = document.querySelector(".left-docs").addEventListener("click", (e) => {decreaseDocs();});
  clickRight = document.querySelector(".right-docs").addEventListener("click", (e) => {increaseDocs();});
  }




  