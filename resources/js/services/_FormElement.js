export default function inputElement() {

    const inputText = (event, alt, contain) => {
        const element = document.querySelector('#' + event.srcElement.id);
        const elementChild = document.querySelector('.lab-' + event.srcElement.id);
            elementChild.style.top = 0;
            elementChild.style.fontSize = '0.9rem';
            elementChild.style.color = 'rgb(59 130 246)';
            elementChild.style.transition = 'all 0.3s ease-out';
            elementChild.textContent = alt
        
        element.addEventListener('focus', () => {
            const elementChild = document.querySelector('.lab-' + event.srcElement.id);
            elementChild.style.top = 0;
            elementChild.style.fontSize = '0.9rem';
            elementChild.style.color = 'rgb(59 130 246)';
            elementChild.style.transition = 'all 0.3s ease-out';
            elementChild.textContent = alt
        })

        element.addEventListener('blur', () => {
            const elementChild = document.querySelector('.lab-' + event.srcElement.id);
            elementChild.style.top = '1.6rem';
            elementChild.style.fontSize = '1rem';
            elementChild.style.color = 'white';
            elementChild.style.transition = 'all 0.3s ease-in';
            if (contain != null) {
                elementChild.textContent = contain
            }
        })
    }

    return {
        inputText
    }

}