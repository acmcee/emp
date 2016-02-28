$(document).ready(function(){
        $("#searchNumber").click(function(){
            $.ajax({
                type:"GET",
                url:"service.php?number="+$("#keyword").val(),
                dataType:"json",
                success:function(data){
                    if (data.success) {
                        //alert(data.errormes);
                        $("#searchResult").html(data.errormes);
                        $("#updateResult").html("");
                        $("#StaffNumber").val(data.number);
                        $("#StaffName").val(data.name);
                        $("#StaffSex").val(data.sex);
                        $("#StaffJob").val(data.job);
                    }else {
                        $("#searchResult").html(data.errormes);
                        $("#updateResult").html("");
                    }
                },
                error:function(jqXHR){
                    alert("error occur "+ jqXHR.status);
                }
            });
        });
    });
 
    $(document).ready(function(){
        $("#update").click(function(){
            $.ajax({
                type:"POST",
                url:"update.php",
                dataType:"json",
                data:{
                    number:$("#StaffNumber").val(),
                    name:$("#StaffName").val(),
                    sex:$("#StaffSex").val(),
                    job:$("#StaffJob").val(),
                },
                success:function(data){
                    if (data.success) {
                        //alert(data.errormes);
                        $("#updateResult").html(data.errormes);
                        $("#searchResult").html("");
                    }else {
                        $("#updateResult").html("error occurs:"+data.errormes+"succ:"+data.success);
                        $("#searchResult").html("");
                    }
                },
                error:function(jqXHR){
                    alert("error2 occur "+ jqXHR.status);
                }
            });
        });
    });
