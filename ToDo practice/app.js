const addTodo  =  document.querySelector("#addTodo");
const todoTitle = document.querySelector("#todoTitle");
const tableRows = document.querySelector("table tbody");
const deleteBtn = document.querySelectorAll("button.btn-danger");
const editBtn = document.querySelector(".btn-success");


addTodo.addEventListener("click", function () {
    
    if (todoTitle.value == "" || todoTitle.value.length < 10) {
        
            alert("Invalid input")

    }else {
      //save todo first
      let todoListCount = Object.keys(localStorage).length+1; //0
      let title = todoTitle.value;
      localStorage.setItem(`title${todoListCount}`, title);

      // then refresh table
      let keysArray = Object.keys(localStorage);

      tableRows.innerHTML += `<tr>
                        <td>${todoListCount}</td>
                        <td>${title}</td>
                        <td><button id="delete" data-key="title${todoListCount}" class="btn btn-danger">DELETE</button> <button id="edit" class="btn btn-success">EDIT</button></td>
                    </tr>`;
    }
    
});

// // initial reload

    let keysArray = Object.keys(localStorage);

    let todoCount = 1;
    keysArray.forEach((keys) => {
      tableRows.innerHTML += `<tr>
                        <td>${todoCount}</td>
                        <td>${localStorage[keys]}</td>
                        <td><button data-key="title${todoCount}"  class="btn btn-danger">DELETE</button> <button class="btn btn-success" id="edit">EDIT</button></td>
                    </tr>`;

      todoCount++;
    });


// let deleteBtns = document.querySelectorAll("button.btn.btn-danger");

// deleteBtns.forEach((classes) => {
//     classes.addEventListener('click', function () {

//       document.querySelector("table tbody").innerHTML = "";
       
        
//         let targetedKey = this.getAttribute("data-key");

//         localStorage.removeItem(targetedKey);
//           let keysArray = Object.keys(localStorage);

//           let todoCount = 0;
//           keysArray.forEach((keys) => {
//             tableRows.innerHTML += `<tr>
//                         <td>${todoCount}</td>
//                         <td>${localStorage[keys]}</td>
//                         <td><button data-key="title${todoCount}"  class="btn btn-danger">DELETE</button> <button class="btn btn-success" id="edit">EDIT</button></td>
//                     </tr>`;
// console.log('clicked')
//             todoCount++;
//           });



//   })
// });


