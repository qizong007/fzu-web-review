let button = document.getElementById('add');
let list = document.getElementById('todo');
let text = document.getElementById('item');

button.addEventListener('click', () => {
    // 获取文本框输入内容
    let content = text.value;
    let newItem = document.createElement('li');
    newItem.innerHTML = content;
    list.appendChild(newItem);
}); 