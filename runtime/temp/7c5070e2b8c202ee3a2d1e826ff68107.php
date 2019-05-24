<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:45:"/www/wwwroot/company/thinkphp/tpl/success.tpl";i:1558325212;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="http://www.aisanhui.com/static/admin/css/bootstrap.css">
     <script type="text/javascript" src="http://www.aisanhui.com/static/admin/js/jquery.min.js"></script>
     <script type="text/javascript" src="http://www.aisanhui.com/static/admin/js/bootstrap.min.js"></script>
    <title>跳转提示</title>
   
</head>
<body>

            
   <div class="container">
   		<div class="col-md-4">
   			<div class="modal fade" id="myModal">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" onclick="window.location.href='<?php echo($url);?>'">
			        	
			           <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
			        </button>
			        <h4 class="modal-title">提示信息</h4>
			      </div>
			      <div class="modal-body">
			        <p><?php echo(strip_tags($msg));?></p>
			      </div>
			      <div class="modal-footer">
			       
			        <button type="button" class="btn btn-primary" onclick="window.location.href='<?php echo($url);?>'"><a id="href" href="<?php echo($url);?>" style='color:#f1f1f1;'>确定</a></button>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		</div>
   	
   </div>

           
    <script type="text/javascript">
        (function(){
            var wait = document.getElementById('wait'),
                href = document.getElementById('href').href;
            var interval = setInterval(function(){
                var time = --wait.innerHTML;
                if(time <= 0) {
                    location.href = href;
                    clearInterval(interval);
                };
            }, 1000);
        })();
        
        
	    $(document).ready(function(){
	        $('#myModal').modal('show');
	    })
    </script>

</body>
</html>
