<script>
    $(document).ready(function () {
        $('.temp').show();
        $.ajax({
            type:'POST',
            data: { _token : '{{csrf_token()}}'},
            url:'{{ route('admin.home.post') }}',

            beforeSend: function(){
                $('.temp').fadeIn();
            },
            complete: function(){
                $('.temp').fadeOut(400);
            },
            success:function(data) {
                $('.content.base').html(data.html);
                $('.menu.top .page.title span').html(data.title)
            },
        });

    });
    function showpage(element, url) {
        $('.temp').show();
        $.ajax({
            type:'POST',
            data: { _token: '{{csrf_token()}}'},
            url: url,

            beforeSend: function(){
                $('.temp').fadeIn();
            },
            complete: function(){
                $('.temp').fadeOut(400);
            },
            success:function(data) {
                $('.content.base').html(data.html);
                $('.menu.top .page.title span').html(data.title);
                $('.menu.side .content ul li a').removeClass('true');
                $(element).addClass('true');
            },
        });
    }
</script>
