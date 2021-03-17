document.getElementById('telephone').addEventListener('input', ({ target }) => {
    const { value } = target, { length } = value;

    target.value = !/^[0-9]+$/g.test(value) ? value.slice(0, length-1) : 
        length > 10 ? value.substr(0, 10) :
        value;
});