<script>
    $(document).ready(function () {
        $('.temp').show();
        $.ajax({
            type:'POST',
            data: { _token: '{{csrf_token()}}'},
            url:'{{ route('admin.home.post') }}',

            beforeSend: function(){
                $('.temp').fadeIn();
            },
            complete: function(){
                $('.temp').fadeOut(400);
            },
            success:function(data) {
                $('.content.base').html(data);
            },
        });

    });

    function dashboard(element) {
        $('.temp').show();
        $.ajax({
            type:'POST',
            data: { _token: '{{csrf_token()}}'},
            url:'{{ route('admin.home.post') }}',

            beforeSend: function(){
                $('.temp').fadeIn();
            },
            complete: function(){
                $('.temp').fadeOut(400);
            },
            success:function(data) {
                $('.content.base').html(data);
                $('.menu.side .content ul li a').removeClass('true');
                $(element).addClass('true');
            },
        });
    }

    function posts(element) {
        $('.temp').show();
        $.ajax({
            type:'POST',
            data: { _token: '{{csrf_token()}}'},
            url:'{{ route('admin.posts.post') }}',

            beforeSend: function(){
                $('.temp').fadeIn();
            },
            complete: function(){
                $('.temp').fadeOut(400);
            },
            success:function(data) {
                $('.content.base').html(data);
                $('.menu.side .content ul li a').removeClass('true');
                $(element).addClass('true');
            },
        });
    }
</script>
