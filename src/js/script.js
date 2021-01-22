function slide (anything)
{
    document.querySelector('.starbucks').src = './src/img/img' + anything + '.png';
    
    let color = '#017143';

    if (anything == 2)
        color = '#eb7495';

    if (anything == 3)
        color = '#d752b1';

    changeCircleColor(color)
}

function changeCircleColor (color)
{
    const circle = document.querySelector('.circle');
    circle.style.background = color;
}