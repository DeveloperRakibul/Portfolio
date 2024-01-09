

@if(Session::has('message'))
<script> 
    Swal("Message", " {{ Session::get{'message'} }}", 'success',{
    button:true,
    button: "OK",
    timer:3000,
    
    
});
</script>

return redirect('/index');
@endif 