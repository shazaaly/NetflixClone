@import Noty from 'noty';
<script>




@if(session('success'))


  new Noty({

    //template: '<div class="noty_message"><span class="noty_text"></span></div>',

    theme: 'relax',
    type: 'success',
    layout:'topRight',
    text: "{{session('success')}}",
    timeout:2000,
    killer: true
    }).show();

</script>


@endif


