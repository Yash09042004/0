document.addEventListener('DOMContentLoaded',(event)=>{
    const clickButton = document.getElementById('click');
    const click = document.getElementById('clickmsg');

    clickButton.addEventListener('click',()=>{
        // clickmsg.textContent = 'Button Clicked'; 
        alert('Button Clicked');
    });

    const mouseover = document.getElementById('mouseover');
    const mouseovermsg = document.getElementById('mouseovermsg');

    mouseover.addEventListener('mouseover',()=>{
        mouseovermsg.textContent = 'Mouse Over Me';
    }
    );

    const mouseout = document.getElementById('mouse-out');
    const mouseoutmsg = document.getElementById('mouseoutmsg');

    mouseout.addEventListener('mouseout',()=>{
        mouseoutmsg.textContent = 'Mouse Out Me';
    }
    );

    const keypress = document.getElementById('keypress');
    const keypressmsg = document.getElementById('keypressmsg');

    keypress.addEventListener('keypress',(event)=>{
        keypressmsg.textContent = `You pressed : ${event.key}`;
    })
});