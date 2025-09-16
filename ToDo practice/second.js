const addList  =  document.querySelector(".addTodo");
const saveTodo  =  document.querySelector(".saveTodo");
const todoTitle = document.querySelector("#todoTitle");
const tableRows = document.querySelector("table tbody");

let todoListCount = Object.keys(localStorage).length+1; //1


addList.addEventListener('click', function(){

   if (todoTitle.value == "" || todoTitle.value.length < 1) {
        
      alert("must be type for add a list")

}else {

   let title = todoTitle.value;

   localStorage.setItem(`${todoListCount}`, title);
  
   tableRows.innerHTML += `<tr class="num${todoListCount}">
   <td>${todoListCount}</td>
   <td>${title}</td>
   <td><button id="delete" data-value"${todoListCount}" class="btn btn-danger">DELETE</button> <button id="edit" data-value"${todoListCount}" class="btn btn-success">EDIT</button></td>
</tr>`;

todoListCount++;
}

const deleteBtn = document.querySelectorAll(".btn-danger");
  

deleteBtn.forEach( (e) => {
   e.addEventListener('click', function(){
let data = e.getAttribute('data-value');

var table = document.querySelector(`.num${keysArray[data-1]}`);

table.style.display ="none";
localStorage.removeItem(`${keysArray[data-1]}`)
  
   })
   })
   
})

let keysArray = Object.keys(localStorage);
let valueArray = Object.values(localStorage);
let todoCount = 1;

keysArray.sort(function(a,b){return a-b});


keysArray.forEach((keys) => {

  tableRows.innerHTML += `<tr  class="num${keysArray[todoCount-1]}">
                    <td>${keysArray[todoCount-1]}</td>
                    <td>${localStorage[keys]}</td>
                    <td><button class="btn btn-danger"data-value="${todoCount}">DELETE</button> <button data-value="${todoCount}" class="btn btn-success" id="edit">EDIT</button></td>
                </tr>`;

  todoCount++;
});

const deleteBtn = document.querySelectorAll(".btn-danger");
  

deleteBtn.forEach( (e) => {
   e.addEventListener('click', function(){
let data = e.getAttribute('data-value');

var table = document.querySelector(`.num${keysArray[data-1]}`);

table.style.display ="none";
localStorage.removeItem(`${keysArray[data-1]}`)
  
   })
   })







// const editBtn = document.querySelectorAll("#edit");
   

//    editBtn.forEach( edit => {
//       edit.addEventListener('click',function(){ 
//      let editValue = edit.getAttribute('data-value');

// let keysArray = Object.keys(localStorage);
// let valueArray = Object.values(localStorage);
// var table = document.querySelector(`.num${editValue}`);
// table.classList.add("none");
// saveTodo.classList.add('block');
// addList.classList.add('none');

//    todoTitle.value = valueArray[editValue -1]
//       console.log(editValue)
//       document.querySelector('.saveTodo').addEventListener('click', function(){
//  table.classList.remove("none");
// saveTodo.classList.remove('block');
// addList.classList.remove('none');

//       })
//    })
// });
