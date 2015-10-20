/**
 * Created by Emerson on 10/20/2015.
 */
//https://css-tricks.com/copy-paste-the-web/
var copyBtn = document.querySelector('.js-copybtn');
copyBtn.addEventListener('click', function(event) {

    var Link = document.querySelector('.js-link');
    var range = document.createRange();
    range.selectNode(Link);
    window.getSelection().addRange(range);

    try {
        // Now that we've selected the anchor text, execute the copy command
        var successful = document.execCommand('copy');
        var msg = successful ? 'successful' : 'unsuccessful';
        console.log('Copy email command was ' + msg);
    } catch(err) {
        console.log('Oops, unable to copy');
    }

    // Remove the selections - NOTE: Should use
    // removeRange(range) when it is supported
    window.getSelection().removeAllRanges();
});