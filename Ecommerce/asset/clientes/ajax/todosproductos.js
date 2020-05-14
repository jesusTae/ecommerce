$(document).ready(function(){
    
    $.ajax({
        type : "POST",
        url  : urlInicio,
        dataType : "JSON",
        data : {},
        success: function(data){
            var html = '';
            var i;
            if(data != 0)
            {
                for(i=0; i<data.length; i++)
                {  
                    html += `<div class="col-md-3" style="cursor:pointer;">
                        <div class="blog-card blog-card-blog">
                            <div class="blog-card-image text-center">
                                <a href="#"> <img class="img" src="`+url+data[i].imageurl+`" style=" width: 200px; height:150px;"> </a>
                                <div class="ripple-cont"></div>
                            </div>
                            <div class="blog-table">
                                <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> </h6>
                                <h4 class="blog-card-caption">
                                    <a href="#" class="text-success">`+data[i].nomart+`</a>
                                </h4>
                                <p class="blog-card-description">`+data[i].descripción.substr(0,70)+`...</p>
                                <div class="ftr">
                                    <div class="author">
                                        <p class="pull-left text-success">$`+Intl.NumberFormat('de-DE').format(data[i].valart)+`</p>
                                        
                                    </div>
                                    <p class="pull-right ">Und: `+data[i].qtyart+`<del></del></p>
                                </div>
                            </div>
                        </div>
                    </div>`;
                }
                $('#contenido').html(html);
            }
        }
    });

});