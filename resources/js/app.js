import './bootstrap';

document.querySelectorAll('.alert-remove').forEach((element) => {
    element.preventDefault();
    // console.log(element)
    element.addEventListener('click', () => {
        document.querySelectorAll('alert').forEach( (element) => {
            element.remove();
        });
    })
});
