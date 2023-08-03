const d1 = document.getElementById('d1');
const d2 = document.getElementById('d2');

const btn1 = document.createElement('button');
btn1.innerText = 'Button 1';

btn1.addEventListener('click', () => {
    d1.innerText = 'Button 1 Clicked';
    alert('Button 1 Clicked');
});

btn1.style.backgroundColor = '#e0a0fe';
// d1.appendChild(btn1);

let cnt = 0;
for (let i = 0; i < 10; i++) {
    const btn = document.createElement('button');
    btn.innerText = i;
    btn.addEventListener('click', () => {
        cnt +=  i;
        document.getElementById('cnt').innerText = cnt;
    });
    btn.style.backgroundColor = '#e0a0fe';
    document.body.appendChild(btn);
}

document.write('<h2>This String Written By JavaScript</h2>');
