</div>
    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('assets/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('assets/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{asset('assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('assets/js/custom.min.js')}}"></script>
    <script src="{{asset('assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>
    <script src="{{asset('assets/plugins/html5-editor/wysihtml5-0.3.0.js')}}"></script>
    <script src="{{asset('assets/plugins/html5-editor/bootstrap-wysihtml5.js')}}"></script>
    <script>
        $(document).ready(function() {
         $('.textarea_editor').wysihtml5();
        });
        $("#cadastro-turma").hide();
        $("#cadastro-aluno").hide();
        $("#cadastro-disciplina").hide();
        
        $("#add-turma").click(function(){
            $("#cadastro-turma").addClass( "animated bounceInRight" ).toggle("slow");
        });
        
        $("#add-aluno").click(function(){
            $("#cadastro-aluno").addClass( "animated bounceInRight" ).toggle("slow");
        });

        $("#add-disciplina").click(function(){
            $("#cadastro-disciplina").addClass( "animated bounceInRight" ).toggle("slow");
        });
        
        $(".fechar").click(function(){
            $("#cadastro-turma").hide("slow");
            $("#cadastro-aluno").hide("slow");
            $("#cadastro-disciplina").hide("slow");
        });
    </script>