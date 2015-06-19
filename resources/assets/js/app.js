$("document").ready(function() {

    /**
     * There are no 'active' 'li' set, set 'id="first
     */
    //$(":not(li.active)").each(function () {
    //    var $this = $(this);
    //    if ("Home" == $this.text()) {
    //        $this.addClass("active");
    //    }
    //    return;
    //});


    //$(":not(li.active)").each(function () {
    //    var $this = $(this);
    //    if ("Home" == $this.text()) {
    //        $this.addClass("active");
    //    }
    //    return;
    //});

    var curLine;
    var $this;
    $("li.active").each(function (){
        $this = $(this);
        if ($this.hasClass('active')) {
            curLine = $this.text();
        }
    });

    /**
     *  routine to advance which menu has been selected
     */
    $("li").click(function (){
        $("li.active").each(function (){
            $("li.active").removeClass("active");
        });
        $(this).addClass("active");
    });

});
