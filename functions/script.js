$(function(){
    $('.form').submit(function(){
        $.ajax({
            url: "http://clinic5.feegow.com.br/components/public/api/specialties/list",
            contentType: "application/json",
            data: "1",
            headers: {'Authorization': 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJmZWVnb3ciLCJhdWQiOiJwdWJsaWNhcGkiLCJpYXQiOiIxNy0wOC0yMDE4IiwibGljZW5zZUlEIjoiMTA1In0.UnUQPWYchqzASfDpVUVyQY0BBW50tSQQfVilVuvFG38'},
            success: function(data){
                
            }
        })
    })
})