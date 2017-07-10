window.addEventListener('load', init);


var ul;

function init()
{

    ul = document.getElementById('todo');
    ul.addEventListener('click', liClickHandler);


    var form = document.getElementById("new-todo-form");
    form.addEventListener("submit", formSubmitHandler);
}


function formSubmitHandler(e)
{
    e.preventDefault();

    var newItem = document.getElementById('todo-input').value;

    // Create a new list item
    var li = document.createElement('li');
    li.innerHTML = newItem;
    li.addEventListener('click', liClickHandler);

    // Empty the current form item so we can add another & show
    document.getElementById('todo-input').value = "";

    ul.appendChild(li);
}


function liClickHandler(e)
{
    var target = e.target;
    console.log(e.target); // which li is clicked

    if (target.nodeName == "LI"){
        target.classList.add("red");
    }

}

