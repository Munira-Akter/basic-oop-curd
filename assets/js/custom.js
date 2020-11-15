$('a#delete').click(function() {
    let conf = confirm('Are you sure you want to delete this?');

    if (conf) {
        return true;
    } else {
        return false
    }

});