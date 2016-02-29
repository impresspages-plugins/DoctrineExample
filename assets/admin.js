$(function() {
    $('.ipsAddRandomProduct').on('click', addRandomProduct);
    $('.ipsDeleteProduct').on('click', deleteProduct);
});

function addRandomProduct(e) {
    e.preventDefault();
    var data = {
        aa: 'DoctrineExample.addRandomProduct',
        securityToken: ip.securityToken
    };
    $.post(ip.baseUrl, data, function (result) {
        location.reload();
    });
}

function deleteProduct(e) {
    e.preventDefault();
    var data = {
        aa: 'DoctrineExample.deleteProduct',
        securityToken: ip.securityToken,
        id: $(this).data('id')
    };
    $.post(ip.baseUrl, data, function (result) {
        location.reload();
    });
}
