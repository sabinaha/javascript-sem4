<button id="showForm">Add comment</button>
<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add a comment</h4>
            </div>
            <div class="modal-body">
                <form id="myForm" action="<?php echo base_url() ?>comments/addComment" method="POST">
                    <input type="hidden" name="food" value="pancake";>
                    <textarea name="body"></textarea>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="addcomment">Save changes</button>
            </div>
        </div>
    </div>
</div>
<div id="test"></div>

<script>
    $(function(){
        showComments();

        $('#showForm').click(function(){
            $('#myForm').modal('show');
            $('#myForm').attr('action', '<?php echo base_url() ?>comments/addComment');
        })

        $('#addcomment').click(function(){
            var url = $('#myForm').attr('action');
            var data = $('#myForm').serialize();

            $.ajax({
             type: 'ajax',
                method: 'post',
                url: url,
                data: data,
                async: false,
                dataType: 'json',
                success: function(response){
                    if(response.success){
                        $('#myModal').modal('hide');
                        $('#myForm')[0].reset();
                        $('.alert-success').html('Your comment has been posted!').fadeIn().delay(4000).fadeOut('slow');
                        showComments();
                    }else{
                        alert('Error');
                    }
                },
                error: function(){
                    alert('Could not comment');
                }
            });
        })

        $('#test').on('click', '.deletebutton', function(){
            var id = $(this).attr('data');
            $.ajax({
                type: 'ajax',
                method: 'get',
                async: false,
                url: '<?php echo base_url() ?>comments/delete',
                data:{id:id},
                dataType: 'json',
                success: function(response){
                    if(response.success){
                        $('.alert-success').html('Comment Deleted successfully').fadeIn().delay(4000).fadeOut('slow');
                        showComments();
                    }else{
                        alert('Error');
                    }
                },
                error: function(){
                    alert('Error deleting');
                }
            });
        });
        function showComments(){
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url() ?>comments/showcomments',
                async: false,
                dataType: 'json',
                success: function(data){
                    var output = '';
                    var deletee = '';
                    var i;
                    for(i = 0; i<data.length;i++){
                        if('<?php echo $this->session->userdata('username') ?>' == data[i].username){
                            deletee = '<a href="javascript:;" class="deletebutton" data="'+data[i].id+'">Delete</a>'
                        }else{
                           deletee = '';
                        }
                        if(data[i].food == 'pancake'){
                            output += '<div class="comment">'+deletee+'<h3 class="commentusername">'+data[i].username+'</h3><p>'+data[i].comment+'</p></div>';
                        }
                    }
                    $('#test').html(output);
                },
                error: function(){
                    alert('could not get data from database');
                }
            })
        }
    })
</script>
